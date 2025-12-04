<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ZamowieniaRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route(path: '/api/zamowienia', name: 'api_zamowienia')]
class ZamowieniaController extends AbstractController
{
    public function __construct(
        private ZamowieniaRepository $zamowieniaRepository
    ) {
    }

    #[Route(path: '/', name: 'zamowienia_list', methods: ['GET'])]
    public function getZamowieniaAction(): JsonResponse
    {
        $returnOrders = [];
        $orders = $this->zamowieniaRepository->findAll();

        foreach ($orders as $order) {
            $returnOrders[] = [
                'id' => $order->getId(),
                'delivery_id' => $order->getDeliveryId(),
                'uzytkownik_id' => $order->getUzytkownikId(),
                'dostarczono' => $order->isDostarczono(),
            ];
        }

        return new JsonResponse($returnOrders, 200);
    }
}
