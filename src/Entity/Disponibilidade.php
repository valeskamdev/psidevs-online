<?php

namespace Psidevs\Entity;

use AllowDynamicProperties;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[AllowDynamicProperties] #[ORM\Entity]
#[ORM\Table('disponibilidade')]
class Disponibilidade
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\Column(name: "dia_semana", type: "string", length: 3)]
    private string $diaSemana;

    #[ORM\Column(name: "hora_inicio", type: "string")]
    private string $horaInicio;

    #[ORM\Column(name: "hora_termino", type: "string")]
    private string $horaTermino;

    #[ORM\ManyToOne(targetEntity: Profissional::class, inversedBy: "disponibilidades")]
    #[ORM\JoinColumn(name: "id_profissional", referencedColumnName: "id", nullable: false)]
    private Profissional $profissional;

//    public function __construct()
//    {
//        $this->id = Uuid::uuid4()->toString();
//    }

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
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDiaSemana(): string
    {
        return $this->diaSemana;
    }

    /**
     * @param  string  $diaSemana
     */
    public function setDiaSemana(string $diaSemana): void
    {
        $this->diaSemana = $diaSemana;
    }

    /**
     * @return string
     */
    public function getHoraInicio(): string
    {
        return $this->horaInicio;
    }

    /**
     * @param  string  $horaInicio
     */
    public function setHoraInicio(string $horaInicio): void
    {
        $this->horaInicio = $horaInicio;
    }

    /**
     * @return string
     */
    public function getHoraTermino(): string
    {
        return $this->horaTermino;
    }

    /**
     * @param  string  $horaTermino
     */
    public function setHoraTermino(string $horaTermino): void
    {
        $this->horaTermino = $horaTermino;
    }

    /**
     * @return \Psidevs\Entity\Profissional
     */
    public function getProfissional(): Profissional
    {
        return $this->profissional;
    }

    /**
     * @param  \Psidevs\Entity\Profissional  $profissional
     */
    public function setProfissional(Profissional $profissional): void
    {
        $this->profissional = $profissional;
    }
}