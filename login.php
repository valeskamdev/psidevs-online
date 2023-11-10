<?php
require_once "vendor/autoload.php";
require_once "inc/functions.php";

use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Helper\EntityManagerCreator;

$verificaLogin = new ControleDeAcesso();

if (isset($_GET["campos_obrigatorios"])) {
    $feedback = "Preencha todos os campos!";
    $alerta = "Erro!";
    $cor = "bg-red-100";
    $texto = "text-red-700";
} elseif (isset($_GET["credenciais_invalidas"])) {
    $feedback = "Credenciais inválidas!";
    $alerta = "Erro!";
    $cor = "bg-red-100";
    $texto = "text-red-700";
} elseif (isset($_GET["logout"])) {
    $feedback = "Você foi desconectado!";
    $alerta = "Sucesso!";
    $cor = "bg-green-100";
    $texto = "text-green-700";
} elseif (isset($_GET["acesso_proibido"])) {
    $feedback = "Você não tem permissão para acessar essa página!";
    $alerta = "Atenção!";
    $cor = "bg-yellow-100";
    $texto = "text-yellow-700";
}

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $entityManager = EntityManagerCreator::createEntityManager();

    $usuario = fazerLogin($entityManager, $email);


    if (empty($email) || empty($senha)) {
        header("location:login.php?campos_obrigatorios");

    } else {
        if ( ! $usuario) {
            header("location:login.php?credenciais_invalidas");
            exit();
        }

        if (password_verify($senha, $usuario->getSenha())) {
            $idUsuario   = $usuario->getId();
            $tipoUsuario = $usuario->getTipoUsuario();

            if ($tipoUsuario === 'profissional') {
                loginProfissional($entityManager, $idUsuario);
            } else {
                loginCliente($entityManager, $idUsuario);
            }

            $nomeUsuario           = $usuario->getNome();
            $emailUsuario          = $usuario->getEmail();
            $cpfUsuario            = $usuario->getCpf();
            $dataNascimentoUsuario = $usuario->getDataNascimento()->format(
              'd/m/Y'
            );
            $generoUsuario         = $usuario->getGenero();
            $fotoUsuario           = $usuario->getFoto();

            $verificaLogin->login(
              $idUsuario,
              $nomeUsuario,
              $emailUsuario,
              $cpfUsuario,
              $dataNascimentoUsuario,
              $generoUsuario,
              $fotoUsuario,
              $tipoUsuario
            );
        } else {
            header("location:login.php?credenciais_invalidas");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psidevs | Login</title>
    <link rel="stylesheet" href="css/dist/build.css">
</head>

<body class="min-h-screen p-6 bg-fundo-neutro bg-cover flex items-center justify-center">

    <div>
        <div class="container max-w-screen-lg mx-auto flex items-center justify-center">
            <div class="flex ">
                <!-- Lado Esquerdo -->
                <div class="mostrar-form  text-gray-600 bg-fundo-azul rounded-l-lg bg-cover p-6 w-1/2  md:block">
                  <div class="flex justify-center items-center h-full">
                    <img src="img/character-login.png" class="w-50" alt="">
                  </div>
                </div>

                <!-- Lado Direito -->
                <div class="conteudo-direito">
                    <div class="p-6">
                        <div class="flex items-center justify-center mb-6">
                            <a href="index.php"><img class="h-auto max-w-xs" src="img/login-avatar.png" alt="avatar generico" width="140" height="190"></a>
                        </div>
                        <h2 class="text-center text-sky-800 font-sans text-2xl font-medium">Entre na sua conta</h2>

                        <form method="post" name="form-login" class="px-4">

                            <?php if( isset($feedback) ){ ?>
                              <div class="flex rounded-lg p-4 my-4 text-sm <?=$cor?> <?=$texto?>" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                  <span class="font-medium"><?=$alerta?></span> <?=$feedback?>
                                </div>
                              </div>

                            <?php } ?>

                            <div class="relative z-0 w-full mt-6 mb-4 group">
                                <label for="email" class="label-padrao-login">
                                    <input  type="email" id="email" name="email" class="login-input peer w-full" placeholder="E-mail" />
                                    <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                        E-mail
                                    </span>
                                </label>
                            </div>

                            <div class="relative z-0 w-full mb-6 group">
                                <label for="senha" class="label-padrao-login">
                                    <input  type="password" id="senha" name="senha" class="login-input peer w-full" placeholder="Senha" />
                                    <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                        Senha
                                    </span>
                                </label>
                            </div>

                            <div class="mb-6 text-center">
                                <button type="submit" name="entrar" style="background: rgb(102,124,187);
                                    background: linear-gradient(270deg, rgba(102,124,187,0.8911939775910365) 0%, rgba(90,155,249,1) 25%, rgba(118,174,226,1) 79%, rgba(163,210,253,1) 99%);
                                /* Outros estilos que você deseja adicionar */" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-16 py-2.5 text-center">Entrar</button>
                            </div>

                                                            
                            <div class="flex flex-wrap items-center">
                                <label for="link-checkbox" class="ml-2 my-2 text-sm font-light text-gray-900 dark:text-gray-300">Esqueceu a senha? <a href="" class="text-blue-600 font-light">
                                        Redefinir senha</a></label>
                                <label for="link-checkbox" class="ml-2 text-sm font-light text-gray-900 dark:text-gray-300">Não tem conta? <a href="cadastro.php?type=cliente" class="text-blue-600 font-light">
                                            Crie uma Conta</a></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>