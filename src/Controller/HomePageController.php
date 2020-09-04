<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomePageController extends AbstractController
{
    /**
    * @route("/", name="homepage")
    */
    public function home(){
        $test = "coucou";

        return $this->render('home.html.twig', [
            'test' => $test
        ]);
    }
}