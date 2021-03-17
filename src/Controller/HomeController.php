<?php

namespace App\Controller;

use App\Entity\Publicity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'publicitytop'=> $this->getDoctrine()->getRepository(Publicity::class)->findByDate("TOP"),
            'publicitybottom'=> $this->getDoctrine()->getRepository(Publicity::class)->findByDate("BOTTOM"),


        ]);
    }




}
