<?php

namespace App\Service;

use App\Entity\NotionPage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class NotionService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    public function __construct(
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag
    ) {
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;
        $this->parameterBag = $parameterBag;
    }

    public function getNotionPages(): array
    {
        $notionBaseUrl = $this->parameterBag->get('notion_base_url');
        $notionToken = $this->parameterBag->get('notion_token');

        $notionSearchUrl = sprintf('%s/search', $notionBaseUrl);
        $authorizationHeader = sprintf('Bearer %s', $notionToken);

        $pages = $this->httpClient->request('POST', $notionSearchUrl, [
            'body' => [
                'query' => '',
            ],
            'headers' => [
                'Authorization' => $authorizationHeader,
                'Notion-Version' => '2021-08-16',
            ],
        ]);

        return json_decode($pages->getContent(), true);
    }

    public function storeNotionPages(): array
    {
        $pages = $this->getNotionPages();

        $notionPages = [];

        foreach ($pages['results'] as $page) {
            $existingNotionPage = $this->entityManager->getRepository(NotionPage::class)->findOneByNotionId($page['id']);

            if (null !== $existingNotionPage) {
                continue;
            }

            if (isset($page['properties']['title'])) {
                $title = substr($page['properties']['title']['title'][0]['plain_text'], 0, 255);
            } else {
                $title = 'No Title';
            }
            $creationDate = new \DateTime($page['created_time']);

            $notionPage = new NotionPage();
            $notionPage->setNotionId($page['id']);
            $notionPage->setTitle($title);
            $notionPage->setCreationDate($creationDate);

            $notionPages[] = $notionPage;
            $this->entityManager->persist($notionPage);
        }
        $this->entityManager->flush();

        return $notionPages;
    }
}
