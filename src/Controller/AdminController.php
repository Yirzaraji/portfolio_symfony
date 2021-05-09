<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Post;
use App\Entity\Image;
use App\Form\EditFormType;
use App\Form\ImageFormType;
use App\Form\CreateFormType;
use App\Repository\PostRepository;
use Doctrine\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/backoffice", name="admin")
     */
    public function Backoffice(Request $request, PaginatorInterface $paginator): Response
    {
        
        $dataPosts = $this->getDoctrine()
                          ->getRepository(Post::class)
                          ->findBy([],['id' => 'desc']);

        //pagination
        $posts = $paginator->paginate(
            $dataPosts,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('admin/backoffice.html.twig', [
            'posts' => $posts
        ]);
    }
    /**
     * @Route("/backoffice/test", name="admin_test", methods={"GET"})
     */
    public function BackofficeTest(PostRepository $postRepository): Response
    {
        
        $posts = $postRepository->findBy([],['id' => 'desc']);
        $response = $this->json($posts, 200, [], ['groups' => 'post:backoffice']);
        return $response;
    }

    /**
     * Edit le post
     * 
     * @Route("/backoffice/edit-{id}", name="admin_edit")
     * @return Response
     */
    public function edit(Post $post, Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(CreateFormType::class, $post);
        $form->handleRequest($request);

        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $dataForm = $form->getData(); 
            //dump($form['git']->getData());
            $lien = $form['lien']->getData();
            $git = $form['git']->getData();
    
                foreach($post->getImages() as $image){
                    $image->setPost($post);
                    $manager->persist($image);
                }

                foreach($post->getTags() as $tag){
                    $tag->setPost($post);
                    $manager->persist($tag);
                }

                $time = new \DateTime();
    
                $manager->persist($post);
                $manager->persist($post->setDate($time));
                $manager->flush();
                
                return $this->redirectToRoute('admin');      
        }

        return $this->render('admin/edit.html.twig', [
            'editPostForm' => $form->createView(),
            'post' => $post
        ]);
    }

    /**
     * Delete le post
     * 
     * @Route("/backoffice/delete-{id}", name="admin_delete")
     * @return Response
     */
    public function delete($id)
    {
        //dump($id);
        $trashPost = $this->getDoctrine()->getRepository(Post::class)->find($id);

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($trashPost);
        $manager->flush();
        
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("/backoffice/create", name="post_create")
     */
    public function createPost(Request $request)
    {
        $post = new Post();
        //$post->setTechnos('<ul><li>technos</li><li>technos</li></ul>');

        $form = $this->createForm(CreateFormType::class, $post);
        $form->handleRequest($request);
        //dump($form);

        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            //permet de persister la collection d'image 
            //(peut aussi se faire en precisant la cascade persist dans les annotations orm
            foreach($post->getImages() as $image){
                $image->setPost($post);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($image);
            }

            foreach($post->getTags() as $tag){
                $tag->setPost($post);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($tag);
            }
            
            $time = new \DateTime();

            $dataForm = $form->getData();
            //dump($dataForm);     
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($dataForm);
            $manager->persist($post->setDate($time));
            $manager->flush();

            $this->addFlash('success', 'Article Created! power is power!');

            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/createPost.html.twig', [
            'createPostForm' => $form->createView()
        ]);
    }
}
