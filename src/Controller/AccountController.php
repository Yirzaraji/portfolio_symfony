<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\CreateFormType;
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
    public function admin(Request $request, AuthenticationUtils $utils)
    {

        
        $error = $utils->getLastAuthenticationError();
        //return $this->redirectToRoute('/admin');

        return $this->render('account/admin.html.twig', [
            'hasError' => $error !== null
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
