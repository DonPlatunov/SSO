<?php

namespace App\Entity;

use App\Repository\OpinieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpinieRepository::class)]
class Opinie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $produkt_id = null;

    #[ORM\Column]
    private ?bool $pozytywna = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $tresc = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getProduktId(): ?int
    {
        return $this->produkt_id;
    }

    public function setProduktId(int $produkt_id): static
    {
        $this->produkt_id = $produkt_id;

        return $this;
    }

    public function isPozytywna(): ?bool
    {
        return $this->pozytywna;
    }

    public function setPozytywna(bool $pozytywna): static
    {
        $this->pozytywna = $pozytywna;

        return $this;
    }

    public function getTresc(): ?string
    {
        return $this->tresc;
    }

    public function setTresc(?string $tresc): static
    {
        $this->tresc = $tresc;

        return $this;
    }
}
