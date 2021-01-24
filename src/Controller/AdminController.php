<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Image;
use App\Form\EditFormType;
use App\Form\ImageFormType;
use App\Form\CreateFormType;
use Doctrine\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/backoffice", name="admin")
     */
    public function backoffice(Request $request, PaginatorInterface $paginator): Response
    {
        
        $dataPosts = $this->getDoctrine()
                    ->getRepository(Post::class)
                    ->findBy([],['id' => 'desc']);

        //pagination
        $posts = $paginator->paginate(
            $dataPosts,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/backoffice.html.twig', [
            'posts' => $posts
        ]);
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
            //dump($post->getImages());

            foreach($post->getImages() as $image){
                $image->setPost($post);
                $manager->persist($image);
            }

            $manager->persist($post);
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
        dump($id);
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
        $post->setTechnos('<ul><li>technos</li><li>technos</li></ul>');
        //dump($post);

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

            $dataForm = $form->getData();     
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($dataForm);
            $manager->flush();

            $this->addFlash('success', 'Article Created! power is power!');

            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/createPost.html.twig', [
            'createPostForm' => $form->createView()
        ]);
    }
}
