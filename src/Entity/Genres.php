<?php

namespace App\Entity;

use App\Repository\GenresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenresRepository::class)]
class Genres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $genre_id = null;

    #[ORM\Column(length: 30)]
    private ?string $genre_titre = null;

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
}
