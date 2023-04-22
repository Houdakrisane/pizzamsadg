<?php

namespace App\Entity;

use App\Repository\GlaceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GlaceRepository::class)]
class Glace
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomGlace = null;

    #[ORM\Column(length: 100)]
    private ?string $prix = null;

    #[ORM\Column(length: 150)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGlace(): ?string
    {
        return $this->nomGlace;
    }

    public function setNomGlace(string $nomGlace): self
    {
        $this->nomGlace = $nomGlace;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
