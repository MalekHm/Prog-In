<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
    private $nameProduct;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionProduct;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categoryProduct;

    /**
     * @ORM\Column(type="float")
     */
    private $priceProduct;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Promotion", mappedBy="product")
     */
    private $promotion;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProduct(): ?string
    {
        return $this->nameProduct;
    }

    public function setNameProduct(string $nameProduct): self
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }

    public function getDescriptionProduct(): ?string
    {
        return $this->descriptionProduct;
    }

    public function setDescriptionProduct(string $descriptionProduct): self
    {
        $this->descriptionProduct = $descriptionProduct;

        return $this;
    }

    public function getCategoryProduct(): ?string
    {
        return $this->categoryProduct;
    }

    public function setCategoryProduct(string $categoryProduct): self
    {
        $this->categoryProduct = $categoryProduct;

        return $this;
    }

    public function getPriceProduct(): ?float
    {
        return $this->priceProduct;
    }

    public function setPriceProduct(float $priceProduct): self
    {
        $this->priceProduct = $priceProduct;

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
        return $this->nameProduct;
    }


}
