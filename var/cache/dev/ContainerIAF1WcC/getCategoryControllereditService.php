<?php

namespace ContainerIAF1WcC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gADJ5td.App\Controller\CategoryController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.gADJ5td'] ?? $container->load('get_ServiceLocator_GADJ5tdService'));

        if (isset($container->privates['.service_locator.gADJ5td.App\\Controller\\CategoryController::edit()'])) {
            return $container->privates['.service_locator.gADJ5td.App\\Controller\\CategoryController::edit()'];
        }

        return $container->privates['.service_locator.gADJ5td.App\\Controller\\CategoryController::edit()'] = $a->withContext('App\\Controller\\CategoryController::edit()', $container);
    }
}
