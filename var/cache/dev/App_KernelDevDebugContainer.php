<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAjuIMC0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAjuIMC0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAjuIMC0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAjuIMC0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAjuIMC0\App_KernelDevDebugContainer([
    'container.build_hash' => 'AjuIMC0',
    'container.build_id' => '8d831d19',
    'container.build_time' => 1744546510,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAjuIMC0');
