<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
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
    private $linkImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categoryImage;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="id_Admin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAdmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLinkImage(): ?string
    {
        return $this->linkImage;
    }

    public function setLinkImage(string $linkImage): self
    {
        $this->linkImage = $linkImage;

        return $this;
    }

    public function getCategoryImage(): ?string
    {
        return $this->categoryImage;
    }

    public function setCategoryImage(string $categoryImage): self
    {
        $this->categoryImage = $categoryImage;

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
