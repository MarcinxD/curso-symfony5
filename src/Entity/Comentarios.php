<?php

namespace App\Entity;

use App\Repository\ComentariosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComentariosRepository::class)]
class Comentarios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $comentario = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_publicacion = null;

    #[ORM\ManyToOne(inversedBy: 'comentarios')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $usuario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(\DateTimeInterface $fecha_publicacion): self
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }

    public function getUsuario(): ?user
    {
        return $this->usuario;
    }

    public function setUsuario(?user $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
