<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
    * @Route("/", name="home")
    * @return Response
    */
    public function index(): Response
    {
        return $this->render('page/home.html.twig');
    }
}
