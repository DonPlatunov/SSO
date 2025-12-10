<?php

namespace App\Entity;

use App\Repository\AboutMeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutMeRepository::class)]
class AboutMe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $ulubionysport = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hobby = null;

    #[ORM\Column(nullable: true)]
    private ?int $wiek = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adres = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $zegarki = null;

    #[ORM\Column]
    private ?int $user_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUlubionysport(): ?string
    {
        return $this->ulubionysport;
    }

    public function setUlubionysport(?string $ulubionysport): static
    {
        $this->ulubionysport = $ulubionysport;

        return $this;
    }

    public function getHobby(): ?string
    {
        return $this->hobby;
    }

    public function setHobby(?string $hobby): static
    {
        $this->hobby = $hobby;

        return $this;
    }

    public function getWiek(): ?int
    {
        return $this->wiek;
    }

    public function setWiek(?int $wiek): static
    {
        $this->wiek = $wiek;

        return $this;
    }

    public function getAdres(): ?string
    {
        return $this->adres;
    }

    public function setAdres(?string $adres): static
    {
        $this->adres = $adres;

        return $this;
    }

    public function getZegarki(): ?string
    {
        return $this->zegarki;
    }

    public function setZegarki(?string $zegarki): static
    {
        $this->zegarki = $zegarki;

        return $this;
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
}
