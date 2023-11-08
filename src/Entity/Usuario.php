<?php

namespace Psidevs\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\Uuid;

#[ORM\Entity]
#[ORM\Table('usuario')]
class Usuario
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 36, options: ["fixed" => true])]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    private Uuid|string $id;

    #[ORM\Column(type: "string", length: 50)]
    private string $nome;

    #[ORM\Column(type: "string", length: 50, unique: true)]
    private string $email;

    #[ORM\Column(type: "string")]
    private string $senha;

    #[ORM\Column(type: "string", length: 14, unique: true)]
    private string $cpf;

    #[ORM\Column(type: "string", length: 15)]
    private string $telefone;

    #[ORM\Column(name: "data_nascimento" ,type: "date")]
    private DateTime $dataNascimento;

    #[ORM\Column(type: "string")]
    private string $genero;

    #[ORM\Column(type: "string", nullable: true)]
    private string $foto;

    #[ORM\Column(name: "tipo_usuario", type: "string")]
    private string $tipoUsuario;

    public function upload(array $imagem) : void
    {
        $tiposValidos = [
            "image/png",
            "image/jpeg",
            "image/gif",
            "image/svg+xml"
        ];

        if (!in_array($imagem['type'], $tiposValidos)) {
            die(
            "<script>
                alert('Tipo de arquivo inválido!');
                history.back()
              </script>"
            );
        }
        $nome = $imagem['name'];
        $temporario = $imagem['tmp_name'];
        $pastaFinal = "../../assets/foto_perfil/" . $nome;
        move_uploaded_file($temporario, $pastaFinal);
    }

    /**
     * @return \Ramsey\Uuid\Uuid|string
     */
    public function getId(): Uuid|string
    {
        return $this->id;
    }

    /**
     * @param  \Ramsey\Uuid\Uuid|string  $id
     *
     * @return void
     */
    public function setId(Uuid|string $id): void
    {
        $this->id = filter_var($id, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param  string  $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     */
    public function setEmail(string $email): void
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param  string  $senha
     */
    public function setSenha(string $senha): void
    {
        $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param  string  $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = filter_var($cpf, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * @param  string  $telefone
     */
    public function setTelefone(string $telefone): void
    {
        $this->telefone = filter_var($telefone, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return \DateTime
     */
    public function getDataNascimento(): DateTime
    {
        return $this->dataNascimento;
    }

    /**
     * @param  \DateTime  $dataNascimento
     */
    public function setDataNascimento(DateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return string
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * @param  string  $genero
     */
    public function setGenero(string $genero): void
    {
        $this->genero = filter_var($genero, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getFoto(): string
    {
        return $this->foto;
    }

    /**
     * @param  string  $foto
     */
    public function setFoto(string $foto): void
    {
        $this->foto = filter_var($foto, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return string
     */
    public function getTipoUsuario(): string
    {
        return $this->tipoUsuario;
    }

    /**
     * @param  string  $tipoUsuario
     */
    public function setTipoUsuario(string $tipoUsuario): void
    {
        $this->tipoUsuario = filter_var($tipoUsuario, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

