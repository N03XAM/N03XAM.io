<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Sae14Controller extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('sae14/index.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('sae14/portfolio.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    #[Route('/formulaire', name: 'formulaire')]
    public function formulaire(): Response
    {
        return $this->render('sae14/formulaire.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    #[Route('/more', name: 'more')]
    public function more(): Response
    {
        return $this->render('sae14/more.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    #[Route('/CV', name: 'CV')]
    public function CV(): Response
    {
        return $this->render('sae14/CV.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
}
