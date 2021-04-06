<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository", repositoryClass=ProductRepository::class)
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
     * @Assert\NotBlank(
     *      message = "Ce champ est obligatoire."
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(
     *      message = "Ce champ est obligatoire."
     * )
     */
    private $description;


    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(
     *      message = "Ce champ est obligatoire."
     * )
     * @Assert\Positive (
     *      message = "Ce prix n'est pas valide."
     * )
     */
    private $price;


    /**
     * @ORM\ManyToOne(targetEntity=CategoryProduct::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categoryProduct;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(
     *      message = "Ce champ est obligatoire."
     * )
     *  @Assert\Positive (
     *      message = "Ce prix n'est pas valide."
     * )
     */
    private $pricer;

    /**
     * @ORM\Column(type="integer")
     *  @Assert\NotBlank(
     *      message = "Ce champ est obligatoire."
     * )
     */
    private $quantity;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="product", orphanRemoval=true, cascade={"persist"})
     * @Assert\Valid
     */
    private $images;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Promotion", mappedBy="product")
     */
    private $promotion;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProductOrder", mappedBy="product")
     */
    private $prodectOrders;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }



    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }



    public function getPricer(): ?float
    {
        return $this->pricer;
    }

    public function setPricer(float $pricer): self
    {
        $this->pricer = $pricer;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setProduct($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProduct() === $this) {
                $image->setProduct(null);
            }
        }

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
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCategoryProduct()
    {
        return $this->categoryProduct;
    }

    /**
     * @param mixed $categoryProduct
     */
    public function setCategoryProduct($categoryProduct): void
    {
        $this->categoryProduct = $categoryProduct;
    }

    /**
     * @return mixed
     */
    public function getProdectOrders()
    {
        return $this->prodectOrders;
    }

    /**
     * @param mixed $prodectOrders
     */
    public function setProdectOrders($prodectOrders): void
    {
        $this->prodectOrders = $prodectOrders;
    }


    public function getPromo(){
        $reduction=0;
        foreach ($this->getPromotion() as $promotion){
            if($promotion->getStartDatePromotion()<=new \DateTime() && $promotion->getEndDatePromotion()>=new \DateTime()){
                $reduction=($promotion->getPourcentage());
            }
        }
       return $reduction;
    }


}
