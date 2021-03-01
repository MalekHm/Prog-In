<?php

namespace App\Entity;

use App\Repository\PublicityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicityRepository::class)
 */
class Publicity
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
    private $startDatePub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endDatePub;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionPub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picturePub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlePub;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="id_admin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAdmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDatePub(): ?string
    {
        return $this->startDatePub;
    }

    public function setStartDatePub(string $startDatePub): self
    {
        $this->startDatePub = $startDatePub;

        return $this;
    }

    public function getEndDatePub(): ?string
    {
        return $this->endDatePub;
    }

    public function setEndDatePub(string $endDatePub): self
    {
        $this->endDatePub = $endDatePub;

        return $this;
    }

    public function getDescriptionPub(): ?string
    {
        return $this->descriptionPub;
    }

    public function setDescriptionPub(string $descriptionPub): self
    {
        $this->descriptionPub = $descriptionPub;

        return $this;
    }

    public function getPicturePub(): ?string
    {
        return $this->picturePub;
    }

    public function setPicturePub(string $picturePub): self
    {
        $this->picturePub = $picturePub;

        return $this;
    }

    public function getTitlePub(): ?string
    {
        return $this->titlePub;
    }

    public function setTitlePub(string $titlePub): self
    {
        $this->titlePub = $titlePub;

        return $this;
    }

    public function getIdAdmin(): ?admin
    {
        return $this->idAdmin;
    }

    public function setIdAdmin(?admin $idAdmin): self
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }
}
