<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    #[Route('/registro', name: 'app_registro')]
    public function index(): Response
    {
        return $this->render('registro/index.html.twig', [
            'controller_name' => 'RegistroController',
        ]);
    }

    #[Route('/saludo', name: 'app_registro_listado')]
    public function listado(): Response
    {
        return new Response("<html><body><h1>Este es mi primer control </h1></body></html>");
    }
}
