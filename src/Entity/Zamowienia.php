<?php

namespace App\Entity;

use App\Repository\ZamowieniaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZamowieniaRepository::class)]
class Zamowienia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $delivery_id = null;

    #[ORM\Column]
    private ?int $uzytkownik_id = null;

    #[ORM\Column]
    private ?int $klient_id = null;

    #[ORM\Column]
    private ?bool $dostarczono = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeliveryId(): ?int
    {
        return $this->delivery_id;
    }

    public function setDeliveryId(int $delivery_id): static
    {
        $this->delivery_id = $delivery_id;

        return $this;
    }

    public function getUzytkownikId(): ?int
    {
        return $this->uzytkownik_id;
    }

    public function setUzytkownikId(int $uzytkownik_id): static
    {
        $this->uzytkownik_id = $uzytkownik_id;

        return $this;
    }

    public function getKlientId(): ?int
    {
        return $this->klient_id;
    }

    public function setKlientId(int $klient_id): static
    {
        $this->klient_id = $klient_id;

        return $this;
    }

    public function isDostarczono(): ?bool
    {
        return $this->dostarczono;
    }

    public function setDostarczono(bool $dostarczono): static
    {
        $this->dostarczono = $dostarczono;

        return $this;
    }
}
