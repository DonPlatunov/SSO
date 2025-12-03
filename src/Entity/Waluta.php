<?php

namespace App\Entity;

use App\Repository\WalutaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WalutaRepository::class)]
class Waluta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\Column(length: 128, nullable: true)]
    private ?string $kod_iso = null;

    #[ORM\Column(length: 255, nullable: true)]
=======
    #[ORM\Column(length: 255)]
    private ?string $kod_iso = null;

    #[ORM\Column(length: 255)]
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
=======
    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    public function getKodIso(): ?string
    {
        return $this->kod_iso;
    }

<<<<<<< HEAD
    public function setKodIso(?string $kod_iso): static
=======
    public function setKodIso(string $kod_iso): static
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    {
        $this->kod_iso = $kod_iso;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

<<<<<<< HEAD
    public function setName(?string $name): static
=======
    public function setName(string $name): static
>>>>>>> c28fbcbf6202f3d7ef11e416dd1c0a27912f78aa
    {
        $this->name = $name;

        return $this;
    }
}
