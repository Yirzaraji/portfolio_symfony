<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\CreateFormType;
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

        //$paginator = $this->get('knp_paginator');
        $posts = $paginator->paginate(
            $dataPosts,
            $request->query->getInt('page', 1),
            10
        );

        $form = $this->createForm(CreateFormType::class);
        # Handle form response
        $form->handleRequest($request);


        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $dataForm = $form->getData();    
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($dataForm);
            $manager->flush();
        }


        return $this->render('admin/backoffice.html.twig', [
            'createPostForm' => $form->createView(),
            'posts' => $posts
        ]);
    }
}
