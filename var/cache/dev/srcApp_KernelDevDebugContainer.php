<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIZC3CW2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIZC3CW2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIZC3CW2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIZC3CW2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIZC3CW2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IZC3CW2',
    'container.build_id' => '1b4b4304',
    'container.build_time' => 1566470196,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIZC3CW2');
