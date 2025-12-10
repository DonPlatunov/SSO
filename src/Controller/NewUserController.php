<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ApiResponseFormatter; // upewnij się, że masz taki serwis

class NewUserController extends AbstractController
{
    private UserRepository $userRepository;
    private ApiResponseFormatter $apiResponseFormatter;

    public function __construct(UserRepository $userRepository, ApiResponseFormatter $apiResponseFormatter)
    {
        $this->userRepository = $userRepository;
        $this->apiResponseFormatter = $apiResponseFormatter;
    }

    #[Route('/api/users/show', name: 'app_user', methods: ['GET'])]
    public function showUser(): JsonResponse
    {
        $currentUser = $this->getUser();

        if (!$currentUser) {
            return $this->apiResponseFormatter
                ->withErrors(['User not authenticated'])
                ->withStatus(401)
                ->response();
        }

        // używamy toArray() z encji
        $userData = $currentUser->toArray();

        return $this->apiResponseFormatter
            ->withData($userData)
            ->response();
    }
}
