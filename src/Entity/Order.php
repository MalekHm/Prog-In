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
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string")
     */
    private $userName;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="userAdress is required")
     */
    private $userAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orderDate;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="price is required")
     * @Assert\GreaterThan(0)
     */
    private $userPhone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;


    /**
     * @ORM\Column(type="integer")
     */
    private $totalPrice;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }


    public function getUserName(): ?int
    {
        return $this->userName;
    }

    public function setUserName(int $userName): self
    {
        $this->userName = $userName;

        return $this;
    }


    public function getUserAdress(): ?string
    {
        return $this->userAdress;
    }

    public function setUserAdress(string $userAdress): self
    {
        $this->userAdress = $userAdress;

        return $this;
    }

    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    public function setOrderDate(string $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getUserPhone(): ?int
    {
        return $this->userPhone;
    }

    public function setUserPhone(int $userPhone): self
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }


    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

}