<?php

namespace ContainerXbqaAGO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gADJ5td.App\Controller\CategoryController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gADJ5td.App\\Controller\\CategoryController::delete()'] = ($container->privates['.service_locator.gADJ5td'] ?? $container->load('get_ServiceLocator_GADJ5tdService'))->withContext('App\\Controller\\CategoryController::delete()', $container);
    }
}
