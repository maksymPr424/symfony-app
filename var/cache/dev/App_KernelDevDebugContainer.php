<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIAF1WcC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIAF1WcC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIAF1WcC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIAF1WcC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIAF1WcC\App_KernelDevDebugContainer([
    'container.build_hash' => 'IAF1WcC',
    'container.build_id' => 'e84d5c11',
    'container.build_time' => 1743881537,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIAF1WcC');
