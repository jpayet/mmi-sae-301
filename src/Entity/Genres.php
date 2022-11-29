<?php

namespace App\Entity;

use App\Repository\GenresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenresRepository::class)]
class Genres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $genre_titre = null;

    #[ORM\OneToMany(mappedBy: 'genre_id', targetEntity: Manifestations::class)]
    private Collection $manifestations;

    public function __construct()
    {
        $this->manifestations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenreTitre(): ?string
    {
        return $this->genre_titre;
    }

    public function setGenreTitre(string $genre_titre): self
    {
        $this->genre_titre = $genre_titre;

        return $this;
    }

    /**
     * @return Collection<int, Manifestations>
     */
    public function getManifestations(): Collection
    {
        return $this->manifestations;
    }

    public function addManifestation(Manifestations $manifestation): self
    {
        if (!$this->manifestations->contains($manifestation)) {
            $this->manifestations->add($manifestation);
            $manifestation->setId($this);
        }

        return $this;
    }

    public function removeManifestation(Manifestations $manifestation): self
    {
        if ($this->manifestations->removeElement($manifestation)) {
            // set the owning side to null (unless already changed)
            if ($manifestation->getId() === $this) {
                $manifestation->setId(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->genre_titre;
    }
}
