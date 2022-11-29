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
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $manif_titre = null;

    #[ORM\Column(length: 5000, nullable: true)]
    private ?string $manif_description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $manif_casting = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $manif_affiche = null;

    #[ORM\Column(length: 5)]
    private ?string $manif_heure = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $manif_date = null;

    #[ORM\Column]
    private ?float $manif_prix = null;

    #[ORM\ManyToOne(inversedBy: 'manifestations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Lieux $lieu_id = null;

    #[ORM\ManyToOne(inversedBy: 'manifestations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Genres $genre_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

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

    public function getManifHeure(): ?string
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

    public function getLieuId(): ?Lieux
    {
        return $this->lieu_id;
    }

    public function setLieuId(?Lieux $lieu_id): self
    {
        $this->lieu_id = $lieu_id;

        return $this;
    }

    public function getGenreId(): ?Genres
    {
        return $this->genre_id;
    }

    public function setGenreId(?Genres $genre_id): self
    {
        $this->genre_id = $genre_id;

        return $this;
    }
}
