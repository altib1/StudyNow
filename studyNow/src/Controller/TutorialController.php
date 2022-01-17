<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Tutorial;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutorialController extends AbstractController
{
    /**
     * @Route("/tutorial", name="tutorial")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $category = $em->getRepository(Category::class)->findAll();
        $tutorials = $em->getRepository(Tutorial::class)->findAll();
        return $this->render('tutorial/index.html.twig', [
            'controller_name' => 'TutorialController',
            'category'=>$category,
            'tutorial'=>$tutorials,
        ]);
    }
}
