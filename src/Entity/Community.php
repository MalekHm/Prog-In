<?php

namespace App\Entity;

use App\Repository\CommunityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommunityRepository::class)
 */
class Community
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
    private $groupName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleCom;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionCom;

    /**
     * @ORM\Column(type="bigint")
     */
    private $phoneCom;

    /**
     * @ORM\Column(type="float")
     */
    private $priceCom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailCom;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="admin_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAdmin;

    /**
     * @ORM\Column(type="string", length=255)
     */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getTitleCom(): ?string
    {
        return $this->titleCom;
    }

    public function setTitleCom(string $titleCom): self
    {
        $this->titleCom = $titleCom;

        return $this;
    }

    public function getDescriptionCom(): ?string
    {
        return $this->descriptionCom;
    }

    public function setDescriptionCom(string $descriptionCom): self
    {
        $this->descriptionCom = $descriptionCom;

        return $this;
    }

    public function getPhoneCom(): ?string
    {
        return $this->phoneCom;
    }

    public function setPhoneCom(string $phoneCom): self
    {
        $this->phoneCom = $phoneCom;

        return $this;
    }

    public function getPriceCom(): ?float
    {
        return $this->priceCom;
    }

    public function setPriceCom(float $priceCom): self
    {
        $this->priceCom = $priceCom;

        return $this;
    }

    public function getEmailCom(): ?string
    {
        return $this->emailCom;
    }

    public function setEmailCom(string $emailCom): self
    {
        $this->emailCom = $emailCom;

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
