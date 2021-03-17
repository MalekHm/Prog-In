<?php

namespace App\Entity;

use App\Repository\ReservationProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationProductRepository::class)
 */
class ReservationProduct
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
    private $referencePro;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusProduct;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Admin", inversedBy="reservationProducts")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $admin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="reservationProducts")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferencePro(): ?string
    {
        return $this->referencePro;
    }

    public function setReferencePro(string $referencePro): self
    {
        $this->referencePro = $referencePro;

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

    public function getStatusProduct(): ?string
    {
        return $this->statusProduct;
    }

    public function setStatusProduct(string $statusProduct): self
    {
        $this->statusProduct = $statusProduct;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }




}
