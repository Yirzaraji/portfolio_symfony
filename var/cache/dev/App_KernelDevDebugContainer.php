<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGnAMsVd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGnAMsVd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGnAMsVd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGnAMsVd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGnAMsVd\App_KernelDevDebugContainer([
    'container.build_hash' => 'GnAMsVd',
    'container.build_id' => '517c33ee',
    'container.build_time' => 1609859249,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGnAMsVd');
