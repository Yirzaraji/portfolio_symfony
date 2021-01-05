<?php
namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomePageController extends AbstractController
{
    /**
    * @route("/", name="homepage")
    * @return Response
    */
    public function home(Request $request, \Swift_Mailer $mailer){
        $test = "coucou";

        $contact = new Contact;     
      # Add form fields
        $form = $this->createFormBuilder($contact)
        ->add('name', TextType::class, array('label'=> 'name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('email', TextType::class, array('label'=> 'email','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('subject', TextType::class, array('label'=> 'subject','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
        ->add('message', TextareaType::class, array('label'=> 'message','attr' => array('class' => 'form-control')))
        ->add('Save', SubmitType::class, array('label'=> 'submit', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))
        ->getForm();
      # Handle form response
        $form->handleRequest($request);


        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            //dump($name);

            // l'auteur est utilisateur connecté au moment d ela creation d'annonce
            $contact->setName($name);
            $contact->setEmail($email);          
            $contact->setSubject($subject);     
            $contact->setMessage($message);      

            //mail marche po
            $message = (new \Swift_Message('Nouveau contact'))
                ->setSubject($subject)
                ->setFrom($email)
                ->setTo('not.iremy@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            
            $mailer->send($message);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($contact);
            $manager->flush();
        }

        return $this->render('home.html.twig',
            ['form' => $form->createView(),
            'test' => $test]);
    }

}