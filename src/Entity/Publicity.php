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
     * @ORM\Column(type="date", nullable=true)
     */
    private $startDatePub;

    /**
     * @ORM\Column(type="date", nullable=true)
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
     * @ORM\Column(type="string", length=255)
     */
    private $position;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;




    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStartDatePub()
    {
        return $this->startDatePub;
    }

    /**
     * @param mixed $startDatePub
     */
    public function setStartDatePub($startDatePub): void
    {
        $this->startDatePub = $startDatePub;
    }

    /**
     * @return mixed
     */
    public function getEndDatePub()
    {
        return $this->endDatePub;
    }

    /**
     * @param mixed $endDatePub
     */
    public function setEndDatePub($endDatePub): void
    {
        $this->endDatePub = $endDatePub;
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

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }


}
