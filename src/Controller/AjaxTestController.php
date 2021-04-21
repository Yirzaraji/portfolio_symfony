<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AjaxTestController extends AbstractController
{
    /**
     * @Route("/ajax/test", name="ajax_test")
     */
    public function index(Request $request): Response
    {

        //dump($request->request->get('name'));
        if($request->request->get('ischecked') == true){
            $data = true;
            return new JsonResponse($data);
        }else if($request->request->get('ischecked') == false){
            $data = false;
            //return new JsonResponse($data);
        }

        return $this->render('ajax_test/index.html.twig', [
            'controller_name' => 'AjaxTestController',
        ]);
    }
}
