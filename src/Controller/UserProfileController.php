<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserProfileController extends AbstractController
{
    #[Route('/user/profile', name: 'app_user_profile')]
    public function index(): Response
    {
        return $this->render('user_profile/index.html.twig', [
            'controller_name' => 'UserProfileController',
        ]);
    }

    #[Route('/user/profile/{id}', name: 'app_user_profile_show')]
    public function show(User $user): Response
    {
        return $this->render('user_profile/show.html.twig', ["user"=>$user]);
    }

}
