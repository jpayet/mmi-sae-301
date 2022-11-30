<?php

namespace App\Controller;

use App\Entity\Manifestations;
use App\Repository\ManifestationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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


    #[Route('/bringId', name: 'app_bringId')]
    public function bringid(Request $request, ManagerRegistry $doctrine): Response
    {
        $id = $request -> query -> get("id");

        $bring = $doctrine->getRepository(Manifestations::class)->find($id);

        return $this->render('billeterie/popupcontent.html.twig', [
            'Bring' => $bring,
        ]);

    }
}
