<?php

use Psidevs\Entity\Cliente;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Usuario;

function fazerLogin($entityManager, $email)
{
    $userRepository = $entityManager->getRepository(Usuario::class);
    return $userRepository->findOneBy(['email' => $email]);
}

function loginProfissional($entityManager, $idUsuario): void
{
    $profissionalRepository = $entityManager->getRepository(Profissional::class);
    $profissional = $profissionalRepository->findOneBy(['usuario' => $idUsuario]);

    $idProfissional = $profissional->getId();
    $registroCRP = $profissional->getRegistroCRP();
    $descricao = $profissional->getDescricao();
    $regiao = $profissional->getRegiao();
    $valorConsulta = $profissional->getValorConsulta();
    $especializacao = $profissional->getEspecialidade();
    $experiencia = $profissional->getExperiencia();

    $_SESSION['id_profissional'] = $idProfissional;
    $_SESSION['registro_crp'] = $registroCRP;
    $_SESSION['descricao'] = $descricao;
    $_SESSION['regiao'] = $regiao;
    $_SESSION['valor_consulta'] = $valorConsulta;
    $_SESSION['especializacao'] = $especializacao;
    $_SESSION['experiencia'] = $experiencia;

    header("location:src/views/index.php");
}

function loginCliente($entityManager, $idUsuario): void
{
    $clienteRepository = $entityManager->getRepository(Cliente::class);
    $cliente = $clienteRepository->findOneBy(['usuario' => $idUsuario]);

    $idCliente = $cliente->getId();
    $_SESSION['id_cliente'] = $idCliente;

    header("location:src/views/index.php");
}