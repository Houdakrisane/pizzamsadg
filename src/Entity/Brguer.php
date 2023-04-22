<?php

namespace App\Entity;

use App\Repository\BrguerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrguerRepository::class)]
class Brguer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomBrguer = null;

    #[ORM\Column(length: 255)]
    private ?string $ImageBrguer = null;

    #[ORM\Column(length: 150)]
    private ?string $propriter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomBrguer(): ?string
    {
        return $this->nomBrguer;
    }

    public function setNomBrguer(string $nomBrguer): self
    {
        $this->nomBrguer = $nomBrguer;

        return $this;
    }

    public function getImageBrguer(): ?string
    {
        return $this->ImageBrguer;
    }

    public function setImageBrguer(string $ImageBrguer): self
    {
        $this->ImageBrguer = $ImageBrguer;

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
}
