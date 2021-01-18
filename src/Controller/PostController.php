<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
     /**
     * @Route("/{id}", name="post_show")
     */
    public function post($id)
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->findOneBy(array('id' => $id));

        return $this->render('post/post.html.twig', [
            'post' => $post
        ]);
    }
}
