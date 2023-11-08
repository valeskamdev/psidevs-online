<?php

namespace Psidevs\Entity;

use AllowDynamicProperties;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[AllowDynamicProperties] #[ORM\Entity]
#[ORM\Table('formacao')]
class Formacao
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\Column(name: "nome_curso", type: "string")]
    private string $nomeCurso;

    #[ORM\Column(type: "string")]
    private string $instituicao;

    #[ORM\Column(name: "tipo_curso", type: "string")]
    private string $tipoCurso;

    #[ORM\Column(name: "ano_conclusao", type: "string")]
    private string $anoConclusao;

    #[ORM\ManyToOne(targetEntity: Profissional::class, inversedBy: "formacoes")]
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
        $this->id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);;
    }

    /**
     * @return string
     */
    public function getNomeCurso(): string
    {
        return $this->nomeCurso;
    }

    /**
     * @param  string  $nomeCurso
     */
    public function setNomeCurso(string $nomeCurso): void
    {
        $this->nomeCurso = filter_var($nomeCurso, FILTER_SANITIZE_SPECIAL_CHARS);;
    }

    /**
     * @return string
     */
    public function getInstituicao(): string
    {
        return $this->instituicao;
    }

    /**
     * @param  string  $instituicao
     */
    public function setInstituicao(string $instituicao): void
    {
        $this->instituicao = filter_var($instituicao, FILTER_SANITIZE_SPECIAL_CHARS);;
    }

    /**
     * @return string
     */
    public function getTipoCurso(): string
    {
        return $this->tipoCurso;
    }

    /**
     * @param  string  $tipoCurso
     */
    public function setTipoCurso(string $tipoCurso): void
    {
        $this->tipoCurso = filter_var($tipoCurso, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getAnoConclusao(): string
    {
        return $this->anoConclusao;
    }

    /**
     * @param  string  $anoConclusao
     */
    public function setAnoConclusao(string $anoConclusao): void
    {
        $this->anoConclusao = filter_var($anoConclusao, FILTER_SANITIZE_SPECIAL_CHARS);
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