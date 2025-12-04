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
    private int $kwota;

    #[ORM\Column(length: 255)]
    private string $cena_produktu_id;

    #[ORM\Column(nullable: true)]
    private ?int $waluta_id = null;

    // ---------------- GETTERY ----------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduktId(): ?int
    {
        return $this->produkt_id;
    }

    public function getKwota(): int
    {
        return $this->kwota;
    }

    public function getCenaProduktuId(): string
    {
        return $this->cena_produktu_id;
    }

    public function getWalutaId(): ?int
    {
        return $this->waluta_id;
    }

    // ---------------- SETTERY ----------------

    public function setProduktId(?int $produkt_id): self
    {
        $this->produkt_id = $produkt_id;
        return $this;
    }

    public function setKwota(int $kwota): self
    {
        $this->kwota = $kwota;
        return $this;
    }

    public function setCenaProduktuId(string $cena_produktu_id): self
    {
        $this->cena_produktu_id = $cena_produktu_id;
        return $this;
    }

    public function setWalutaId(?int $waluta_id): self
    {
        $this->waluta_id = $waluta_id;
        return $this;
    }
}
