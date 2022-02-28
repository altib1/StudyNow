<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TutorialRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutorialPageController extends AbstractController
{
    /**
     * @Route("/tutorial/{id}", name="tutorial_page", methods={"GET","HEAD"})
     */
    public function index($id, TutorialRepository $tutorialRepository,  ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        if($tutorialRepository->find($id)) {
            $tutorial = $tutorialRepository->find($id);
            /** @var User $user */
            $user = $this->getUser();
            $tutorial->addUser($user);
            $em->persist($tutorial);
            $em->flush();
            $this->addFlash('success', 'Congratulations you have added the tutolial!');

        }
        return $this->render('tutorial_page/index.html.twig', [
            'controller_name' => 'TutorialPageController',
            'tutorial' => $tutorial

        ]);
    }
}
