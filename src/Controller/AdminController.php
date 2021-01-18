<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\EditFormType;
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

        //pagination
        $posts = $paginator->paginate(
            $dataPosts,
            $request->query->getInt('page', 1),
            10
        );

        $form = $this->createForm(CreateFormType::class);
        $form->handleRequest($request);


        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $dataForm = $form->getData();     
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($dataForm);
            $manager->flush();

            return $this->redirectToRoute('admin');
        }


        return $this->render('admin/backoffice.html.twig', [
            'createPostForm' => $form->createView(),
            'posts' => $posts
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
     * Edit le post
     * 
     * @Route("/backoffice/edit-{id}", name="admin_edit")
     * @return Response
     */
    public function edit(Request $request, $id)
    {

        $form = $this->createForm(EditFormType::class);
        $form->handleRequest($request);


        //si le form est soumis && si il est valid ->execute
        if ($form->isSubmitted() && $form->isValid()) {

            $dataForm = $form->getData(); 
            dump($dataForm); 
            
            dump($id);
            $editPost = $this->getDoctrine()->getRepository(Post::class)->find($id);
            $editPost->setTitle('New titre')
                     ->setProjectImage('image lien')
                     ->setLien('Lien demo')
                     ->setCategorie('categorie')
                     ->setGit('git lien')
                     ->setProjectDescription('Description')
            ;


            $manager = $this->getDoctrine()->getManager();
            $manager = $this->persist($editPost);
            $manager->flush();
        }

        return $this->render('admin/edit.html.twig', [
            'editPostForm' => $form->createView()
        ]);
    }
}
