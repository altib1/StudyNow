<?php

namespace App\Controller;

use App\Entity\Tutorial;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category/{id}", name="category")
     */
    public function index(EntityManagerInterface $em,$id): Response
    {
        $tutorials = $em->getRepository(Category::class)->find($id);
        $category = $em->getRepository(Category::class)->findAll();
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'tutorial' => $tutorials,
            'category' => $category,
        ]);
    }
}
