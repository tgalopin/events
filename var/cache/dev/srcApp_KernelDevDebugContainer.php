<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFRztSL6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFRztSL6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFRztSL6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFRztSL6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFRztSL6\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'FRztSL6',
    'container.build_id' => '8d1058ac',
    'container.build_time' => 1547318415,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFRztSL6');
