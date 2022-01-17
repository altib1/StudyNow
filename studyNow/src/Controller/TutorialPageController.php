<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutorialPageController extends AbstractController
{
    /**
     * @Route("/tutorial/page", name="tutorial_page")
     */
    public function index(): Response
    {
        return $this->render('tutorial_page/index.html.twig', [
            'controller_name' => 'TutorialPageController',
        ]);
    }
}
