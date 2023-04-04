<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_photo = null;

    #[ORM\Column(length: 255)]
    private ?string $chemin = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $dossier = null;

    #[ORM\Column]
    private ?int $indexDossier = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPhoto(): ?string
    {
        return $this->nom_photo;
    }

    public function setNomPhoto(string $nom_photo): self
    {
        $this->nom_photo = $nom_photo;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->chemin;
    }

    public function setChemin(string $chemin): self
    {
        $this->chemin = $chemin;

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

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(string $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getIndexDossier(): ?int
    {
        return $this->indexDossier;
    }

    public function setIndexDossier(int $indexDossier): self
    {
        $this->indexDossier = $indexDossier;

        return $this;
    }
}
