<?php
namespace App\Controller;

use App\Entity\Post;
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

        /* $repo = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repo->findAll(); */

        //Get data from entity Post using query builder
        $devPost = $this->getDoctrine()->getRepository(Post::class)->findPostsCategory("dev");
        $printPost = $this->getDoctrine()->getRepository(Post::class)->findPostsCategory("print");
        $designPost = $this->getDoctrine()->getRepository(Post::class)->findPostsCategory("design");
        //dump($designPost);

        //$contact = new Contact;     
        # Add form fields from ContactType in repository folder
        $form = $this->createForm(ContactType::class);
        # Handle form response
        $form->handleRequest($request);

        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $contact = $form->getData();    
            //dump($contact['message']));

            $messageBody = $contact['message'];

            //mail marche po
            $message = (new \Swift_Message('Nouveau contact'))
                ->setSubject($contact['subject'])
                ->setFrom($contact['email'])
                ->setTo('not.iremy@gmail.com')
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html',
                )
            ;
            $mailer->send($message);

            // add flash probleme affichage marche pas
            $this->addFlash(
                'success',
                'Votre mail a bien été <b<enregistré</b>'
            );
            
            return $this->redirectToRoute('homepage');
            /* $manager = $this->getDoctrine()->getManager();
            $manager->persist($contact);
            $manager->flush(); */
        }

        return $this->render('home.html.twig',
            ['contactForm' => $form->createView(),
            'test' => $test,
            'devPosts' => $devPost,
            'printPosts' => $printPost,
            'designPosts' => $designPost
            ]);
    }

    /**
    * @route("/cv", name="cv")
    * @return Response
    */
    public function cv(){


        return $this->render('cv.html.twig');
    }

}