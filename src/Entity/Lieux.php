<?php

namespace App\Entity;

use App\Repository\LieuxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuxRepository::class)]
class Lieux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $lieu_nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lieu_adr = null;

    #[ORM\Column]
    private ?int $lieu_capacite = null;

    #[ORM\OneToMany(mappedBy: 'lieu_id', targetEntity: Manifestations::class)]
    private Collection $manifestations;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $lieu_affiche = null;

    public function __construct()
    {
        $this->manifestations = new ArrayCollection();
    }

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
        return $this->lieu_nom;
    }

    public function getLieuAffiche(): ?string
    {
        return $this->lieu_affiche;
    }

    public function setLieuAffiche(?string $lieu_affiche): self
    {
        $this->lieu_affiche = $lieu_affiche;

        return $this;
    }
}
