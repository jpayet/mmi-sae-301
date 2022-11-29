<?php

namespace App\Controller\Admin;

use App\Entity\Genres;
use App\Entity\Lieux;
use App\Entity\Manifestations;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('Admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('Back Office');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Manifestations', 'fas fa-list', Manifestations::class);
        yield MenuItem::linkToCrud('Lieux', 'fas fa-list', Lieux::class);
        yield MenuItem::linkToCrud('Genres', 'fas fa-list', Genres::class);
    }
}