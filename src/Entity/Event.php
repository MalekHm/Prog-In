<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $start_date;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $end_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_persons;
    /**
     * @ORM\Column(type="integer")
     */
    private $place_disponible;

    /**
     * @ORM\Column(type="float")
     */
    private $price_event;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="events")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="event")
     */
    private $images;



    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbViews;


    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="event")
     */
    private $reservations;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Promotion", mappedBy="event")
     */
    private $promotion;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartDate($start_date): void
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     */
    public function setEndDate($end_date): void
    {
        $this->end_date = $end_date;
    }



    /**
     * @return mixed
     */
    public function getNbPersons()
    {
        return $this->nb_persons;
    }

    /**
     * @param mixed $nb_persons
     */
    public function setNbPersons($nb_persons): void
    {
        $this->nb_persons = $nb_persons;
    }

    /**
     * @return mixed
     */
    public function getPriceEvent()
    {
        return $this->price_event;
    }

    /**
     * @param mixed $price_event
     */
    public function setPriceEvent($price_event): void
    {
        $this->price_event = $price_event;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }





    /**
     * @return mixed
     */
    public function getNbViews()
    {
        return $this->nbViews;
    }

    /**
     * @param mixed $nbViews
     */
    public function setNbViews($nbViews): void
    {
        $this->nbViews = $nbViews;
    }

    /**
     * @return mixed
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * @param mixed $reservations
     */
    public function setReservations($reservations): void
    {
        $this->reservations = $reservations;
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

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }




    public function __toString()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getPlaceDisponible()
    {
        return $this->place_disponible;
    }

    /**
     * @param mixed $place_disponible
     */
    public function setPlaceDisponible($place_disponible): void
    {
        $this->place_disponible = $place_disponible;
    }

    public function getPromo(){
        $reduction=0;
        foreach ($this->getPromotion() as $promotion){
            if($promotion->getStartDatePromotion()<=new \DateTime() && $promotion->getEndDatePromotion()>=new \DateTime()){
                $reduction=($this->getPriceEvent()*$promotion->getPourcentage())/100;
            }
        }
        if($reduction!=0){
            return "Réservez maintenant et gagnez ".$reduction." DT sur chaque ticket";
        }
    }

}
