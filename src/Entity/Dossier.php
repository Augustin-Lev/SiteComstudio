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

    #[ORM\ManyToOne(inversedBy: 'dossiers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?categorie $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_dossier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNomDossier(): ?string
    {
        return $this->nom_dossier;
    }

    public function setNomDossier(string $nom_dossier): self
    {
        $this->nom_dossier = $nom_dossier;

        return $this;
    }
}
