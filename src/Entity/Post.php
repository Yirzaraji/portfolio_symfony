<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $technos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projectImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $projectDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $premierParagraphe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondParagraphe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $premiereImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondeImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTechnos(): ?string
    {
        return $this->technos;
    }

    public function setTechnos(string $technos): self
    {
        $this->technos = $technos;

        return $this;
    }

    public function getProjectImage(): ?string
    {
        return $this->projectImage;
    }

    public function setProjectImage(string $projectImage): self
    {
        $this->projectImage = $projectImage;

        return $this;
    }

    public function getProjectDescription(): ?string
    {
        return $this->projectDescription;
    }

    public function setProjectDescription(?string $projectDescription): self
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    public function getPremierParagraphe(): ?string
    {
        return $this->premierParagraphe;
    }

    public function setPremierParagraphe(?string $premierParagraphe): self
    {
        $this->premierParagraphe = $premierParagraphe;

        return $this;
    }

    public function getSecondParagraphe(): ?string
    {
        return $this->secondParagraphe;
    }

    public function setSecondParagraphe(?string $secondParagraphe): self
    {
        $this->secondParagraphe = $secondParagraphe;

        return $this;
    }

    public function getPremiereImage(): ?string
    {
        return $this->premiereImage;
    }

    public function setPremiereImage(?string $premiereImage): self
    {
        $this->premiereImage = $premiereImage;

        return $this;
    }

    public function getSecondeImage(): ?string
    {
        return $this->secondeImage;
    }

    public function setSecondeImage(?string $secondeImage): self
    {
        $this->secondeImage = $secondeImage;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

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
}
