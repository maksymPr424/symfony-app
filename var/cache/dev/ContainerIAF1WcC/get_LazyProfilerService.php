<?php

namespace ContainerIAF1WcC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_LazyProfilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lazy_profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['.lazy_profiler'] = $container->createProxy('ProfilerProxy8977808', static fn () => \ProfilerProxy8977808::createLazyProxy(static fn () => self::do($container, false)));
        }

        return ($container->services['.container.private.profiler'] ?? self::get_Container_Private_ProfilerService($container));
    }
}
