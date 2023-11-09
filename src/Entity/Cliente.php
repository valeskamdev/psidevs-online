<?php

namespace Psidevs\Entity;

use AllowDynamicProperties;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[AllowDynamicProperties] #[ORM\Entity]
#[ORM\Table('cliente')]
class Cliente
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\OneToOne(targetEntity: Usuario::class, cascade: ["remove"])]
    #[ORM\JoinColumn(name: "id_usuario", referencedColumnName: "id", nullable: false)]
    private Usuario $usuario;

    #[ORM\OneToMany(mappedBy: "cliente", targetEntity: Consulta::class, cascade: ["remove"])]
    private Collection $consultas;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
        $this->consultas = new ArrayCollection();
    }

    /**
     * @return \Ramsey\Uuid\Uuid|string
     */
    public function getId(): string|Uuid
    {
        return $this->id;
    }

    /**
     * @param  \Ramsey\Uuid\Uuid|string  $id
     */
    public function setId(string|Uuid $id): void
    {
        $this->id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);;
    }

    /**
     * @return \Psidevs\Entity\Usuario
     */
    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    /**
     * @param  \Psidevs\Entity\Usuario  $usuario
     */
    public function setUsuario(Usuario $usuario): void
    {
        $this->usuario = $usuario;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConsultas(): Collection
    {
        return $this->consultas;
    }

    /**
     * @param  \Doctrine\Common\Collections\Collection  $consultas
     */
    public function setConsultas(Collection $consultas): void
    {
        $this->consultas = $consultas;
    }
}