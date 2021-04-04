<?php

namespace App\Entity;
use App\Repository\BlogRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository", repositoryClass=BlogRepository::class)
 */
class Blog
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
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=5)
     *
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255 , nullable=true)
     * @Assert\File(maxSize="500k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     */
    private $picture;

    /**
     * @ORM\ManyToOne(targetEntity=Community::class, inversedBy="blogs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $community;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     */
    private $dateAjout;

   
    /**
     * @ORM\OneToMany(targetEntity=CommentArticle::class, mappedBy="blogs",cascade={"remove"})
     */
    private $commentArticles;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="Likes")
     * @ORM\JoinColumn(onDelete="CASCADE")

     */
    private $Likes;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="Dislikes",cascade={"remove"})
    * @ORM\JoinTable(name="dislikes")
         * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $Dislike;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="blogs")
      * @ORM\JoinTable(name="Favouris")
         * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $Favoris;



    public function __construct()
    {
        $this->commentArticles = new ArrayCollection();
        $this->Likes = new ArrayCollection();
        $this->Dislike = new ArrayCollection();
        $this->Favoris = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCommunity(): ?Community
    {
        return $this->community;
    }

    public function setCommunity(?Community $community): self
    {
        $this->community = $community;

        return $this;
    }

    /**
     * Set dateAjout
     *
     * @param DateTime $dateAjout
     *
     * @return Blog
     */
    public function setDateAjout(DateTime $dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }
    /**
     * Get dateAjout
     *
     * @return DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

 

    /**
     * @return Collection|CommentArticle[]
     */
    public function getCommentArticles(): Collection
    {
        return $this->commentArticles;
    }

    public function addCommentArticle(CommentArticle $commentArticle): self
    {
        if (!$this->commentArticles->contains($commentArticle)) {
            $this->commentArticles[] = $commentArticle;
            $commentArticle->setBlogs($this);
        }

        return $this;
    }

    public function removeCommentArticle(CommentArticle $commentArticle): self
    {
        if ($this->commentArticles->removeElement($commentArticle)) {
            // set the owning side to null (unless already changed)
            if ($commentArticle->getBlogs() === $this) {
                $commentArticle->setBlogs(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getLikes(): Collection
    {
        return $this->Likes;
    }

    public function addLike(User $like): self
    {
        if (!$this->Likes->contains($like)) {
            $this->Likes[] = $like;
        }

        return $this;
    }

    public function removeLike(User $like): self
    {
        $this->Likes->removeElement($like);

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getDislike(): Collection
    {
        return $this->Dislike;
    }

    public function addDislike(User $dislike): self
    {
        if (!$this->Dislike->contains($dislike)) {
            $this->Dislike[] = $dislike;
        }

        return $this;
    }

    public function removeDislike(User $dislike): self
    {
        $this->Dislike->removeElement($dislike);

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getFavoris(): Collection
    {
        return $this->Favoris;
    }

    public function addFavori(User $favori): self
    {
        if (!$this->Favoris->contains($favori)) {
            $this->Favoris[] = $favori;
        }

        return $this;
    }

    public function removeFavori(User $favori): self
    {
        $this->Favoris->removeElement($favori);

        return $this;
    }

 




}
