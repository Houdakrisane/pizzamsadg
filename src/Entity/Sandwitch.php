<?php

namespace App\Entity;

use App\Repository\SandwitchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SandwitchRepository::class)]
class Sandwitch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomSandwitch = null;

    #[ORM\Column(length: 100)]
    private ?string $prixsan = null;

    #[ORM\Column(length: 150)]
    private ?string $imagSandwitch = null;

    #[ORM\Column(length: 150)]
    private ?string $propriter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSandwitch(): ?string
    {
        return $this->nomSandwitch;
    }

    public function setNomSandwitch(string $nomSandwitch): self
    {
        $this->nomSandwitch = $nomSandwitch;

        return $this;
    }

    public function getPrixsan(): ?string
    {
        return $this->prixsan;
    }

    public function setPrixsan(string $prixsan): self
    {
        $this->prixsan = $prixsan;

        return $this;
    }

    public function getImagSandwitch(): ?string
    {
        return $this->imagSandwitch;
    }

    public function setImagSandwitch(string $imagSandwitch): self
    {
        $this->imagSandwitch = $imagSandwitch;

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
