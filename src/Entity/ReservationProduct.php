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
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="idAdmiin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idadmin;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="id_user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idclient;

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

    public function getIdadmin(): ?admin
    {
        return $this->idadmin;
    }

    public function setIdadmin(?admin $idadmin): self
    {
        $this->idadmin = $idadmin;

        return $this;
    }

    public function getIdclient(): ?user
    {
        return $this->idclient;
    }

    public function setIdclient(?user $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }
}
