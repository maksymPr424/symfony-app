<?php
// src/Controller/AddBlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddBlogController extends AbstractController
{
    #[Route('/blog/add', name: 'blog_add', methods: ['POST'])]
    public function index(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $id = $request->request->get('id');
            return $this->redirectToRoute('blog_show', [
                'id' => $id
            ]);
        }

        return $this->redirectToRoute('blog');
       
    }
}