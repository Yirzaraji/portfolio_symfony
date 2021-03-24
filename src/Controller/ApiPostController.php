<?php

namespace App\Controller;

use Normalizer;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="api_post_index", methods={"GET"})
     */
    public function index(PostRepository $postRepository, NormalizerInterface $normalize)
    {
        $posts = $postRepository->findAll();
        $postsNormalises = $normalize->normalize($posts);

        $json = json_encode($posts);

        return $this->render('api_post/index.html.twig', [
            'controller_name' => 'ApiPostController',
        ]);
    }
}
