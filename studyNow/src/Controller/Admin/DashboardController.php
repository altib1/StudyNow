<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Dificulty;
use App\Entity\Steps;
use App\Entity\Tutorial;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('StudyNow');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Tutoriel', 'fas fa-newspaper', Tutorial::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-newspaper', Category::class);
        yield MenuItem::linkToCrud('Steps of Tutorial', 'fas fa-newspaper', Steps::class);
        yield MenuItem::linkToCrud('Difficulty', 'fas fa-newspaper', Dificulty::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-newspaper', User::class);
    }
}
