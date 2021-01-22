<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\AccountType;
use App\Form\CreateFormType;
use App\Entity\PasswordUpdate;
use App\Form\PasswordUpdateType;
use Symfony\Component\Form\FormError;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/admin", name="account_login")
     * @return Response
     */
    public function admin(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();

        return $this->render('account/admin.html.twig', [
            'hasError' => $error !== null
        ]);
    }

    

    /**
     * @Route("/logout", name="account_logout")
     * 
     * @return void
     */
    public function logout(){
        //rien
    }


    /**
     * Edit profile user
     * 
     * @Route("/admin/profile", name="account_profile")
     * 
     * @return Response
     */
    public function profile(Request $request, ObjectManager $manager){

        $user = $this->getUser();
        $form = $this->createForm(AccountType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('account/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * Permet de modifier le mot de passe
     *
     * @Route("/account/password-update", name="account_password")
     * 
     * @return Response
     */
    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, ObjectManager $manager) {
        $passwordUpdate = new PasswordUpdate();

        $user = $this->getUser();

        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // 1. Vérifier que le oldPassword du formulaire soit le même que le password de l'user
            if(!password_verify($passwordUpdate->getOldPassword(), $user->getHash())){
                // Gérer l'erreur
                $form->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe actuel !"));
            } else {
                $newPassword = $passwordUpdate->getNewPassword();
                $hash = $encoder->encodePassword($user, $newPassword);

                $user->setHash($hash);

                $manager->persist($user);
                $manager->flush();

                $this->addFlash(
                    'success',
                    "Votre mot de passe a bien été modifié !"
                );

                return $this->redirectToRoute('homepage');
            }
        }


        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
