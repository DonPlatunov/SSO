<?php

namespace App\Entity;

use App\Repository\ProduktyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduktyRepository::class)]
class Produkty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nazwa = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $opis = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $zdjecie = null;

    #[ORM\Column]
    private ?float $cena = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(?string $nazwa): static
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(?string $opis): static
    {
        $this->opis = $opis;

        return $this;
    }

    public function getZdjecie(): ?string
    {
        return $this->zdjecie;
    }

    public function setZdjecie(?string $zdjecie): static
    {
        $this->zdjecie = $zdjecie;

        return $this;
    }

    public function getCena(): ?float
    {
        return $this->cena;
    }

    public function setCena(float $cena): static
    {
        $this->cena = $cena;

        return $this;
    }
}
