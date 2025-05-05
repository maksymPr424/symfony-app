<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\RouterInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;


class AccessDeniedListener implements EventSubscriberInterface
{
    private RouterInterface $router;
    private LoggerInterface $logger;
    private RequestStack $requestStack;

    public function __construct(RouterInterface $router, LoggerInterface $logger, RequestStack $requestStack)
    {
        $this->router = $router;
        $this->logger = $logger;
        $this->requestStack = $requestStack;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => ['onKernelException', 100],
        ];
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();
        $this->logger->info('Exception caught in AccessDeniedListener: ' . get_class($exception));

        if ($exception instanceof AccessDeniedException) {
            $this->logger->info('AccessDeniedException caught, redirecting to app_login');

            // Add a flash message
            $request = $this->requestStack->getCurrentRequest();
            if ($request && $request->getSession()) {
                $request->getSession()->getFlashBag()->add('warning', 'You must to be admin in to access this page.');
            }

            $response = new RedirectResponse($this->router->generate('homepage'));
            $event->setResponse($response);
        }
    }
}
