<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(EntityManagerInterface $em): Response
    {

        $category = $em->getRepository(Category::class)->findAll();
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
             'category'=>$category,
        ]);
    }
}
