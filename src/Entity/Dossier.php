<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dossier = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $sousDossier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(string $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSousDossier(): ?string
    {
        return $this->sousDossier;
    }

    public function setSousDossier(string $sousDossier): self
    {
        $this->sousDossier = $sousDossier;

        return $this;
    }
}
