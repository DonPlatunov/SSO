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

    #[ORM\Column(nullable: true)]
    private ?int $produkt_id = null;

    #[ORM\Column]
    private ?int $kwota = null;

    #[ORM\Column(nullable: true)]
    private ?int $waluta_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduktId(): ?int
    {
        return $this->produkt_id;
    }

    public function setProduktId(?int $produkt_id): static
    {
        $this->produkt_id = $produkt_id;

        return $this;
    }

    public function getKwota(): ?int
    {
        return $this->kwota;
    }

    public function setKwota(int $kwota): static
    {
        $this->kwota = $kwota;

        return $this;
    }

    public function getWalutaId(): ?int
    {
        return $this->waluta_id;
    }

    public function setWalutaId(?int $waluta_id): static
    {
        $this->waluta_id = $waluta_id;

        return $this;
    }
}
