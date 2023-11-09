<?php

namespace Psidevs\Entity;

use AllowDynamicProperties;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[AllowDynamicProperties] #[ORM\Entity]
#[ORM\Table('profissional')]
class Profissional
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\Column(type: "string", nullable: true, options: ["default" => ""])]
    private string $especialidade;

    #[ORM\Column(type: "string", length: 13, unique: true)]
    private string $registroCRP;

    #[ORM\Column(type: "string", nullable: true, options: ["default" => ""])]
    private string $experiencia;

    #[ORM\Column(type: "string", nullable: true, options: ["default" => ""])]
    private string $descricao;

    #[ORM\Column(type: "string", nullable: true, options: ["default" => ""])]
    private string $regiao;

    #[ORM\Column(name: "valor_consulta", type: "decimal", precision: 6, scale: 2)]
    private float $valorConsulta;


    #[ORM\OneToMany(mappedBy: "profissional", targetEntity: Formacao::class, cascade: ["remove"])]
    private Collection $formacoes;

    #[ORM\OneToMany(mappedBy: "profissional", targetEntity: Disponibilidade::class, cascade: ["remove"])]
    private Collection $disponibilidades;

    #[ORM\OneToOne(mappedBy: "profissional", targetEntity: Consulta::class, cascade: ["remove"])]
    private Consulta $consultas;

    #[ORM\OneToOne(targetEntity: Usuario::class, cascade: ["remove"])]
    #[ORM\JoinColumn(name: "id_usuario", referencedColumnName: "id", nullable: false)]
    private Usuario $usuario;

    public function __construct(Usuario $usuario)
    {
//        $this->id        = Uuid::uuid4()->toString();
        $this->usuario   = $usuario;
        $this->formacoes = new ArrayCollection();
    }

    public function adicionarFormacao(Formacao $formacao): void
    {
        $this->formacoes->add($formacao);
        $formacao->setProfissional($this); // Configura o profissional associado à formação
    }

    public function adicionarDisponibilidade(Disponibilidade $disponibilidade): void
    {
        $this->disponibilidades->add($disponibilidade);
        $disponibilidade->setProfissional($this); // Configura o profissional associado à disponibilidade
    }

    public function  temDisponibilidade(): bool
    {
        return $this->disponibilidades->count() <= 0;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param  string  $id
     */
    public function setId(string $id): void
    {
        $this->id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    /**
     * @param  string  $especialidade
     */
    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = filter_var($especialidade, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getRegistroCRP(): string
    {
        return $this->registroCRP;
    }

    /**
     * @param  string  $registroCRP
     */
    public function setRegistroCRP(string $registroCRP): void
    {
        $this->registroCRP = filter_var($registroCRP, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getExperiencia(): string
    {
        return $this->experiencia;
    }

    /**
     * @param  string  $experiencia
     */
    public function setExperiencia(string $experiencia): void
    {
        $this->experiencia = filter_var($experiencia, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param  string  $descricao
     */
    public function setDescricao(string $descricao): void
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getRegiao(): string
    {
        return $this->regiao;
    }

    /**
     * @param  string  $regiao
     */
    public function setRegiao(string $regiao): void
    {
        $this->regiao = filter_var($regiao, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return float
     */
    public function getValorConsulta(): float
    {
        return $this->valorConsulta;
    }

    /**
     * @param  float  $valorConsulta
     */
    public function setValorConsulta(float $valorConsulta): void
    {
        $this->valorConsulta = filter_var($valorConsulta, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }


    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormacoes(): Collection
    {
        return $this->formacoes;
    }

    /**
     * @param  \Doctrine\Common\Collections\Collection  $formacoes
     */
    public function setFormacoes(Collection $formacoes): void
    {
        $this->formacoes = $formacoes;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDisponibilidades(): Collection
    {
        return $this->disponibilidades;
    }

    /**
     * @param  \Doctrine\Common\Collections\Collection  $disponibilidades
     */
    public function setDisponibilidades(Collection $disponibilidades): void
    {
        $this->disponibilidades = $disponibilidades;
    }

    /**
     * @return \Psidevs\Entity\Consulta
     */
    public function getConsultas(): Consulta
    {
        return $this->consultas;
    }

    /**
     * @param  \Psidevs\Entity\Consulta  $consultas
     */
    public function setConsultas(Consulta $consultas): void
    {
        $this->consultas = $consultas;
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
}