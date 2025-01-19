<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;  
class AbdoulahiiController extends AbstractController
{
    #[Route('/abdoulahii', name: 'app_abdoulahii')]
    public function index(): Response
    {
        return $this->render('abdoulahii/index.html.twig', [
            'controller_name' => 'AbdoulahiiController',
        ]);
    }
    #[Route('/abdoulahii/base', name: 'app_base ')]
    public function base(): Response
    {
        return $this->render('abdoulahii/base.html.twig', [
            'controller_name' => 'AbdoulahiiController',
        ]);
    }

    // Route pour le CV
    #[Route('/abdoulahii/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('abdoulahii/cv.html.twig', [
            'controller_name' => 'AbdoulahiiController',
        ]);
    }

    // Route pour l'avis
    #[Route('/abdoulahii/avis', name: 'app_avis')]
    public function avis(): Response
    {
        return $this->render('abdoulahii/avis.html.twig', [
            'controller_name' => 'AbdoulahiiController',
        ]);
    }

    #[Route('/abdoulahii/E-portfolio', name: 'app_E-portfolio')]
    public function competences(): Response
    {
        return $this->render('abdoulahii/E-portfolio.html.twig', [
            'controller_name' => 'AbdoulahiiController',
        ]);
    }
    
    
}