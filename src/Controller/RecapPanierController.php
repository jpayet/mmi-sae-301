<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecapPanierController extends AbstractController
{
    #[Route('/panier/recap', name: 'app_recap_panier')]
    public function index(): Response
    {
        return $this->render('panier/recap.html.twig', [
            'controller_name' => 'RecapPanierController',
        ]);
    }
}
