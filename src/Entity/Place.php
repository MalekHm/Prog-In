<?php

namespace App\Entity;

use App\Repository\PlaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlaceRepository::class)
 */
class Place
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
    private $titlePlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categoryPlace;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionPlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picturePlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $locationPlace;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="idadmin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_admin;

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

    public function getCategoryPlace(): ?string
    {
        return $this->categoryPlace;
    }

    public function setCategoryPlace(string $categoryPlace): self
    {
        $this->categoryPlace = $categoryPlace;

        return $this;
    }

    public function getDescriptionPlace(): ?string
    {
        return $this->descriptionPlace;
    }

    public function setDescriptionPlace(string $descriptionPlace): self
    {
        $this->descriptionPlace = $descriptionPlace;

        return $this;
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

    public function getLocationPlace(): ?string
    {
        return $this->locationPlace;
    }

    public function setLocationPlace(string $locationPlace): self
    {
        $this->locationPlace = $locationPlace;

        return $this;
    }

    public function getIdAdmin(): ?admin
    {
        return $this->id_admin;
    }

    public function setIdAdmin(?admin $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }
}
