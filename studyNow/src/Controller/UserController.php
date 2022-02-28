<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\Translation\t;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/user/edit", name="user_edit")
     */
    public function edit(Request $request, ManagerRegistry $doctrine): Response
    {

        $em = $doctrine->getManager();
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
//            /** @var UploadedFile $uploadedFile */
//            $uploadedFile = $form['imageFile']->getData();
//            $destination = $this->getParameter('kernel.project_dir').'/public/img';
//
//            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
//            $newFilename = urldecode($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
//            $uploadedFile->move(
//                $destination,
//                $newFilename
//            );
            $article = $form->getData();
//            $article->setImageFilename($newFilename);
            $em->persist($article);
            $em->flush();
            $this->addFlash('success', 'User Edited!');
            return $this->redirectToRoute('user');
        }

        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form->createView(),
        ]);
    }
}
