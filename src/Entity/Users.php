<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: UserRepository::class), ORM\Table(name: "`Users`")]
class Users
{
    #[ORM\Id]
    #[ORM\Column(name: "`UserId`", type: Types::BIGINT)]
    private $id;

    #[ORM\Column(name: "`Username`", type: Types::TEXT)]
    private $username;

    #[ORM\Column(name: "`Password`", type: Types::TEXT)]
    private $password;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}