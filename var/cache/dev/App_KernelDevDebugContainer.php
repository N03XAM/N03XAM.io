<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNOZMBe4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNOZMBe4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNOZMBe4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNOZMBe4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNOZMBe4\App_KernelDevDebugContainer([
    'container.build_hash' => 'NOZMBe4',
    'container.build_id' => 'c62cc125',
    'container.build_time' => 1732400435,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNOZMBe4');