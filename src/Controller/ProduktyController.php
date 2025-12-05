<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ProduktyRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route(path: '/api/produkty', name: 'api_produkty')]
class ProduktyController extends AbstractController
{
    public function __construct(
        private ProduktyRepository $produktyRepository
    ) {
    }

    #[Route(path: '/', name: 'produkty_list', methods: ['GET'])]
    public function getProduktyAction(): JsonResponse
    {
        $returnProducts = [];
        $products = $this->produktyRepository->findAll();

        foreach ($products as $product) {
            $returnProducts[] = [
                'id' => $product->getId(),
                'nazwa' => $product->getNazwa(),
                'opis' => $product->getOpis(),
                'zdjecie' => $product->getZdjecie(),
                'cena' => $product->getCena(),
            ];
        }

        return new JsonResponse($returnProducts, 200);
    }
}
