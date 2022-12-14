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
        yield MenuItem::linkToCrud('Manifestations', 'fa-solid fa-masks-theater', Manifestations::class);
        yield MenuItem::linkToCrud('Lieux', 'fa-solid fa-door-open', Lieux::class);
        yield MenuItem::linkToCrud('Genres', 'fa-solid fa-vest', Genres::class);
    }
}