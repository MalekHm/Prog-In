<?php

namespace App\Entity;

use App\Repository\PlaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=PlaceRepository::class)
 */
class Place
{
    /**
     *
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlePlace;

    /**
     * @ORM\Column(type="text")
     */
    private $DescriptionPlace;



    /**
     * @ORM\Column(type="string", length=255)
    */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity=CategoryPlace::class, inversedBy="places")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nbView;

    /**
     * @ORM\OneToMany(targetEntity=Media::class, mappedBy="places",
     orphanRemoval=true, cascade={"persist"})
     */
    private $media;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $picturePlace;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $showPlace;


    /**
     * @ORM\OneToMany(targetEntity=CommentsPlace::class, mappedBy="place", orphanRemoval=true)
     */
    private $commentsPlaces;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_comment;


    public function __construct()
    {
        $this->media = new ArrayCollection();
        $this->commentsPlaces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlePlace(): ?string
    {
        return $this->titlePlace;
    }

    public function setTitlePlace(string $titlePlace): self
    {
        $this->titlePlace = $titlePlace;

        return $this;
    }

    public function getDescriptionPlace(): ?string
    {
        return $this->DescriptionPlace;
    }

    public function setDescriptionPlace(string $DescriptionPlace): self
    {
        $this->DescriptionPlace = $DescriptionPlace;

        return $this;
    }



    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getCategory(): ?CategoryPlace
    {
        return $this->category;
    }

    public function setCategory(?CategoryPlace $category): self
    {
        $this->category = $category;

        return $this;
    }



    public function getNbView(): ?int
    {
        return $this->nbView;
    }

    public function setNbView(?int $nbView): self
    {
        $this->nbView = $nbView;

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): self
    {
        if (!$this->media->contains($medium)) {
            $this->media[] = $medium;
            $medium->setPlaces($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): self
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getPlaces() === $this) {
                $medium->setPlaces(null);
            }
        }

        return $this;
    }


    public function __toString()
    {
        return $this->titlePlace;
    }

    public function getPicturePlace(): ?string
    {
        return $this->picturePlace;
    }

    public function setPicturePlace(string $picturePlace): self
    {
        $this->picturePlace = $picturePlace;

        return $this;
    }

    public function getShowPlace(): ?bool
    {
        return $this->showPlace;
    }

    public function setShowPlace(?bool $showPlace): self
    {
        $this->showPlace = $showPlace;

        return $this;
    }

    /**
     * @return Collection|CommentsPlace[]
     */
    public function getCommentsPlaces(): Collection
    {
        return $this->commentsPlaces;
    }

    public function addCommentsPlace(CommentsPlace $commentsPlace): self
    {
        if (!$this->commentsPlaces->contains($commentsPlace)) {
            $this->commentsPlaces[] = $commentsPlace;
            $commentsPlace->setPlace($this);
        }

        return $this;
    }

    public function removeCommentsPlace(CommentsPlace $commentsPlace): self
    {
        if ($this->commentsPlaces->removeElement($commentsPlace)) {
            // set the owning side to null (unless already changed)
            if ($commentsPlace->getPlace() === $this) {
                $commentsPlace->setPlace(null);
            }
        }

        return $this;
    }

    public function getNbComment(): ?int
    {
        return $this->nb_comment;
    }

    public function setNbComment(?int $nb_comment): self
    {
        $this->nb_comment = $nb_comment;

        return $this;
    }



}
