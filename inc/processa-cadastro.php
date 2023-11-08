<?php

use Psidevs\Entity\Cliente;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;

require_once "../vendor/autoload.php";


    $errors = [];

    $nome     = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email    = isset($_POST['email']) ? trim($_POST['email']) : '';
    $senha    = isset($_POST['senha']) ? trim($_POST['senha']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $cpf      = isset($_POST['cpf']) ? trim($_POST['cpf']) : '';
    $crp      = isset($_POST['crp']) ? trim($_POST['crp']) : '';
    $genero   = isset($_POST['genero']) ? trim($_POST['genero']) : '';

    if (empty($nome)) {
        $errors['nome'] = 'Por favor, preencha o campo "Nome".';
    }

    if (empty($email)) {
        $errors['email'] = 'Por favor, preencha o campo "E-mail".';
    }

    if (empty($senha)) {
        $errors['senha'] = 'Por favor, preencha o campo "Senha".';
    }

    if (empty($telefone)) {
        $errors['telefone'] = 'Por favor, preencha o campo "Telefone".';
    }

    if (empty($cpf)) {
        $errors['cpf'] = 'Por favor, preencha o campo "CPF".';
    }

    if (empty($crp)) {
        $errors['crp'] = 'Por favor, preencha o campo "CRP".';
    }

    if (empty($genero)) {
        $errors['genero'] = 'Por favor, preencha o campo "Gênero".';
    }

    if (empty($errors)) {
        // Fields are not empty
        $response = ['success' => true];
    } else {
        // Fields are empty
        $response = ['success' => false, 'errors' => $errors];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;

//$entityManager = EntityManagerCreator::createEntityManager();
//
//if ($_GET['type'] === 'profissional') {
//    $usuario = new Usuario();
//    $usuario->setNome($_POST['nome']);
//    $usuario->setEmail($_POST['email']);
//    $usuario->setSenha(Utilitarios::codificaSenha($_POST['senha']));
//    $usuario->setCpf($_POST['cpf']);
//    $usuario->setTelefone($_POST['telefone']);
//    $usuario->setDataNascimento(
//        Utilitarios::dataParaBanco($_POST['data_nascimento'])
//    );
//    $usuario->setGenero($_POST['genero']);
//    $usuario->setTipoUsuario('profissional');
//
//    $objetoUsuario = new ObjetoRepository(
//        $entityManager,
//        $entityManager->getClassMetadata(Usuario::class)
//    );
//    $objetoUsuario->inserir($usuario);
//
//    $profissional = new Profissional($usuario);
//    $profissional->setRegistroCRP($_POST['crp']);
//    $profissional->setEspecialidade('');
//    $profissional->setExperiencia('');
//    $profissional->setDescricao('');
//    $profissional->setRegiao('');
//    $profissional->setValorConsulta(40.00);
//
//    $objetoProfissional = new ObjetoRepository(
//        $entityManager,
//        $entityManager->getClassMetadata(Profissional::class)
//    );
//    $objetoProfissional->inserir($profissional);
//} elseif ($_GET['type'] === 'cliente') {
//    $usuario = new Usuario();
//    $usuario->setNome($_POST['nome']);
//    $usuario->setEmail($_POST['email']);
//    $usuario->setSenha(Utilitarios::codificaSenha($_POST['senha']));
//    $usuario->setCpf($_POST['cpf']);
//    $usuario->setTelefone($_POST['telefone']);
//    $usuario->setDataNascimento(
//        Utilitarios::dataParaBanco($_POST['data_nascimento'])
//    );
//    $usuario->setGenero($_POST['genero']);
//    $usuario->setTipoUsuario('cliente');
//
//    $objetoUsuario = new ObjetoRepository(
//        $entityManager,
//        $entityManager->getClassMetadata(Usuario::class)
//    );
//    $objetoUsuario->inserir($usuario);
//
//    $cliente = new Cliente($usuario);
//
//    $objetoCliente = new ObjetoRepository(
//        $entityManager,
//        $entityManager->getClassMetadata(Cliente::class)
//    );
//    $objetoCliente->inserir($cliente);
//
//    header("location:login.php");
//}