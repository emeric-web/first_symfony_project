<?php
// src/Controller/ListsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListsController extends AbstractController
{
    /**
    * @Route("/meslistes", name="list.index")
    * @return Response
    */
    public function index(): Response
    {
        return $this->render('lists/index.html.twig');
    }
}
