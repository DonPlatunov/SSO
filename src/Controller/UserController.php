<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\UzytkownicyRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route(path: '/api/uzytkownik', name: 'api_uzytkownik')]
class UserController extends AbstractController
{
    public function __construct(
        private UzytkownicyRepository $uzytkownicyRepository
    )
    {
    }

    #[Route(path: '/', name: 'uzytkownik', methods: ['GET'])]
    public function getUsersAction(): JsonResponse
    {
        $returnUsers = [];
        $users = $this->uzytkownicyRepository->findAll();

        foreach ($users as $user) {
            $returnUsers[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail()
            ];
        }

        return new JsonResponse($returnUsers, 200);
    }
}
