<?php

namespace ContainerH6mGxsh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUriSignerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UriSigner
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['uri_signer'] = $container->createProxy('UriSignerGhostB68a0a1', static fn () => \UriSignerGhostB68a0a1::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UriSigner.php';

        return ($lazyLoad->__construct($container->getParameter('kernel.secret')) && false ?: $lazyLoad);
    }
}
