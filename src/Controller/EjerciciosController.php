<?php

namespace App\Controller;

use PhpParser\Node\Stmt\Switch_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EjerciciosController extends AbstractController
{
    #[Route('/ejercicios', name: 'app_ejercicios')]
    public function index(): Response
    {
        return $this->render('ejercicios/index.html.twig', [
            'controller_name' => 'EjerciciosController',
        ]);
    }

    // #[Route('/ejerciciouno/{titulo}', name: 'app_ejercicios_ej_uno', 
    // requirements:['titulo' => '[a-zA-Z\s]+'])]
    // public function listartitulo($titulo): Response
    // {
    //     return new Response("<html><body><h1>$titulo</h1></body></html>");
    // }

    #[Route('/ejerciciodos/{edad}', name: 'app_ejercicios_ej_dos',
    requirements:['edad' => '\d+'])]
    public function listaredad($edad): Response
    {
        $fecha_actual = date("d-m-Y");
        $fecha_def = date("Y", strtotime($fecha_actual."- $edad years"));
        return new Response("<html><body><h1>Con $edad años, esta persona nació en el año $fecha_def o el anterior</h1></body></html>");

    }

    #[Route('/ejerciciotres/{uno}&{dos}', name: 'app_ejercicios_ej_tres',
    requirements:['uno' => '\d+', 'dos' => '\d+'])]
    public function mostrarnumeros($uno,$dos): Response
    {
       $num = rand($uno,$dos);
        return new Response("<html><body><h1>$num</h1></body></html>");

    }

    #[Route('/ejerciciocuatro/{figura}', name: 'app_ejercicios_ej_tres',
    requirements:['uno' => '\d+', 'dos' => '\d+'])]
    public function mostrararea($figura): Response
    {
                return new Response("<html><body><h1>$figura</h1></body></html>");
    }
}
