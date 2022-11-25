<?php

namespace App\Entity;

use App\Repository\ManifestationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ManifestationsRepository::class)]
class Manifestations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $manif_id = null;

    #[ORM\Column(length: 30)]
    private ?string $manif_titre = null;

    #[ORM\Column(length: 120, nullable: true)]
    private ?string $manif_description = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $manif_casting = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $manif_affiche = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $manif_heure = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $manif_date = null;

    #[ORM\Column]
    private ?float $manif_prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManifId(): ?int
    {
        return $this->manif_id;
    }

    public function setManifId(int $manif_id): self
    {
        $this->manif_id = $manif_id;

        return $this;
    }

    public function getManifTitre(): ?string
    {
        return $this->manif_titre;
    }

    public function setManifTitre(string $manif_titre): self
    {
        $this->manif_titre = $manif_titre;

        return $this;
    }

    public function getManifDescription(): ?string
    {
        return $this->manif_description;
    }

    public function setManifDescription(?string $manif_description): self
    {
        $this->manif_description = $manif_description;

        return $this;
    }

    public function getManifCasting(): ?string
    {
        return $this->manif_casting;
    }

    public function setManifCasting(?string $manif_casting): self
    {
        $this->manif_casting = $manif_casting;

        return $this;
    }

    public function getManifGenre(): ?string
    {
        return $this->manif_genre;
    }

    public function setManifGenre(string $manif_genre): self
    {
        $this->manif_genre = $manif_genre;

        return $this;
    }

    public function getManifAffiche(): ?string
    {
        return $this->manif_affiche;
    }

    public function setManifAffiche(?string $manif_affiche): self
    {
        $this->manif_affiche = $manif_affiche;

        return $this;
    }

    public function getManifHeure(): ?\DateTimeInterface
    {
        return $this->manif_heure;
    }

    public function setManifHeure(\DateTimeInterface $manif_heure): self
    {
        $this->manif_heure = $manif_heure;

        return $this;
    }

    public function getManifDate(): ?\DateTimeInterface
    {
        return $this->manif_date;
    }

    public function setManifDate(\DateTimeInterface $manif_date): self
    {
        $this->manif_date = $manif_date;

        return $this;
    }

    public function getManifPrix(): ?float
    {
        return $this->manif_prix;
    }

    public function setManifPrix(float $manif_prix): self
    {
        $this->manif_prix = $manif_prix;

        return $this;
    }
}
