<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('/blog/blog.html.twig');
    }

    #[Route('/blog/{id}', name: 'blog_show')]
    public function show(int $id): Response
    {
        return $this->render('/blog/blog_show.html.twig', [
            'id' => $id,
        ]);
    }
}