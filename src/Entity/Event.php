<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
    private $titleEvent;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $startDateEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endDateEvent;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPersons;

    /**
     * @ORM\Column(type="float")
     */
    private $priceEvent;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Promotion", mappedBy="event")
     */
    private $promotion;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleEvent(): ?string
    {
        return $this->titleEvent;
    }

    public function setTitleEvent(string $titleEvent): self
    {
        $this->titleEvent = $titleEvent;

        return $this;
    }

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getStartDateEvent(): ?string
    {
        return $this->startDateEvent;
    }

    public function setStartDateEvent(string $startDateEvent): self
    {
        $this->startDateEvent = $startDateEvent;

        return $this;
    }

    public function getEndDateEvent(): ?string
    {
        return $this->endDateEvent;
    }

    public function setEndDateEvent(string $endDateEvent): self
    {
        $this->endDateEvent = $endDateEvent;

        return $this;
    }

    public function getNbPersons(): ?int
    {
        return $this->nbPersons;
    }

    public function setNbPersons(int $nbPersons): self
    {
        $this->nbPersons = $nbPersons;

        return $this;
    }

    public function getPriceEvent(): ?float
    {
        return $this->priceEvent;
    }

    public function setPriceEvent(float $priceEvent): self
    {
        $this->priceEvent = $priceEvent;

        return $this;
    }



    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param mixed $promotion
     */
    public function setPromotion($promotion): void
    {
        $this->promotion = $promotion;
    }

    public function __toString()
    {
        return $this->titleEvent;
    }


}
