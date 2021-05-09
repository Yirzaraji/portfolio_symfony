<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function api(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();
        $response = $this->json($posts, 200, [], ['groups' => 'post:cocolasticot']);

        return $this->render('api/apiPosts.html.twig',
        [
            'responseJson' => $response
        ]);
    }

    /**
     * @Route("/api/post", name="api_post_index", methods={"GET"})
     */
    public function readPost(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();

        //1er facon de faire
        //$postsNormalises = $normalize->normalize($posts, null, ['groups' => 'post:cocolasticot']);
        // = json_encode($postsNormalises);

        //2e facon de faire
        /* $json = $serializer->serialize($posts, 'json', ['groups' => 'post:cocolasticot']);
        $response = new jsonResponse($json, 200, [], true); */

        //3e facon de faire "post:cocolasticot" se referer aux anotation de l'entité post
        $response = $this->json($posts, 200, [], ['groups' => 'post:cocolasticot']);
        return $response;
    }

    /**
     * send api http request using POST protocol
     * @Route("/api/post", name="api_post_store", methods={"POST"})
     */
    public function storePost(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, ValidatorInterface $validator)
    {
        //recuperer le corps de la requete
        $jsonRes = $request->getContent();

        try{
            //deserialize = json to php object
            $post = $serializer->deserialize($jsonRes, Post::class, 'json');
    
            $post->setProjectImage("http://placehold.it/400");
            
            $errors = $validator->validate($post);
            if(count($errors) > 0){
                return $this->json($errors, 400);
            }

            //uncomment this and it work (waiting for json token auth implementation)
            //$em->persist($post);
            //$em->flush();
    
            //dd($post);
            return $this->json($post, 201, [], ['groups' => 'post:cocolasticot']);
        }
        catch(NotEncodableValueException $e){
            return $this->json([
                'status' => 400,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * @Route("/api/post/{id}", name="api_post_patch", methods={"PATCH"})
     */
    public function updatePost(SerializerInterface $serializer, $id, Request $request, PostRepository $postRepository, EntityManagerInterface $em)
    {
        $posts = $postRepository->findOneBy(['id' => $id]);
        $jsonRes = $request->getContent();

        try{
            $data = $serializer->deserialize($jsonRes, Post::class, 'json');
            //dd($posts->getTitle());

            //uncomment this and it work (waiting for json token auth implementation)
            /* $em->persist($posts);
            $em->persist($posts->setTitle($data->getTitle()));
            $em->flush(); */
            
            return $this->json($posts, 201, [], ['groups' => 'post:cocolasticot']);
        }
        catch(NotEncodableValueException $e){
            return $this->json([
                'status' => 400,
                'message' => "Success"
            ], 400);
        }
    }

    /**
     * @Route("/api/post/{id}", name="api_post_patch", methods={"DELETE"})
     */
    public function deletePost($id)
    {
        $trashPost = $this->getDoctrine()->getRepository(Post::class)->find($id);

        //uncomment this and it work (waiting for json token auth implementation)
        /* $manager = $this->getDoctrine()->getManager();
        $manager->remove($trashPost);
        $manager->flush();; */

        return new JsonResponse(['status' => 'post deleted'], Response::HTTP_NO_CONTENT);
    }
}
