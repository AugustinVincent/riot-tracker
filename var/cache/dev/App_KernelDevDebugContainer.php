<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container626xS3U\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container626xS3U/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container626xS3U.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container626xS3U\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container626xS3U\App_KernelDevDebugContainer([
    'container.build_hash' => '626xS3U',
    'container.build_id' => 'c822b191',
    'container.build_time' => 1638440810,
], __DIR__.\DIRECTORY_SEPARATOR.'Container626xS3U');
