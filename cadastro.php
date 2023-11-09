<?php

use Psidevs\Entity\Cliente;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;

require_once "vendor/autoload.php";

$jsonData = file_get_contents('config/enums.json');
$data = json_decode($jsonData, true);

/**
 * @return \Psidevs\Entity\Usuario
 */
function getUsuario(): Usuario
{
    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha(Utilitarios::codificaSenha($_POST['senha']));
    $usuario->setCpf($_POST['cpf']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setDataNascimento(
        Utilitarios::dataParaBanco($_POST['data_nascimento'])
    );
    $usuario->setGenero($_POST['genero']);
    $usuario->setFoto('');

    return $usuario;
}

if(isset($_POST['criar_conta'])) {
    $entityManager = EntityManagerCreator::createEntityManager();

    if ($_GET['type'] === 'profissional') {
        $usuario = getUsuario();
        $usuario->setTipoUsuario('profissional');

        $objetoUsuario = new ObjetoRepository(
            $entityManager,
            $entityManager->getClassMetadata(Usuario::class)
        );
        $objetoUsuario->inserir($usuario);

        $profissional = new Profissional($usuario);
        $profissional->setRegistroCRP($_POST['crp']);
        $profissional->setEspecialidade('');
        $profissional->setExperiencia('');
        $profissional->setDescricao('');
        $profissional->setRegiao('');
        $profissional->setValorConsulta(40.00);

        $objetoProfissional = new ObjetoRepository(
            $entityManager,
            $entityManager->getClassMetadata(Profissional::class)
        );
        $objetoProfissional->inserir($profissional);
    } elseif ($_GET['type'] === 'cliente') {
        $usuario = getUsuario();
        $usuario->setTipoUsuario('cliente');

        $objetoUsuario = new ObjetoRepository(
            $entityManager,
            $entityManager->getClassMetadata(Usuario::class)
        );
        $objetoUsuario->inserir($usuario);

        $cliente = new Cliente($usuario);

        $objetoCliente = new ObjetoRepository(
            $entityManager,
            $entityManager->getClassMetadata(Cliente::class)
        );
        $objetoCliente->inserir($cliente);

        header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="css/dist/build.css">
</head>

<body class="min-h-screen p-6 bg-fundo-neutro bg-cover flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto flex items-center justify-center">
            <div class="flex">
                <div class="mostrar-form  text-gray-600 bg-fundo-azul rounded-l-lg bg-cover p-6 w-1/2  md:block">
                  <div class="flex justify-center items-center h-full">
                    <img src="img/fundo-profissional.png" class="w-50" alt="">
                  </div>
                </div>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="lg:col-span-3">
                        <div class="mb-10">
                            <h1 class="flex flex-col justify-center flex-shrink-0 mb-5 text-[#152A5C] font-plus-jakarta-sans font-semibold text-3xl ">
                                Bem vindo(a) ao Psidevs!
                            </h1>

                            <p class="flex flex-col  justify-center flex-shrink-0 text-[#000] font-plus-jakarta-sans text-base font-normal">
                                Venha conhecer os nossos serviços.
                            </p>
                        </div>
                            <form action="" method="post" id="formCadastro" class="w-full">
                              <input type="hidden" name="tipo-usuario" value="<?=$_GET['type']?>">

                              <div class="relative z-0 w-full mb-6 group">
                                <label for="nome" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                  <input type="text" id="nome" name="nome" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="E-mail" />
                                  <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Nome
                                        </span>
                                </label>
                              </div>
                              <div id="erroNome"></div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="Email" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="email" id="Email" name="email" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="E-mail" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            E-mail
                                        </span>
                                    </label>
                                </div>
                              <div id="erroEmail"></div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="senha" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input required type="password" id="senha" name="senha" autocomplete="username" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Senha" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Senha
                                        </span>
                                    </label>
                                </div>
                              <div id="erroSenha"></div>

                                <div class="relative z-0 w-full my-3 group mb-6">
                                    <label for="telefone" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input required type="text" id="telefone" name="telefone" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Nome" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Telefone
                                        </span>
                                    </label>
                                </div>
                              <div id="erroTelefone"></div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="cpf" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input required type="text" id="cpf" name="cpf" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="E-mail" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                           CPF
                                        </span>
                                    </label>
                                </div>
                              <div id="erroCPF"></div>

                              <?php if ($_GET['type'] === 'profissional') { ?>
                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="crp" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input required type="text" id="crp" name="crp" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Senha" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            CRP
                                        </span>
                                    </label>
                                </div>
                              <div id="erroCRP"></div>
                              <?php } ?>

                              <div class="relative z-0 w-full mb-6 group">
                                <label for="dataNascimento" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                  <input required type="date" id="dataNascimento" name="data_nascimento" class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Senha" />
                                  <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Data de nascimento
                                        </span>
                                </label>
                              </div>
                              <div id="erroDataNascimento"></div>

                                <div class="mb-5">
                                  <select required id="genero" aria-label="genero" name="genero" class="w-full peer text-sm text-gray-700 bg-transparent rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                    <option disabled selected>Gênero</option>
                                   <?php foreach ($data['generos'] as $genero) : ?>
                                        <option value="<?=Utilitarios::formataString($genero)?>"><?=$genero?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              <div id="erroGenero"></div>

                                <div class="flex items-center mb-5">
                                    <input required id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Li e concordo com os<a href="#" class="underline text-blue-800">
                                            termos e condições.</a>e <a href="" class="underline text-blue-800">Política de privacidade</a>.</label>
                                </div>
                              <div id="erroTermoCondicao"></div>
                                <div class="flex justify-center">
                                        <button type="submit" id="criarConta" name="criar_conta" class="text-white bg-gradient-to-r from-[rgba(200,222,255,1)] via-[rgba(136,186,235,1)] to-[rgba(113,173,228,1)] hover:from-[rgba(200,222,255,1)] hover:via-[rgba(136,186,235,1)] hover:to-[rgba(113,173,228,1)] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base sm:text-lg px-12 py-2 text-center dark:from-[rgba(200,222,255,1)] dark:via-[rgba(136,186,235,1)] dark:to-[rgba(113,173,228,1)] dark:hover:from-[rgba(200,222,255,1)] dark:hover:via-[rgba(136,186,235,1)] dark:hover:to-[rgba(113,173,228,1)] dark:focus:ring-blue-800">
                                            Criar conta
                                        </button>
                                    </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/inputMask.js"></script>
</body>

</html>
