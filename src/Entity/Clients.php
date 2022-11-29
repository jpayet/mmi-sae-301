<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Clients implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $email = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $client_adr_rue = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $client_adr_ville = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $client_adr_cp = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->id;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setClientEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getClientAdrRue(): ?string
    {
        return $this->client_adr_rue;
    }

    public function setClientAdrRue(?string $client_adr_rue): self
    {
        $this->client_adr_rue = $client_adr_rue;

        return $this;
    }

    public function getClientAdrVille(): ?string
    {
        return $this->client_adr_ville;
    }

    public function setClientAdrVille(?string $client_adr_ville): self
    {
        $this->client_adr_ville = $client_adr_ville;

        return $this;
    }

    public function getClientAdrCp(): ?string
    {
        return $this->client_adr_cp;
    }

    public function setClientAdrCp(?string $client_adr_cp): self
    {
        $this->client_adr_cp = $client_adr_cp;

        return $this;
    }
}
