<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $nbParticipants;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $Status;
    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $paid;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $reservationDate;


    /**
     * @ORM\ManyToOne(targetEntity=Event::class, inversedBy="reservations")
     */
    private $event;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resteapayer;
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $reduction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbParticipants(): ?int
    {
        return $this->nbParticipants;
    }

    public function setNbParticipants(int $nbParticipants): self
    {
        $this->nbParticipants = $nbParticipants;

        return $this;
    }


    public function getStatus(): ?bool
    {
        return $this->Status;
    }

    public function setStatus(bool $Status): self
    {
        $this->Status = $Status;

        return $this;
    }




    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    /**
     * @param mixed $reservationDate
     */
    public function setReservationDate($reservationDate): void
    {
        $this->reservationDate = $reservationDate;
    }

    /**
     * @return mixed
     */
    public function getResteapayer()
    {
        return $this->resteapayer;
    }

    /**
     * @param mixed $resteapayer
     */
    public function setResteapayer($resteapayer): void
    {
        $this->resteapayer = $resteapayer;
    }

    /**
     * @return mixed
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * @param mixed $reduction
     */
    public function setReduction($reduction): void
    {
        $this->reduction = $reduction;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param mixed $paid
     */
    public function setPaid($paid): void
    {
        $this->paid = $paid;
    }


}
