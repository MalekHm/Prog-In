<?php

namespace App\Entity;

use App\Repository\OrderRepository;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="date", length=255)
     */
    private $orderDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="orders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $user;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProductOrder", mappedBy="order")
     */
    private $prodectOrders;


    public function getId(): ?int
    {
        return $this->id;
    }





    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function setOrderDate($orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
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

    public function getTotal(){
        $total=0;
        foreach ($this->getProdectOrders() as $proOrder){
            if($proOrder->getType()){
                $total=$total+$proOrder->getProduct()->getPrice()*$proOrder->getQuantity();
            }
            else{
                $total=$total+$proOrder->getProduct()->getPricer()*$proOrder->getQuantity();

            }
        }
        return $total;

    }





}