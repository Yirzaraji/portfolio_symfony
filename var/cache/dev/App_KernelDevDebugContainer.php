<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9AvkKOx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9AvkKOx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9AvkKOx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9AvkKOx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9AvkKOx\App_KernelDevDebugContainer([
    'container.build_hash' => '9AvkKOx',
    'container.build_id' => 'e4a630b6',
    'container.build_time' => 1600862384,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9AvkKOx');
