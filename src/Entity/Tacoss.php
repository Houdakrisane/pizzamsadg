<?php

namespace App\Entity;

use App\Repository\TacossRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TacossRepository::class)]
class Tacoss
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nomTacoss = null;

    #[ORM\Column(length: 100)]
    private ?string $prixtacoss = null;

    #[ORM\Column(length: 255)]
    private ?string $imagTacoss = null;

    #[ORM\Column(length: 150)]
    private ?string $propriter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTacoss(): ?string
    {
        return $this->nomTacoss;
    }

    public function setNomTacoss(string $nomTacoss): self
    {
        $this->nomTacoss = $nomTacoss;

        return $this;
    }

    public function getPrixtacoss(): ?string
    {
        return $this->prixtacoss;
    }

    public function setPrixtacoss(string $prixtacoss): self
    {
        $this->prixtacoss = $prixtacoss;

        return $this;
    }

    public function getImagTacoss(): ?string
    {
        return $this->imagTacoss;
    }

    public function setImagTacoss(string $imagTacoss): self
    {
        $this->imagTacoss = $imagTacoss;

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
