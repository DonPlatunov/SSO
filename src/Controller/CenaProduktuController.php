<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CenaProduktuRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route(path: '/api/cenaproduktu', name: 'api_cenaproduktu')]
class CenaProduktuController extends AbstractController
{
    public function __construct(
        private CenaProduktuRepository $cenaProduktuRepository
    ) {
    }

    #[Route(path: '/', name: 'cenaproduktu_list', methods: ['GET'])]
    public function getCenyAction(): JsonResponse
    {
        $returnPrices = [];
        $prices = $this->cenaProduktuRepository->findAll();

        foreach ($prices as $price) {
            $returnPrices[] = [
                'id' => $price->getId(),
                'produkt_id' => $price->getProduktId(),
                'kwota' => $price->getKwota(),
                'waluta_id' => $price->getWalutaId(),
            ];
        }

        return new JsonResponse($returnPrices, 200);
    }
}
