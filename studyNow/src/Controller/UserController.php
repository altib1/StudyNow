<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {

        $form = $this->createForm(UserType::class);
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form,
        ]);
    }
}
