<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI3wh3dQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI3wh3dQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI3wh3dQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI3wh3dQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI3wh3dQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'I3wh3dQ',
    'container.build_id' => '1073a76c',
    'container.build_time' => 1610558177,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI3wh3dQ');
