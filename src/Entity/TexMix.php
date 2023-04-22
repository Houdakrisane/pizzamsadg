<?php

namespace App\Entity;

use App\Repository\TexMixRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TexMixRepository::class)]
class TexMix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomtex = null;

    #[ORM\Column(length: 100)]
    private ?string $prix = null;

    #[ORM\Column(length: 150)]
    private ?string $propriter = null;

    #[ORM\Column(length: 150)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtex(): ?string
    {
        return $this->nomtex;
    }

    public function setNomtex(string $nomtex): self
    {
        $this->nomtex = $nomtex;

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

    public function getPropriter(): ?string
    {
        return $this->propriter;
    }

    public function setPropriter(string $propriter): self
    {
        $this->propriter = $propriter;

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
