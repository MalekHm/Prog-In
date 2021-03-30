<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionpromotion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $startDatePromotion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endDatePromotion;

    /**
     * @ORM\Column(type="float")
     */
    private $pourcentage;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event", inversedBy="promotion")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="promotion")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $product;

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event): void
    {
        $this->event = $event;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionpromotion(): ?string
    {
        return $this->descriptionpromotion;
    }

    public function setDescriptionpromotion(string $descriptionpromotion): self
    {
        $this->descriptionpromotion = $descriptionpromotion;

        return $this;
    }



    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    public function setPourcentage(float $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDatePromotion()
    {
        return $this->startDatePromotion;
    }

    /**
     * @param mixed $startDatePromotion
     */
    public function setStartDatePromotion($startDatePromotion): void
    {
        $this->startDatePromotion = $startDatePromotion;
    }

    /**
     * @return mixed
     */
    public function getEndDatePromotion()
    {
        return $this->endDatePromotion;
    }

    /**
     * @param mixed $endDatePromotion
     */
    public function setEndDatePromotion($endDatePromotion): void
    {
        $this->endDatePromotion = $endDatePromotion;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }




}
