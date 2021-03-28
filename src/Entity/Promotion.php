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
     * @ORM\Column(type="string", length=255)
     */
    private $startDatePromotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endDatePromotion;

    /**
     * @ORM\Column(type="float")
     */
    private $pourcentage;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="adminid")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idadmin;

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

    public function getStartDatePromotion(): ?string
    {
        return $this->startDatePromotion;
    }

    public function setStartDatePromotion(string $startDatePromotion): self
    {
        $this->startDatePromotion = $startDatePromotion;

        return $this;
    }

    public function getEndDatePromotion(): ?string
    {
        return $this->endDatePromotion;
    }

    public function setEndDatePromotion(string $endDatePromotion): self
    {
        $this->endDatePromotion = $endDatePromotion;

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

    public function getIdadmin(): ?admin
    {
        return $this->idadmin;
    }

    public function setIdadmin(?admin $idadmin): self
    {
        $this->idadmin = $idadmin;

        return $this;
    }
}
