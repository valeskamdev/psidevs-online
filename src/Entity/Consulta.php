<?php

namespace Psidevs\Entity;

use AllowDynamicProperties;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[AllowDynamicProperties] #[ORM\Entity]
#[ORM\Table('consulta')]
class Consulta
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\Column(type: "datetime")]
    private DateTime $data;

    #[ORM\Column(name: "valor", type: "decimal", precision: 6, scale: 2)]
    private float $valor;

    #[ORM\Column(type: "string", length: 10, options: ["default" => "agendada"])]
    private string $status;

    #[ORM\ManyToOne(targetEntity: Profissional::class, inversedBy: "consultas")]
    #[ORM\JoinColumn(name: "id_profissional", referencedColumnName: "id", nullable: false)]
    private Profissional $profissional;

    #[ORM\ManyToOne(targetEntity: Cliente::class, inversedBy: "consultas")]
    #[ORM\JoinColumn(name: "id_cliente", referencedColumnName: "id", nullable: false)]
    private Cliente $cliente;

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
     * @return \DateTime
     */
    public function getData(): DateTime
    {
        return $this->data;
    }

    /**
     * @param  \DateTime  $data
     */
    public function setData(DateTime $data): void
    {
        $this->data = $data;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param  float  $valor
     */
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param  string  $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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

    /**
     * @return \Psidevs\Entity\Cliente
     */
    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    /**
     * @param  \Psidevs\Entity\Cliente  $cliente
     */
    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }
}