<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValidationController extends AbstractController
{
    #[Route('/panier/validation', name: 'app_validation')]
    public function index(): Response
    {
        return $this->render('panier/validation.html.twig', [
            'controller_name' => 'ValidationController',
        ]);
    }
}
