<?php
namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomePageController extends AbstractController
{
    /**
    * @route("/", name="homepage")
    * @return Response
    */
    public function home(Request $request, \Swift_Mailer $mailer){
        $test = "coucou";

        //$contact = new Contact;     
      # Add form fields from ContactType in repository folder
        $form = $this->createForm(ContactType::class);
      # Handle form response
        $form->handleRequest($request);


        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $contact = $form->getData();    

            //mail marche po
            $message = (new \Swift_Message('Nouveau contact'))
                ->setSubject($contact['subject'])
                ->setFrom($contact['email'])
                ->setTo('not.iremy@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            
            $mailer->send($message);

            /* $manager = $this->getDoctrine()->getManager();
            $manager->persist($contact);
            $manager->flush(); */
        }

        return $this->render('home.html.twig',
            ['contactForm' => $form->createView(),
            'test' => $test]);
    }

}