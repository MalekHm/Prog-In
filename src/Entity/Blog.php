<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
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
     */
    private $descriptionBlog;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PictureBlog;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postDateBlog;

    /**
     * @ORM\ManyToOne(targetEntity=admin::class, inversedBy="idAdmin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAdmin;

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

    public function getDescriptionBlog(): ?string
    {
        return $this->descriptionBlog;
    }

    public function setDescriptionBlog(string $descriptionBlog): self
    {
        $this->descriptionBlog = $descriptionBlog;

        return $this;
    }

    public function getPictureBlog(): ?string
    {
        return $this->PictureBlog;
    }

    public function setPictureBlog(string $PictureBlog): self
    {
        $this->PictureBlog = $PictureBlog;

        return $this;
    }

    public function getPostDateBlog(): ?string
    {
        return $this->postDateBlog;
    }

    public function setPostDateBlog(string $postDateBlog): self
    {
        $this->postDateBlog = $postDateBlog;

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
}
