<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 * @ORM\Table(name="`admin`")
 */
class Admin
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
    private $firstNameAdmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastNameAdmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=Blog::class, mappedBy="idAdmin")
     */
    private $idAdmin;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="idAdmin")
     */
    private $id_Admin;

    /**
     * @ORM\OneToMany(targetEntity=Publicity::class, mappedBy="idAdmin")
     */
    private $id_admin;

    /**
     * @ORM\OneToMany(targetEntity=Activity::class, mappedBy="idAdmin")
     */
    private $id_Admiiin;

    /**
     * @ORM\OneToMany(targetEntity=Place::class, mappedBy="id_admin")
     */
    private $idadmin;

    /**
     * @ORM\OneToMany(targetEntity=Community::class, mappedBy="idAdmin")
     */
    private $admin_id;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReservationProduct", mappedBy="admin")
     */
    private $reservationProducts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="admin")
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity=ReservationEvent::class, mappedBy="idAdmin")
     */
    private $id_admiin;

    /**
     * @ORM\OneToMany(targetEntity=Event::class, mappedBy="idAdmin")
     */
    private $idadmiin;

    public function __construct()
    {
        $this->idAdmin = new ArrayCollection();
        $this->id_Admin = new ArrayCollection();
        $this->id_admin = new ArrayCollection();
        $this->id_Admiiin = new ArrayCollection();
        $this->idadmin = new ArrayCollection();
        $this->admin_id = new ArrayCollection();
        $this->adminid = new ArrayCollection();
        $this->reservationProducts = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->id_admiin = new ArrayCollection();
        $this->idadmiin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstNameAdmin(): ?string
    {
        return $this->firstNameAdmin;
    }

    public function setFirstNameAdmin(string $firstNameAdmin): self
    {
        $this->firstNameAdmin = $firstNameAdmin;

        return $this;
    }

    public function getLastNameAdmin(): ?string
    {
        return $this->lastNameAdmin;
    }

    public function setLastNameAdmin(string $lastNameAdmin): self
    {
        $this->lastNameAdmin = $lastNameAdmin;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|Blog[]
     */
    public function getIdAdmin(): Collection
    {
        return $this->idAdmin;
    }

    public function addIdAdmin(Blog $idAdmin): self
    {
        if (!$this->idAdmin->contains($idAdmin)) {
            $this->idAdmin[] = $idAdmin;
            $idAdmin->setIdAdmin($this);
        }

        return $this;
    }

    public function removeIdAdmin(Blog $idAdmin): self
    {
        if ($this->idAdmin->removeElement($idAdmin)) {
            // set the owning side to null (unless already changed)
            if ($idAdmin->getIdAdmin() === $this) {
                $idAdmin->setIdAdmin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getIdAdmiiin(): Collection
    {
        return $this->id_Admiiin;
    }

    public function addIdAdmiiin(Activity $idAdmiiin): self
    {
        if (!$this->id_Admiiin->contains($idAdmiiin)) {
            $this->id_Admiiin[] = $idAdmiiin;
            $idAdmiiin->setIdAdmin($this);
        }

        return $this;
    }

    public function removeIdAdmiiin(Activity $idAdmiiin): self
    {
        if ($this->id_Admiiin->removeElement($idAdmiiin)) {
            // set the owning side to null (unless already changed)
            if ($idAdmiiin->getIdAdmin() === $this) {
                $idAdmiiin->setIdAdmin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Community[]
     */
    public function getAdminId(): Collection
    {
        return $this->admin_id;
    }

    public function addAdminId(Community $adminId): self
    {
        if (!$this->admin_id->contains($adminId)) {
            $this->admin_id[] = $adminId;
            $adminId->setIdAdmin($this);
        }

        return $this;
    }

    public function removeAdminId(Community $adminId): self
    {
        if ($this->admin_id->removeElement($adminId)) {
            // set the owning side to null (unless already changed)
            if ($adminId->getIdAdmin() === $this) {
                $adminId->setIdAdmin(null);
            }
        }

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getReservationProducts(): ArrayCollection
    {
        return $this->reservationProducts;
    }

    /**
     * @param ArrayCollection $reservationProducts
     */
    public function setReservationProducts(ArrayCollection $reservationProducts): void
    {
        $this->reservationProducts = $reservationProducts;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts(): ArrayCollection
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection $products
     */
    public function setProducts(ArrayCollection $products): void
    {
        $this->products = $products;
    }

    /**
     * @return ArrayCollection
     */
    public function getIdAdmiin(): ArrayCollection
    {
        return $this->id_admiin;
    }

    /**
     * @param ArrayCollection $id_admiin
     */
    public function setIdAdmiin(ArrayCollection $id_admiin): void
    {
        $this->id_admiin = $id_admiin;
    }




}
