<?php

namespace App\Entity;

use App\Repository\CenaProduktuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CenaProduktuRepository::class)]
class CenaProduktu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cena_produktu_id = null;

    #[ORM\Column(length: 255)]
    private ?string $produkt_id = null;

    #[ORM\Column]
    private ?int $waluta_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCenaProduktuId(): ?string
    {
        return $this->cena_produktu_id;
    }

    public function setCenaProduktuId(string $cena_produktu_id): static
    {
        $this->cena_produktu_id = $cena_produktu_id;

        return $this;
    }

    public function getProduktId(): ?string
    {
        return $this->produkt_id;
    }

    public function setProduktId(string $produkt_id): static
    {
        $this->produkt_id = $produkt_id;

        return $this;
    }

    public function getWalutaId(): ?int
    {
        return $this->waluta_id;
    }

    public function setWalutaId(int $waluta_id): static
    {
        $this->waluta_id = $waluta_id;

        return $this;
    }
}
