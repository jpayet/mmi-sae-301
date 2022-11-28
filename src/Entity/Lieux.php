<?php

namespace App\Entity;

use App\Repository\LieuxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuxRepository::class)]
class Lieux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $lieu_id = null;

    #[ORM\Column(length: 40)]
    private ?string $lieu_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lieu_adr = null;

    #[ORM\Column]
    private ?int $lieu_capacite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuNom(): ?string
    {
        return $this->lieu_nom;
    }

    public function setLieuNom(string $lieu_nom): self
    {
        $this->lieu_nom = $lieu_nom;

        return $this;
    }

    public function getLieuAdr(): ?string
    {
        return $this->lieu_adr;
    }

    public function setLieuAdr(?string $lieu_adr): self
    {
        $this->lieu_adr = $lieu_adr;

        return $this;
    }

    public function getLieuCapacite(): ?int
    {
        return $this->lieu_capacite;
    }

    public function setLieuCapacite(int $lieu_capacite): self
    {
        $this->lieu_capacite = $lieu_capacite;

        return $this;
    }
}
