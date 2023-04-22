<?php

namespace App\Entity;

use App\Repository\SaladeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaladeRepository::class)]
class Salade
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $NomSalade = null;

    #[ORM\Column(length: 255)]
    private ?string $prixSalade = null;

    #[ORM\Column(length: 255)]
    private ?string $imageSalade = null;

    #[ORM\Column(length: 150)]
    private ?string $proprite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSalade(): ?string
    {
        return $this->NomSalade;
    }

    public function setNomSalade(string $NomSalade): self
    {
        $this->NomSalade = $NomSalade;

        return $this;
    }

    public function getPrixSalade(): ?string
    {
        return $this->prixSalade;
    }

    public function setPrixSalade(string $prixSalade): self
    {
        $this->prixSalade = $prixSalade;

        return $this;
    }

    public function getImageSalade(): ?string
    {
        return $this->imageSalade;
    }

    public function setImageSalade(string $imageSalade): self
    {
        $this->imageSalade = $imageSalade;

        return $this;
    }

    public function getProprite(): ?string
    {
        return $this->proprite;
    }

    public function setProprite(string $proprite): self
    {
        $this->proprite = $proprite;

        return $this;
    }
}
