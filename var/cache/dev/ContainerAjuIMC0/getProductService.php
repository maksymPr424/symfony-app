<?php

namespace ContainerAjuIMC0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.GwIh.sb.App\Entity\Product' shared service.
     *
     * @return \App\Entity\Product
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.GwIh.sb": it needs an instance of "App\\Entity\\Product" but this type has been excluded in "config/services.yaml".');
    }
}
