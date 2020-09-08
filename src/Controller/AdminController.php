<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController
{
    /**
    * @route("/admin", name="admin")
    */
    public function home(){
        $test = "Coucou ADmin";

        return $this->render('admin.html.twig', [
            'test' => $test
        ]);
    }
}