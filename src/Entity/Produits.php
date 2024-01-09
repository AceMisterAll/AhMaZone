<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $caracteristique = null;

    #[ORM\Column(name: "prixUnitaireTTC")]
    private ?float $prixUnitaireTTC = null;

    #[ORM\Column(name: "quatiteStock")]
    private ?int $quatiteStock = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): static
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixUnitaireTTC(): ?float
    {
        return $this->prixUnitaireTTC;
    }

    public function setPrixUnitaireTTC(float $prixUnitaireTTC): static
    {
        $this->prixUnitaireTTC = $prixUnitaireTTC;

        return $this;
    }

    public function getQuatiteStock(): ?int
    {
        return $this->quatiteStock;
    }

    public function setQuatiteStock(int $quatiteStock): static
    {
        $this->quatiteStock = $quatiteStock;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }
}
