<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DeliciousGnomeController extends AbstractController
{
    #[Route('/gnome', name: 'app_delicious_gnome')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
