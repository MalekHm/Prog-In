<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagePlace;

    /**
     * @ORM\ManyToOne(targetEntity=Place::class, inversedBy="media")
     * @ORM\JoinColumn(nullable=false)
     */
    private $places;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePlace(): ?string
    {
        return $this->imagePlace;
    }

    public function setImagePlace(?string $imagePlace): self
    {
        $this->imagePlace = $imagePlace;

        return $this;
    }

    public function getPlaces(): ?Place
    {
        return $this->places;
    }

    public function setPlaces(?Place $places): self
    {
        $this->places = $places;

        return $this;
    }
}
