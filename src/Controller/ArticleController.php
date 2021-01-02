<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    /**
    * @route("/article", name="article")
    */
    public function home(){
        $test = "coucou";

        return $this->render('article.html.twig', [
            'test' => $test
        ]);
    }
}