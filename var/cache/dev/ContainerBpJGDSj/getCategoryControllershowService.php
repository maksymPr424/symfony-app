<?php

namespace ContainerBpJGDSj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZAUGEyP.App\Controller\Admin\CategoryController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZAUGEyP.App\\Controller\\Admin\\CategoryController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'category' => ['privates', '.errored..service_locator.ZAUGEyP.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.ZAUGEyP": it needs an instance of "App\\Entity\\Category" but this type has been excluded in "config/services.yaml".'],
        ], [
            'category' => 'App\\Entity\\Category',
        ]))->withContext('App\\Controller\\Admin\\CategoryController::show()', $container);
    }
}
