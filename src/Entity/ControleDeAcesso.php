<?php

namespace Psidevs\Entity;

class ControleDeAcesso
{
    public function __construct()
    {
        if ( ! isset($_SESSION)) {
            session_start();
        }
    }

    public function verificaAcesso(): void
    {
        if ( ! isset($_SESSION['id'])) {
            session_destroy();
            header("location:../../login.php?acesso_proibido");
            die();
        }
    }

    public function login(string $id, string $nome, string $email, string $cpf, string $dataNascimento, string $genero, string $foto, string $tipo): void
    {
        $_SESSION['id']           = $id;
        $_SESSION['nome']         = $nome;
        $_SESSION['email']        = $email;
        $_SESSION['cpf']          = $cpf;
        $_SESSION['data_nascimento'] = $dataNascimento;
        $_SESSION['genero']       = $genero;
        $_SESSION['foto']         = $foto;
        $_SESSION['tipo_usuario'] = $tipo;
    }

    public function logout(): void
    {
        session_destroy();
        header("location:../../login.php?logout");
        die();
    }

    public function verificaAcessoProfissional(): void
    {
        if ($_SESSION ['tipo_usuario'] !== "profissional") {
            header("location:../../nao-autorizado.php");
            die();
        }
    }

    public function verificaAcessoCliente(): void
    {
        if ($_SESSION ['tipo_usuario'] !== "cliente") {
            header("location:../../nao-autorizado.php");
            die();
        }
    }
}