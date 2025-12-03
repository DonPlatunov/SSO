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

<<<<<<< HEAD
    #[ORM\Column(nullable: true)]
    private ?int $produkt_id = null;

    #[ORM\Column]
    private ?int $kwota = null;

    #[ORM\Column(nullable: true)]
=======
    #[ORM\Column(length: 255)]
    private ?string $cena_produktu_id = null;

    #[ORM\Column(length: 255)]
    private ?string $produkt_id = null;

    #[ORM\Column]
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    private ?int $waluta_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getProduktId(): ?int
    {
        return $this->produkt_id;
    }

    public function setProduktId(?int $produkt_id): static
    {
        $this->produkt_id = $produkt_id;
=======
    public function getCenaProduktuId(): ?string
    {
        return $this->cena_produktu_id;
    }

    public function setCenaProduktuId(string $cena_produktu_id): static
    {
        $this->cena_produktu_id = $cena_produktu_id;
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa

        return $this;
    }

<<<<<<< HEAD
    public function getKwota(): ?int
    {
        return $this->kwota;
    }

    public function setKwota(int $kwota): static
    {
        $this->kwota = $kwota;
=======
    public function getProduktId(): ?string
    {
        return $this->produkt_id;
    }

    public function setProduktId(string $produkt_id): static
    {
        $this->produkt_id = $produkt_id;
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa

        return $this;
    }

    public function getWalutaId(): ?int
    {
        return $this->waluta_id;
    }

<<<<<<< HEAD
    public function setWalutaId(?int $waluta_id): static
=======
    public function setWalutaId(int $waluta_id): static
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    {
        $this->waluta_id = $waluta_id;

        return $this;
    }
}
