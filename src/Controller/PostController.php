<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post/new", name="post")
     */
    public function index(): Response
    {
        return $this->render('post/add.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
