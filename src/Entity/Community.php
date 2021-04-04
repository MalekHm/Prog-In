<?php

namespace App\Entity;

use App\Repository\CommunityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommunityRepository", repositoryClass=CommunityRepository::class)
 */
class Community
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
    private $grp_name;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\NotBlank
     *  @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="integer" , length=8)
     * @Assert\NotBlank(message="champ obligatoire")
     *@Assert\Length(min = 8, max = 10, minMessage = "min_lenght", maxMessage = "max_lenght")
     *@Assert\Regex(pattern="/^[0-9]*$/", message="number_only")
     */
    private $phone;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      minMessage = "Your description must be at least {{ limit }} characters long",

     * )
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Blog::class, mappedBy="community")
     * @ORM\JoinColumn(nullable=false)
     */
    private $blogs;

    public function __construct()
    {
        $this->blogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrpName(): ?string
    {
        return $this->grp_name;
    }

    public function setGrpName(string $grp_name): self
    {
        $this->grp_name = $grp_name;

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

    public function getPhone(): ?float
    {
        return $this->phone;
    }

    public function setPhone(float $phone): self
    {
        $this->phone = $phone;

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

    /**
     * @return Collection|Blog[]
     */
    public function getBlogs(): Collection
    {
        return $this->blogs;
    }

    public function addBlog(Blog $blog): self
    {
        if (!$this->blogs->contains($blog)) {
            $this->blogs[] = $blog;
            $blog->setCommunity($this);
        }

        return $this;
    }

    public function removeBlog(Blog $blog): self
    {
        if ($this->blogs->removeElement($blog)) {
            // set the owning side to null (unless already changed)
            if ($blog->getCommunity() === $this) {
                $blog->setCommunity(null);
            }
        }

        return $this;
    }
}
