<?php

namespace App\Entity;

use App\Repository\ProductOrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductOrderRepository::class)
 */
class ProductOrder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Order", inversedBy="prodectOrders")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $order;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="prodectOrders")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $product;


    /**
     * @ORM\Column(type="boolean")
     */
    private $type;


    public function getId(): ?int
    {
        return $this->id;
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
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }


}
