<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DeliciousGnomeController extends AbstractController
{
    #[Route('/delicious/gnome', name: 'app_delicious_gnome')]
    public function index(): Response
    {
        return $this->render('delicious_gnome/index.html.twig', [
            'controller_name' => 'DeliciousGnomeController',
        ]);
    }
}
