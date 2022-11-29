<?php

namespace App\Controller;

use App\Repository\ManifestationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilleterieController extends AbstractController
{
    #[Route('/billeterie', name: 'app_billeterie')]
    public function index(EntityManagerInterface $entityManager, ManifestationsRepository $manifRepository): Response
    {

        $manifs = $manifRepository->findAll();

        return $this->render('billeterie/index.html.twig', [
            'controller_name' => 'BilleterieController',
            'manifs' => $manifs
        ]);

    }
}
