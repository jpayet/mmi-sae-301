<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Repository\LieuxRepository;
use App\Repository\ManifestationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SallesController extends AbstractController
{
    #[Route('/salles', name: 'app_salles')]
    public function index(EntityManagerInterface $entityManager, LieuxRepository $salleRepository): Response
    {

        $salles = $salleRepository->findAll();

        return $this->render('salles/index.html.twig', [
            'controller_name' => 'SallesController',
            'sallestab' => $salles
        ]);

    }

    #[Route('/salles/{id}', name:'app_salles_select')]
    public function pagesalles( LieuxRepository $salleRepository, $id): Response
    {
        $salle_id = $salleRepository->find($id);

        return $this->render('salles/salle.html.twig', [
            'salle' => $salle_id
        ]);
    }
}
