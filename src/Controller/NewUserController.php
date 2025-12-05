<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewUserController extends AbstractController
{
    #[Route('/api/users/show', name: 'app_user', methods: ['GET'])]
    public function showUser(): JsonResponse
    {
        $currentUser = $this->getUser();
        
        return new JsonResponse([
            'data' => [
                'user_id' => $currentUser->getId(),
                'user_email' => $currentUser->getEmail(),
            ],
            'messages' => NULL,
            'errors' => NULL,
            'statusCode' => '200',
            'additionalData' => NULL
        ]);
    }
}