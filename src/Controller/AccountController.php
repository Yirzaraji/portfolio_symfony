<?php

namespace App\Controller;

use App\Entity\Post;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends AbstractController
{
    /**
     * @Route("/admin", name="account_login")
     * @return Response
     */
    public function admin(Request $request, PaginatorInterface $paginator, AuthenticationUtils $utils)
    {

        $posts = $this->getDoctrine()
                    ->getRepository(Post::class)
                    ->findAll();

        //$paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1),
            4
        );

        $error = $utils->getLastAuthenticationError();
        //return $this->redirectToRoute('/admin');

        return $this->render('account/admin.html.twig', [
            'hasError' => $error !== null,
            'posts' => $posts,
            'pagination' => $pagination
        ]);


    }

    /**
     * @Route("/logout", name="account_logout")
     * @return void
     */
    public function logout(){
        //rien
    }
}
