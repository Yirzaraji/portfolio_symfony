<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    protected $id;

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
     * @ORM\Column(type="text", nullable=true)
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $git;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="post", orphanRemoval=true, cascade={"persist"})
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity=Tag::class, mappedBy="post", orphanRemoval=true, cascade={"persist"})
     */
    private $tags;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

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

    public function setLien(?string $lien): self
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

    public function getGit(): ?string
    {
        return $this->git;
    }

    public function setGit(?string $git): self
    {
        $this->git = $git;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setPost($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getPost() === $this) {
                $image->setPost(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->setPost($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->removeElement($tag)) {
            // set the owning side to null (unless already changed)
            if ($tag->getPost() === $this) {
                $tag->setPost(null);
            }
        }

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
