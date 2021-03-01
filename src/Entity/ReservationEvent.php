<?php

namespace App\Entity;

use App\Repository\ReservationEventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationEventRepository::class)
 */
class ReservationEvent
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
    private $referenceEvent;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPersonRes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusEvent;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="id_admiin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAdmin;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="id_client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceEvent(): ?string
    {
        return $this->referenceEvent;
    }

    public function setReferenceEvent(string $referenceEvent): self
    {
        $this->referenceEvent = $referenceEvent;

        return $this;
    }

    public function getNbPersonRes(): ?int
    {
        return $this->nbPersonRes;
    }

    public function setNbPersonRes(int $nbPersonRes): self
    {
        $this->nbPersonRes = $nbPersonRes;

        return $this;
    }

    public function getStatusEvent(): ?string
    {
        return $this->statusEvent;
    }

    public function setStatusEvent(string $statusEvent): self
    {
        $this->statusEvent = $statusEvent;

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

    public function getIdClient(): ?user
    {
        return $this->idClient;
    }

    public function setIdClient(?user $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }
}
