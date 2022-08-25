<?php

namespace App\Entity;

use App\Repository\PostsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 */
class Posts
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
    private $Titulo;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $Likes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Foto;

    /**
     * @ORM\Column(type="date")
     */
    private $Fecha_publicacion;

    /**
     * @ORM\Column(type="string", length=80000)
     */
    private $Contenido;

// Relaciones

/**
     * @ORM\OneToMany(targetEntity="App\Entity\Comentarios", mappedBy="posts")
     */
    private $comentarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user", inversedBy="posts")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): self
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getLikes(): ?string
    {
        return $this->Likes;
    }

    public function setLikes(?string $Likes): self
    {
        $this->Likes = $Likes;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->Foto;
    }

    public function setFoto(string $Foto): self
    {
        $this->Foto = $Foto;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->Fecha_publicacion;
    }

    public function setFechaPublicacion(\DateTimeInterface $Fecha_publicacion): self
    {
        $this->Fecha_publicacion = $Fecha_publicacion;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->Contenido;
    }

    public function setContenido(string $Contenido): self
    {
        $this->Contenido = $Contenido;

        return $this;
    }
}
