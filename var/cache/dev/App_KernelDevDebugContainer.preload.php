<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/Container7PH3r2V/App_KernelDevDebugContainer.php';
require __DIR__.'/Container7PH3r2V/EntityManager_9a5be93.php';
require __DIR__.'/Container7PH3r2V/getSessionService.php';
require __DIR__.'/Container7PH3r2V/getServicesResetterService.php';
require __DIR__.'/Container7PH3r2V/getSecrets_VaultService.php';
require __DIR__.'/Container7PH3r2V/getRouting_LoaderService.php';
require __DIR__.'/Container7PH3r2V/getErrorControllerService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/Container7PH3r2V/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/Container7PH3r2V/getDoctrineService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container7PH3r2V/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container7PH3r2V/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container7PH3r2V/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container7PH3r2V/getCache_SystemClearerService.php';
require __DIR__.'/Container7PH3r2V/getCache_SystemService.php';
require __DIR__.'/Container7PH3r2V/getCache_GlobalClearerService.php';
require __DIR__.'/Container7PH3r2V/getCache_AppClearerService.php';
require __DIR__.'/Container7PH3r2V/getCache_AppService.php';
require __DIR__.'/Container7PH3r2V/getAnnotations_ReaderService.php';
require __DIR__.'/Container7PH3r2V/getAnnotations_CachedReaderService.php';
require __DIR__.'/Container7PH3r2V/getTemplateControllerService.php';
require __DIR__.'/Container7PH3r2V/getRedirectControllerService.php';
require __DIR__.'/Container7PH3r2V/getUserStatsRepositoryService.php';
require __DIR__.'/Container7PH3r2V/getUserRepositoryService.php';
require __DIR__.'/Container7PH3r2V/getTop3ChampionsRepositoryService.php';
require __DIR__.'/Container7PH3r2V/getItemsRepositoryService.php';
require __DIR__.'/Container7PH3r2V/getChampionRepositoryService.php';
require __DIR__.'/Container7PH3r2V/getDefaultControllerService.php';
require __DIR__.'/Container7PH3r2V/get_Session_DeprecatedService.php';
require __DIR__.'/Container7PH3r2V/get_ServiceLocator_YxNo8ZPService.php';
require __DIR__.'/Container7PH3r2V/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/Container7PH3r2V/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/Container7PH3r2V/get_Container_Private_FilesystemService.php';
require __DIR__.'/Container7PH3r2V/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\DefaultController';
$classes[] = 'App\Service\LiveMatchService';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'App\Service\UserDataService';
$classes[] = 'App\Service\UserGameHistoryService';
$classes[] = 'App\Service\StoreItemsService';
$classes[] = 'App\Service\StoreChampionService';
$classes[] = 'App\Service\Last10GamesStatsService';
$classes[] = 'App\Service\SignUpService';
$classes[] = 'App\Service\LoginService';
$classes[] = 'App\Repository\ChampionRepository';
$classes[] = 'App\Repository\ItemsRepository';
$classes[] = 'App\Repository\Top3ChampionsRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\UserStatsRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);
