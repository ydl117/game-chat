<?php

namespace App\Controller;

use App\Entity\Jeux;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{


    /**
     * @Route("/profile/{id}", name="profile")
     */
    public function showProfile($id)
    {
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->find((int)$id);

        return $this->render('profile/profile.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/profiles", name="profiles")
     */
    public function showAllProfiles()
    {
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $users_collection = $userRepository->findAll();

        return $this->render('profile/profiles.html.twig', [
            'users' => $users_collection,
        ]);
    }

}
