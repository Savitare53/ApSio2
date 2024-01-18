<?php

namespace App\Entity;

use App\Repository\DroitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DroitRepository::class)]
class Droit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numdroit = null;

    #[ORM\Column(length: 50)]
    private ?string $libelle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumdroit(): ?int
    {
        return $this->numdroit;
    }

    public function setNumdroit(int $numdroit): static
    {
        $this->numdroit = $numdroit;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }
}
