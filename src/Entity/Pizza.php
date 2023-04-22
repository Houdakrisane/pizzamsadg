<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PizzaRepository::class)]
class Pizza
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomPizza = null;

    #[ORM\Column(length: 100)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $imagePizza = null;

    #[ORM\Column(length: 150)]
    private ?string $proprite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPizza(): ?string
    {
        return $this->nomPizza;
    }

    public function setNomPizza(string $nomPizza): self
    {
        $this->nomPizza = $nomPizza;

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

    public function getImagePizza(): ?string
    {
        return $this->imagePizza;
    }

    public function setImagePizza(string $imagePizza): self
    {
        $this->imagePizza = $imagePizza;

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
