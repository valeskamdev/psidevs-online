<?php
ob_start();

use Psidevs\Entity\Cliente;
use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Entity\Disponibilidade;
use Psidevs\Entity\Formacao;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;
use Psidevs\Repository\QueryBuilderCliente;
use Psidevs\Repository\QueryBuilderConsulta;
use Psidevs\Repository\QueryBuilderProfissinal;

require_once "../../vendor/autoload.php";

$verificaLogin = new ControleDeAcesso();
$verificaLogin->verificaAcesso();
if(isset($_GET["sair"])) $verificaLogin-> logout();

$jsonData = file_get_contents('../../config/enums.json');
$data = json_decode($jsonData, true);

$anos = Utilitarios::inputAnoConclusao();

$usuario = new Usuario();
$usuario->setTipoUsuario($_SESSION['tipo_usuario']);
$usuario->setNome($_SESSION['nome']);

$entityManager = EntityManagerCreator::createEntityManager();
if (isset($_POST['salvar-formacao'])) {

    $formacao = new Formacao();
    $formacao->setNomeCurso($_POST['nome-curso']);
    $formacao->setInstituicao($_POST['instituicao']);
    $formacao->setTipoCurso($_POST['tipo-curso']);
    $formacao->setAnoConclusao($_POST['ano-conclusao']);

    $idProfissionalManager = $entityManager->find(Profissional::class, $_SESSION['id_profissional']);

    if ($idProfissionalManager !== null) {
        // Adiciona a disponibilidade ao profissional logado
        $idProfissionalManager->adicionarFormacao($formacao);
        header("location:perfil.php?formacao_cadastrada");
    } else {
        echo "Profissional não encontrado";
        exit();
    }

    // Insere a disponibilidade no banco de dados
    $objetoFormacao = new ObjetoRepository($entityManager, $entityManager->getClassMetadata(Formacao::class));
    $objetoFormacao->inserir($formacao);
    exit();
}

$queryBuilderCliente = new QueryBuilderCliente($entityManager, $entityManager->getClassMetadata(Cliente::class));
$queryBuilderProfissional   = new QueryBuilderProfissinal($entityManager, $entityManager->getClassMetadata(Profissional::class));

//$queryBuilderProfissional = new QueryBuilderProfissinal($entityManager, $entityManager->getClassMetadata(Profissional::class));
//$profissional = $queryBuilderProfissional->buscarUm();
//$formacoes = $queryBuilderProfissional->buscaFormacoes();

?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/dist/build.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link
    href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../../css/foto_perfil.css">
  <title>Psidevs | Minha Conta</title>
</head>
<body class="bg-secondary">
<header class="container_header">
  <div class="container_header_desktop">
    <div class="header_logo py-2">
      <h1><a href="index.php"><img src="../../assets/logo-branca.svg" class="w-11/12 ps-2 sm:ps-0" alt="Logo Psidevs, Plataforma Online"></a></h1>
    </div>
    <div class="header_perfil hidden lg:flex">
      <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu">
        <p>Josefa Ferreira</p>
        <p class="font-medium">Perfil</p>
      </div>
      <div class="header_perfil_avatar">
        <img src="../../assets/cliente-avatar.svg" alt="Avatar cliente">
      </div>
    </div>
    <div class="container_header_mobile lg:hidden z-10">
        <span class=" cursor-pointer" onclick="Openbar()">
          <img src="../../assets/icone-menu.svg" class="pe-2 sm:pe-0" alt="menu">
        </span>
      <div class="sidebar">
        <div class="text-gray-100 text-xl">
          <div class="header_sidebar p-2.5 rounded-md">
            <div class="container_header_mobile_avatar text-lg font-medium text-neutral-700">
              <img src="../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
              <p class="">Minha conta</p>
            </div>
            <i class="bi bi-x cursor-pointer bg-tertiary py-2 px-3 rounded-md text-primary text-2xl" onclick="Openbar()"></i>
          </div>
          <hr class="my-2 text-gray-600">
          <ul>
            <li>
              <a href="index.php" class="linkMenuMobile">
                <img src="../../assets/icone-home.svg" alt="Casa">
                <span class="textMenuMobile">Início</span>
              </a>
            </li>
            <li>
              <a href="consultas.php" class="linkMenuMobile">
                <img src="../../assets/icone-calendario.svg" alt="Calendário">
                <span class="textMenuMobile">Minhas consultas</span>
              </a>
            </li>
            <li>
              <a href="historico.php" class="linkMenuMobile">
                <img src="../../assets/icone-historico.svg" alt="Relógio">
                <span class="textMenuMobile">Histórico de consultas</span>
              </a>
            </li>
            <li>
              <a href="perfil.php" class="linkMenuMobile">
                <img src="../../assets/icone-perfil.svg" alt="Boneco">
                <span class="textMenuMobile">Meu perfil</span>
              </a>
            </li>
            <li class="my-4 text-gray-600"></li>
          </ul>
          <ul class="pt-5 space-y-2 border-t border-gray-200">
            <li>
              <a href="?sair" class="linkMenuMobile mt-0">
                <img src="../../assets/icone-sair.svg" alt="Porta">
                <span class="textMenuMobile">Sair</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="container">
  <div class="container_bg">
    <div class="container_sub_header_bg">
      <div class="container_sub_header">
        <h2 class="container_sub_header_saudacao"><span id="saudacao"></span>, <?=$usuario->getNome()?></h2>
        <div class="container_header_marcar_consulta_botao_bg z-50">
          <a href="../../agendamento.php" class="container_header_marcar_consulta_botao"><img src="../../assets/icone-plus.svg" class="pe-2 " alt="Sinal de adição">Marcar consulta</a>
        </div>
      </div>
    </div>
    <div class="container_principal">
      <div class="container_navbar">
        <div class="container_navbar_conteudo lg:sticky lg:top-5">
          <div class="container_navbar_conteudo_avatar text-xl font-medium text-neutral-700 pt-3">
            <img src="../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
            <p>Minha conta</p>
          </div>
          <nav class="text-primary text-lg font-medium mt-4">
            <ul>
              <li>
                <a href="index.php" class="linkSidebar"><img src="../../assets/icone-home.svg" class="pe-3.5" alt="Casa">Início</a>
              </li>
              <li>
                <a href="consultas.php" class="linkSidebar"><img src="../../assets/icone-calendario.svg" class="pe-3.5" alt="Calendário">Minhas consultas</a>
              </li>
              <li>
                <a href="historico.php" class="linkSidebar"><img src="../../assets/icone-historico.svg" class="pe-3.5" alt="Relógio">Histórico de consultas</a>
              </li>
              <li>
                <a href="perfil.php" class="linkSidebar"><img src="../../assets/icone-perfil.svg" class="pe-3.5" alt="Boneco">Meu perfil</a>
              </li>
              <li>
                <a href="?sair" class="linkSidebar border-t border-gray-900/20"><img src="../../assets/icone-sair.svg" class="pe-3.5" alt="Porta">Sair</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

<div class="container_conteudo">
          <div class="container_conteudo_perfil_bg card_bg mb-16">
            <div class="container_conteudo_perfil_estrutura">


                <?php
                if($usuario->getTipoUsuario() === 'cliente') {
                    $cliente = $queryBuilderCliente->buscarUm();
                if(isset($_POST['salvar_dados_pessoais'])) {
                    $entityUsuario      = $entityManager->find(Usuario::class, $_SESSION['id']);
//                    $entityCliente = $entityManager->find(
//                        Profissional::class,
//                        $_SESSION['id_profissional']
//                    );

                    $entityCliente = $entityManager->find(
                        Cliente::class,
                        $_SESSION['id_cliente']
                    );

                    $entityUsuario->setNome($_POST['nome']);
                    $entityUsuario->setEmail($_POST['email']);
                    $entityUsuario->setCpf($_POST['cpf']);
                    $entityUsuario->setTelefone($_POST['telefone']);
                    $entityUsuario->setGenero($_POST['genero']);

                    if (isset($_POST['regiao'])) {
                        $entityCliente->setRegiao($_POST['regiao']);
                    }
                    $entityUsuario->setDataNascimento(
                        Utilitarios::dataParaBanco(
                            $_POST['data_nascimento']
                        )
                    );

                    if ( ! empty($_FILES['foto']['name'])) {
                        // Verificar se o novo arquivo de imagem é diferente do existente
                        $novaImagem      = $_FILES['foto']['name'];
                        $imagemExistente = $entityUsuario->getFoto();

                        if ($novaImagem !== $imagemExistente) {
                            // Realizar o upload do novo arquivo de imagem
                            $entityUsuario->upload($_FILES['foto']);
                            $entityUsuario->setFoto($novaImagem);
                        }
                    }

                    $objetoUsuario = new ObjetoRepository(
                        $entityManager,
                        $entityManager->getClassMetadata(Usuario::class)
                    );

                    $objetoProfissional = new ObjetoRepository(
                        $entityManager,
                        $entityManager->getClassMetadata(Profissional::class)
                    );

                    $objetoUsuario->atualizar($entityUsuario);
                    $objetoProfissional->atualizar($entityCliente);

                    $_SESSION['nome']            = $entityUsuario->getNome();
                    $_SESSION['email']           = $entityUsuario->getEmail();
                    $_SESSION['cpf']             = $entityUsuario->getCpf();
                    $_SESSION['telefone']        = $entityUsuario->getTelefone();
                    $_SESSION['data_nascimento'] = $entityUsuario->getDataNascimento();
                    $_SESSION['genero']          = $entityUsuario->getGenero();

                    if (isset($_POST['regiao'])) {
                        $_SESSION['regiao'] = $entityCliente->getRegiao();
                    }
                    $_SESSION['foto'] = $entityUsuario->getFoto();

                    header("location:perfil.php?dados_pessoais_atualizado");
                }
                ?>
           <!-- Form Dados gerais -->
              <form method="post" name="salvar_dados_pessoais" id="formDadosPessoais"  enctype="multipart/form-data">


                <div class="container_conteudo_perfil_bg card_bg">
                  <div class="container_conteudo_perfil_estrutura">

                    <!-- Form Dados gerais -->
                      <div class="container-foto grid grid-flow-row-dense grid-rows-5 grid-cols-1 gap-4 sm:grid-cols-4 sm:grid-rows-2 ">
                        <div class="foto-upload row-span-3 flex justify-center sm:row-span-2 sm:justify-start">
                          <div class="avatar-upload">
                            <div class="avatar-edit">
                              <input type='file' name="foto" id="imageUpload" accept=".png, .jpg, .jpeg" />
                            </div>
                            <div class="avatar-preview">
                                <?php
                                $foto = $cliente['foto'];
                                $imageURL = empty($foto) ? '../../assets/foto_perfil/foto_padrao.svg' : '../../assets/foto_perfil/' . $foto;
                                ?>
                              <div id="imagePreview" style="background-image: url('<?= $imageURL ?>');"></div>
                            </div>
                          </div>
                        </div>
                        <div class="foto-botoes lg:col-span-3 ms-5">
                          <div>
                            <label for="imageUpload" class="perfil_botao bg-primary mr-4">
                              CARREGAR NOVA FOTO
                              <input id="file" name="file-perfil" accept="image/png, image/jpeg" type="file" class="hidden" />
                            </label>
                          </div>
                        </div>

                        <div class="foto-legenda">
                          <label class="text-gray-500 font-bold">
                            <span class="text-sm"> JPG ou PNG permitidos. (Tamanho máx. 800k) </span>
                          </label>
                        </div>
                      </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="nome" class="label-padrao-perfil">Nome</label>
                              <input type="text" id="nome" name="nome" value="<?=$cliente['nome']?>"  class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>
                      <!-- Emai -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="email" class="label-padrao-perfil">E-mail</label>
                              <input placeholder="nome@email.com" value="<?=$cliente['email']?>" type="email" id="email" name="email" class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>

                     <!-- TELEFONE -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="telefone" class="label-padrao-perfil">Telefone</label>
                              <input type="tel" id="telefone" name="telefone" value="<?=$cliente['telefone']?>" class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>

                      <!-- GENERO -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="genero" class="label-padrao-perfil">Gênero</label>
                            <select id="genero" name="genero" class="input-padrao-perfil sm:text-md">
                              <option selected disabled></option>
                                <?php foreach ($data['generos'] as $genero) : ?>
                                  <option value="<?=Utilitarios::formataString($genero)?>" <?php if(Utilitarios::formataString($genero) === Utilitarios::formataString($cliente['genero'])) echo ' selected '?>><?=$genero?></option>
                                <?php endforeach; ?>
                            </select>
                          </div>
                      </div>

                      <!-- CPF -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="cpf" class="label-padrao-perfil">CPF</label>
                            <input type="text" id="cpf" name="cpf" value="<?=$cliente['cpf']?>" class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>
                      
                      <!-- DATA DE NASCIMENTO -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="dataNascimento" class="label-padrao-perfil">Data de Nascimento</label>
                            <input type="date" id="dataNascimento" name="data_nascimento" value="<?=Utilitarios::formataDataParaInputDate($cliente['dataNascimento'])?>" class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>

                      <!-- SENHA -->
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="senha" class="label-padrao-perfil">Senha</label>
                            <input type="password" disabled id="senha" name="senha" class="input-padrao-perfil sm:text-md" placeholder="••••••">
                            <button type="button" name="alterar-senha" onclick="modalSenha.showModal()" id="alterarSenha" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-primary bg-secondary rounded-r-lg border hover:bg-primary/90 hover:text-neutral-100">
                                Alterar senha
                            </button>
                          </div>
                      </div>

                      <div class="mx-auto sm:col-span-6 sm:text-left">
                        <button id="atualizar" name="salvar_dados_pessoais" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                      </div>

                    </div>
              </form>
                    <?php } ?>


                <?php
                if($usuario->getTipoUsuario() === 'profissional') {
                    $profissional = $queryBuilderProfissional->buscarUm();
                    if(isset($_POST['salvar_dados_pessoais'])) {
                        $entityUsuario      = $entityManager->find(Usuario::class, $_SESSION['id']);
                        $entityProfissional = $entityManager->find(
                            Profissional::class,
                            $_SESSION['id_profissional']
                        );

                        $entityUsuario->setNome($_POST['nome']);
                        $entityUsuario->setEmail($_POST['email']);
                        $entityUsuario->setCpf($_POST['cpf']);
                        $entityUsuario->setTelefone($_POST['telefone']);
                        $entityUsuario->setGenero($_POST['genero']);

                        if (isset($_POST['regiao'])) {
                            $entityProfissional->setRegiao($_POST['regiao']);
                        }
                        $entityUsuario->setDataNascimento(
                            Utilitarios::dataParaBanco(
                                $_POST['data_nascimento']
                            )
                        );

                        if ( ! empty($_FILES['foto']['name'])) {
                            $novaImagem      = $_FILES['foto']['name'];
                            $imagemExistente = $entityUsuario->getFoto();

                            if ($novaImagem !== $imagemExistente) {
                                // Realizar o upload do novo arquivo de imagem
                                $entityUsuario->upload($_FILES['foto']);
                                $entityUsuario->setFoto($novaImagem);
                            }
                        }

                        $objetoUsuario = new ObjetoRepository(
                            $entityManager,
                            $entityManager->getClassMetadata(Usuario::class)
                        );

                        $objetoProfissional = new ObjetoRepository(
                            $entityManager,
                            $entityManager->getClassMetadata(Profissional::class)
                        );

                        $objetoUsuario->atualizar($entityUsuario);
                        $objetoProfissional->atualizar($entityProfissional);

                        $_SESSION['nome']            = $entityUsuario->getNome();
                        $_SESSION['email']           = $entityUsuario->getEmail();
                        $_SESSION['cpf']             = $entityUsuario->getCpf();
                        $_SESSION['telefone']        = $entityUsuario->getTelefone();
                        $_SESSION['data_nascimento'] = $entityUsuario->getDataNascimento();
                        $_SESSION['genero']          = $entityUsuario->getGenero();

                        if (isset($_POST['regiao'])) {
                            $_SESSION['regiao'] = $entityProfissional->getRegiao();
                        }
                        $_SESSION['foto'] = $entityUsuario->getFoto();

                        header("location:perfil.php?dados_pessoais_atualizado");
                    }
                    ?>
                  <!-- Form Dados gerais -->
                  <form method="post" name="salvar_dados_pessoais" id="formDadosPessoais"  enctype="multipart/form-data">


                    <div class="container_conteudo_perfil_bg card_bg">
                      <div class="container_conteudo_perfil_estrutura">

                        <!-- Form Dados gerais -->
                        <div class="container-foto grid grid-flow-row-dense grid-rows-5 grid-cols-1 gap-4 sm:grid-cols-4 sm:grid-rows-2 ">
                          <div class="foto-upload row-span-3 flex justify-center sm:row-span-2 sm:justify-start">
                            <div class="avatar-upload">
                              <div class="avatar-edit">
                                <input type='file' name="foto" id="imageUpload" accept=".png, .jpg, .jpeg" />
                              </div>
                              <div class="avatar-preview">
                                  <?php
                                  $foto = $profissional['foto'];
                                  $imageURL = empty($foto) ? '../../assets/foto_perfil/foto_padrao.svg' : '../../assets/foto_perfil/' . $foto;
                                  ?>
                                <div id="imagePreview" style="background-image: url('<?= $imageURL ?>');"></div>
                              </div>
                            </div>
                          </div>
                          <div class="foto-botoes lg:col-span-3 ms-5">
                            <div>
                              <label for="imageUpload" class="perfil_botao bg-primary mr-4">
                                CARREGAR NOVA FOTO
                                <input id="file" name="file-perfil" accept="image/png, image/jpeg" type="file" class="hidden" />
                              </label>
                            </div>
                          </div>

                          <div class="foto-legenda">
                            <label class="text-gray-500 font-bold">
                              <span class="text-sm"> JPG ou PNG permitidos. (Tamanho máx. 800k) </span>
                            </label>
                          </div>
                        </div>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="nome" class="label-padrao-perfil">Nome</label>
                              <input type="text" id="nome" name="nome" value="<?=$profissional['nome']?>"  class="input-padrao-perfil sm:text-md">
                            </div>
                          </div>
                          <!-- Emai -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="email" class="label-padrao-perfil">E-mail</label>
                              <input placeholder="nome@email.com" value="<?=$profissional['email']?>" type="email" id="email" name="email" class="input-padrao-perfil sm:text-md">
                            </div>
                          </div>

                          <!-- TELEFONE -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="telefone" class="label-padrao-perfil">Telefone</label>
                              <input type="tel" id="telefone" name="telefone" value="<?=$profissional['telefone']?>" class="input-padrao-perfil sm:text-md">
                            </div>
                          </div>

                          <!-- GENERO -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="genero" class="label-padrao-perfil">Gênero</label>
                              <select id="genero" name="genero" class="input-padrao-perfil sm:text-md">
                                <option selected disabled></option>
                                  <?php foreach ($data['generos'] as $genero) : ?>
                                    <option value="<?=Utilitarios::formataString($genero)?>" <?php if(Utilitarios::formataString($genero) === Utilitarios::formataString($profissional['genero'])) echo ' selected '?>><?=$genero?></option>
                                  <?php endforeach; ?>
                              </select>
                            </div>
                          </div>

                          <!-- CPF -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="cpf" class="label-padrao-perfil">CPF</label>
                              <input type="text" id="cpf" name="cpf" value="<?=$profissional['cpf']?>" class="input-padrao-perfil sm:text-md">
                            </div>
                          </div>

                          <!-- DATA DE NASCIMENTO -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="dataNascimento" class="label-padrao-perfil">Data de Nascimento</label>
                              <input type="date" id="dataNascimento" name="data_nascimento" value="<?=Utilitarios::formataDataParaInputDate($profissional['dataNascimento'])?>" class="input-padrao-perfil sm:text-md">
                            </div>
                          </div>

                          <!-- SENHA -->
                          <div class="sm:col-span-3">
                            <div class="mt-2 relative">
                              <label for="senha" class="label-padrao-perfil">Senha</label>
                              <input type="password" disabled id="senha" name="senha" class="input-padrao-perfil sm:text-md" placeholder="••••••">
                              <button type="button" name="alterar-senha" onclick="modalSenha.showModal()" id="alterarSenha" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-primary bg-secondary rounded-r-lg border hover:bg-primary/90 hover:text-neutral-100">
                                Alterar senha
                              </button>
                            </div>
                          </div>

                          <div class="mx-auto sm:col-span-6 sm:text-left">
                            <button id="atualizar" name="salvar_dados_pessoais" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                          </div>

                        </div>
                  </form>
                <?php } ?>

                <?php
                if(isset($_POST['salvar_dados_profissional'])) {
                    $entityProfissional = $entityManager->find(Profissional::class, $_SESSION['id_profissional']);
                    $entityProfissional->setRegistroCRP($_POST['registro_crp']);
                    $entityProfissional->setValorConsulta(Utilitarios::precoParaBanco($_POST['valor_consulta']));
                    $entityProfissional->setDescricao($_POST['descricao']);

                    $experiencia = implode(', ', $_POST['experiencia']);
                    $especialidade = implode(', ', $_POST['especialidade']);

                    $entityProfissional->setExperiencia($experiencia);
                    $entityProfissional->setEspecialidade($especialidade);

                    $objetoProfissional = new ObjetoRepository(
                        $entityManager,
                        $entityManager->getClassMetadata(Profissional::class)
                    );

                    $objetoProfissional->atualizar($entityProfissional);

                    $_SESSION['registro_crp'] = $entityProfissional->getRegistroCRP();
                    $_SESSION['valor_consulta'] = $entityProfissional->getValorConsulta();
                    $_SESSION['descricao'] = $entityProfissional->getDescricao();
                    $_SESSION['experiencia'] = $entityProfissional->getExperiencia();
                    $_SESSION['especializacao'] = $entityProfissional->getEspecialidade();

                    header("location:perfil.php?dados_profissional_atualizado");
                }

              if($usuario->getTipoUsuario() === 'profissional') {
                  $formacoes = $queryBuilderProfissional->buscaFormacoes();
                  $profissional = $queryBuilderProfissional->buscarUm();
                  ?>
           <!-- FORM - Area do profissional -->
                <form method="post" id="form-atualizar-pro" name="form-atualizar-pro" >
                  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="flex flex-wrap border-t-2 border-primary mt-8 sm:col-span-6 sm:flex-nowrap sm:justify-between sm:items-center sm:px-4">
                          <h2 class= "text-lg text-primary font-semibold pb-1 mt-5 w-full sm:text-xl sm:w-1/2">Área Profissional</h2>
                      </div>
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="crp" class="label-padrao-perfil">CRP</label>
                            <input type="text" id="crp" name="registro_crp" value="<?=$profissional[0]['registroCRP']?>" class="input-padrao-perfil sm:text-md">
                          </div>
                      </div>

                      <div class="sm:col-span-3">
                        <div class="mt-2 relative">
                            <label for="valorConsulta" class="label-padrao-perfil">Valor Consulta</label>
                            <input  id="valorConsulta" name="valor_consulta" value="<?=$profissional[0]['valorConsulta']?>" class="input-padrao-perfil sm:text-md" type="text">
                          <div id="mensagemErro" class="text-rose-500"></div>
                        </div>
                      </div>

                    <div class="sm:col-span-3">
                      <label class="inline-block text-sm text-gray-600" for="especialidade">Especialidade</label>
                      <div class="relative flex w-full">
                        <select
                          id="select-especialidade"
                          name="especialidade[]"
                          multiple
                          autocomplete="off"
                          class="especialidade block w-full rounded-sm cursor-pointer focus:outline-none"
                        >
                            <?php
                            $especializacoesSelecionadas = $_SESSION['especializacao'];
                            $especializacoesSelecionadas = explode(', ', $especializacoesSelecionadas);
                            foreach ($data['especializacoes'] as $especializacao) : ?>
                                <?php
                                $selecionada = in_array($especializacao, $especializacoesSelecionadas) ? 'selected' : '';
                                ?>
                              <option value="<?=$especializacao?>" <?=$selecionada?>><?= $especializacao ?></option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="sm:col-span-3">
                      <label class="inline-block text-sm text-gray-600" for="experiencia">Experiência</label>
                      <div class="relative flex w-full">
                        <select
                          id="select-experiencia"
                          name="experiencia[]"
                          multiple
                          autocomplete="off"
                          class="experiencia block w-full rounded-sm cursor-pointer focus:outline-none"
                        >
                            <?php
                            $experienciasSelecionadas = $_SESSION['experiencia']; // String com as opções selecionadas separadas por vírgulas
                            $experienciasSelecionadas = explode(', ', $experienciasSelecionadas); // Converte para um array
                            foreach ($data['experiencias'] as $experiencia) : ?>
                                <?php
                                // Verifica se a opção está no array de opções selecionadas
                                $selecionada = in_array($experiencia, $experienciasSelecionadas) ? 'selected' : '';
                                ?>
                              <option value="<?=$experiencia?>" <?=$selecionada?>><?= $experiencia ?></option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                      <div class="flex flex-wrap sm:col-span-6 sm:items-center">
                        <label for="descricao" class="block mb-2 text-sm font-semibold text-primary dark:text-white">Descrição</label>
                        <textarea id="descricao" rows="4" name="descricao" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva sobre você..."><?=$profissional[0]['descricao']?></textarea>
                      </div>

                      <div class="text-center mx-auto sm:col-span-6 sm:text-left">
                        <button id="atualizar-profissional" name="salvar_dados_profissional" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                      </div>
                  </div>
                </form>

                <hr class=" my-12 border-t-2 border-primary">

                <button type="button" data-ripple-light="true"
                        data-dialog-target="dialog-md"
                    class="border-2 border-primary bg-secondary rounded-full inline-flex text-primary font-semibold py-3.5 px-5 hover:bg-primary/90 hover:text-neutral-100 transition duration-150 ease-in-out"> Adicionar Formação +</button>

                <div class="modal-formacao flex flex-col flex-nowrap sm:col-span-6 sm:items-center">
                  <?php foreach ($formacoes as $formacao) : ?>
                  <div class="w-full p-4 mt-5` text-sm text-slate-800 rounded-lg bg-border-blue/50 my-2 justify-between " role="alert">
                      <?=$formacao['nomeCurso']?> | <?=$formacao['tipoCurso']?> <br> <?=$formacao['instituicao']?> | <?=$formacao['anoConclusao']?>
                  </div>
                    <?php endforeach; ?>

                </div>

                <?php

                //verificar se o profissonal ja tem horarios cadastrados
                $queryBuilderDisponibilidade = new QueryBuilderProfissinal($entityManager, $entityManager->getClassMetadata(Disponibilidade::class));
                $disponibilidade = $queryBuilderDisponibilidade->buscaDisponibilidades($_SESSION['id_profissional']);
                $entityProfissional = $entityManager->find(Profissional::class, $_SESSION['id_profissional']);
                if (isset($_POST['salvar_horarios'])) {
                    for ($i = 0; $i < count($_POST['dia_semana']); $i++) {
                        $disponibilidade = new Disponibilidade();
                        $disponibilidade->setDiaSemana($_POST['dia_semana'][$i]);
                        $disponibilidade->setHoraInicio($_POST['hora_inicio'][$i]);
                        $disponibilidade->setHoraTermino($_POST['hora_fim'][$i]);

                        $idProfissionalManager = $entityManager->find(
                            Profissional::class,
                            $_SESSION['id_profissional']
                        );
                        $idProfissionalManager->adicionarDisponibilidade(
                            $disponibilidade
                        );

                        $objetoDisponibilidade = new ObjetoRepository(
                            $entityManager,
                            $entityManager->getClassMetadata(Disponibilidade::class)
                        );
                        $objetoDisponibilidade->inserir($disponibilidade);
                    }
                    header("location:perfil.php?horarios_cadastrados");
                }

                }

                if($usuario->getTipoUsuario() === 'profissional') {

                if (empty($disponibilidade)) {
                ?>
                <!-- Modal -->
                  <div class="w-full">
                    <div class="mt-10 grid grid-cols-10 w-full">

                        <?php foreach ($data['diaDaSemana'] as $semana) : ?>
                          <!-- Dia da semana -->
                          <div class="col-span-10 ">
                            <label for="grid-last-name">Dias da semana</label>
                            <div class="mt-2 relative">
                              <select name="dia_semana[]" aria-label="diaDaSemana" class="disponibilidade-padrao-select sm:text-md">
                                <option value="<?= Utilitarios::formataDiaDaSemana($semana) ?>" selected><?= $semana ?></option>
                              </select>
                            </div>
                          </div>

                          <!-- Horários -->
                          <div class="col-span-10">
                            <label for="grid-last-name">Intervalo de Horas</label>
                            <div class="mt-2 relative">
                              <select name="hora_inicio[]" aria-label="horaInicio" class="disponibilidade-padrao-select sm:text-md">
                                <option value="" selected>Selecione um horário</option>
                                  <?php foreach ($data['horarios'] as $horario) : ?>
                                    <option value="<?= $horario ?>"><?= $horario ?></option>
                                  <?php endforeach; ?>
                              </select>
                            </div>
                          </div>

                          <div class="col-span-10  flex justify-center content-center items-center">
                            <span>Até</span>
                          </div>

                          <div class="col-span-10 ">
                            <div class="mt-2 relative">
                              <select name="hora_fim[]" aria-label="horaFim" class="disponibilidade-padrao-select sm:text-md">
                                <option value="" selected>Selecione um horário</option>
                                  <?php foreach ($data['horarios'] as $horario) : ?>
                                    <option value="<?= $horario ?>"><?= $horario ?></option>
                                  <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        <?php endforeach; ?>
                    </div>
                  </div>
                  <div class="text-center mx-auto sm:col-span-6 sm:text-left mt-5">
                    <button id="atualizar-profissional" name="salvar_horarios" type="submit" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                  </div>
                <?php } else { ?>
                  <div class="aviso-modal border-t mt-4 border-b bg-teal-100 border-teal-500 text-teal-900 px-4 py-3"  role="alert">
                    <p class="font-bold">Disponibilidade foi preenchida!<br>
                      <span class="text-sm font-light">Caso queira alterar, exclua a disponibilidade atual e cadastre uma nova.</span>
                  </div>
                  <?php } } ?>



            </div>

          </div>

        </div>

    </div>

  </div>
  <div class="backdrop" onclick="Openbar()"></div>
</main>

<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["formacao_cadastrada"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-4 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Sua formação foi cadastrada com sucesso.
    </div>
  </div>
</div>
   ';

    echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
}

?>
<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["dados_pessoais_atualizado"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-4 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Seus dados pessoais foram atualizados com sucesso.
    </div>
  </div>
</div>
   ';

    echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
}

?>
<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["dados_profissional_atualizado"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-4 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Seus dados profissionais foram atualizados com sucesso.
    </div>
  </div>
</div>
   ';

    echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
}

?>
<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["senha_alterada"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-4 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Sua senha foi alterada com sucesso.
    </div>
  </div>
</div>
   ';

    echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
}

?>
<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["horarios_cadastrados"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-4 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Seus horários foram cadastrados com sucesso.
    </div>
  </div>
</div>
   ';

    echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
}

?>
<div
  data-dialog-backdrop="dialog-md"
  data-dialog-backdrop-close="true"
  class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
>
  <div
    data-dialog="dialog-md"
    class=" m-4 p-5 rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
  >
    <form action="" method="post">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">
        Formação</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland
        shabby chic echo park, banjo fashion axe</p>
      <div class="flex flex-col mb-4 relative">
        <div class="">
          <label for="nomeCurso"
                 class="blockmb-2 text-sm font-medium text-gray-600 ">Nome do curso</label>
          <input type="text" id="nomeCurso" name="nome-curso" class="input bg-white input-bordered w-full border-slate-400" placeholder="search..." autocomplete="off"  />
        </div>
        <ul class="bg-white border border-gray-100 w-full mt-2 nome-curso-lista absolute z-10 top-[68px]">

        </ul>
      </div>
      <div class="flex flex-col mb-4">
        <label for="tipoCurso"
               class="blockmb-2 text-sm font-medium text-gray-600 ">Tipo de curso</label>
        <select id="tipoCurso" name="tipo-curso" class="input bg-white input-bordered w-full border-slate-400">
          <option disabled selected>Selecione uma opcao</option>
            <?php foreach ($data['tipoCurso'] as $tipoCurso) : ?>
              <option><?=$tipoCurso?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="flex flex-col mb-4 relative">
        <div class="">
          <label for="instituicao"
                 class="blockmb-2 text-sm font-medium text-gray-600 ">Instituicao</label>
          <input type="text" id="instituicao" name="instituicao" class="input bg-white input-bordered w-full border-slate-400" placeholder="search..." autocomplete="off" />
        </div>
        <ul class="bg-white border border-gray-100 w-full mt-2 instituicao-lista absolute z-10 top-[68px]">
        </ul>
      </div>
      <div class="flex flex-col mb-4">
        <label for="dataConclusao"
               class="blockmb-2 text-sm font-medium text-gray-600 ">Ano de
          conclusão</label>
        <select id="dataConclusao" name="ano-conclusao" class="input bg-white input-bordered w-full border-slate-400">
          <option disabled selected>Selecione uma opcao</option>
            <?php foreach ($anos as $ano) : ?>
              <option><?=$ano?></option>
            <?php endforeach; ?>
        </select>
      </div>

      <div class="grid place-content-end grid-flow-col">
        <button
          type="submit"
          data-ripple-light="true"
          data-dialog-close="true"
          class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          name="salvar-formacao"
        >
          Confirm
        </button>
        <button
          data-ripple-dark="true"
          data-dialog-close="true"
          id="cancelar"
          class="middle none center mr-1 bg-red-100 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        >
          Cancelar
        </button>
      </div>
    </form>
  </div>
</div>

<dialog id="modalSenha" class="modal rounded-md">
  <form action="../../inc/processa-senha.php" method="post" id="myForm">
    <div class="modal-box bg-slate-100 p-7">
      <h3 class="font-bold text-xl text-slate-900 mb-7">Alterar senha</h3>
      <div class="flex flex-wrap">
          <div class="mb-1">

            <div class="sm:col-span-3">
              <div class="mt-2 relative">
                <label for="senhaAtual" class="label-padrao-perfil">Senha atual</label>
                <input  type="password" id="senhaAtual" name="senha_atual" class="input-padrao-perfil sm:text-md">
              </div>
          <p id="errorSenhaAtual" class="text-sm mb-5"></p>
        </div>
          <div class="mb-1">
            <div class="sm:col-span-3">
              <div class="mt-2 relative">
                <label for="novaSenha" class="label-padrao-perfil">Nova sennha</label>
                <input type="password" oninput="validatePassword()" id="novaSenha" name="nova_senha" class="input-padrao-perfil sm:text-md">
              </div>
            </div>
            </div>
          <p id="errorNovaSenha" class="text-sm mb-5"></p>

          <form action="" method="post">
          <div class="w-full px-3 mb-5">
            <p id="lengthError" class="mt-4 text-gray-600">Insira no mínimo 6 caracteres</p>
            <p id="uppercaseError" class="mt-4 text-gray-600">A senha deve conter uma letra maiúscula</p>
            <p id="specialCharError" class="mt-4 text-gray-600">A senha deve conter um caractere especial</p>
          </div>

          <div class="mb-1">
            <div class="sm:col-span-3">
              <div class="mt-2 relative">
                <label for="confirmarSenha" class="label-padrao-perfil">Confirmar senha</label>
                <input type="password"
                       oninput="validateConfirmPassword()"
                       id="confirmarSenha"  name="confirma_senha" class="input-padrao-perfil sm:text-md">
              </div>
            </div>
          </div>
          <p id="errorConfirmaSenha" class="text-sm mb-5"></p>
        </div>
      </div>
      <div class="modal-action">
        <button type="submit" id="salvarSenha" class="btn py-3 px-4 bg-primary border-0 text-slate-100 font-medium hover:bg-primary/90 rounded-md">Salvar senha</button>
        <button type="button" id="naoSalvarSenha" class="btn py-3 px-4 bg-red-400 border-0 text-slate-100 font-medium hover:bg-red-600 rounded-md">Cancelar</button>
      </div>
    </div>
  </form>
</dialog>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
<script>
  new TomSelect(".experiencia",{
    plugins: ['remove_button'],
    maxItems: 8,
    create: true,
    loadThrottle: 300,
    addPrecedence: true
  });

  new TomSelect(".especialidade",{
    plugins: ['remove_button'],
    maxItems: 3,
    create: true,
    loadThrottle: 300,
    addPrecedence: true,
  });
</script>
<script>
  function Openbar() {
    document.querySelector('.sidebar').classList.toggle('right-[0px]');
    document.querySelector('.backdrop').classList.toggle('drawer-backdrop');
  }

  document.getElementById("naoSalvarFormacao").addEventListener("click", function() {
    let modal = document.getElementById("modalFormacao");
    modal.close();
  });

  const openModalButton = document.querySelector('.adicionar');
  const modal1 = document.querySelector('#modal-disp');

  const toggleModal1 = () => {
    modal1.classList.toggle('hidden');
    openModalButton.disabled = true; // Desabilita o botão ao ser clicado
    openModalButton.classList.add('bg-gray-400', 'cursor-not-allowed', 'opacity-50');

  };

  openModalButton.addEventListener('click', () => toggleModal1());


  const closeModalButtons = document.querySelectorAll(".close-formacao");
  const modalFormacoes = document.querySelectorAll(".modal-formacao");

  const toggleModal = () => {
    modalFormacoes.forEach((modal) => {
      modal.classList.toggle("hidden");
    });
  };

  closeModalButtons.forEach((button) => {
    button.addEventListener("click", toggleModal);
  });

</script>
<script src="../../js/saudacao.js"></script>
<script src="../../js/inputMask.js"></script>
<script src="../../js/fotoPerfil.js"></script>
<script src="../../js/validaValorConsulta.js"></script>
<script src="../../js/validaSenha.js"></script>
<script>
  document.getElementById("cancelar").addEventListener("click", function(event) {
    event.preventDefault();
  });

  document.addEventListener("DOMContentLoaded", function() {
    const instituicaoInput = document.getElementById("instituicao");
    const instituicaoLista = document.querySelector(".instituicao-lista");

    const nomeCursoInput = document.getElementById("nomeCurso");
    const nomeCursoLista = document.querySelector(".nome-curso-lista");

    const limiteSugestoes = 5; // Defina o limite de sugestões desejado
    const tamanhoMinimo = 2;  // Número mínimo de letras digitadas

    function atualizarSugestoes(sugestoes, input, sugestoesList) {
      const valorInput = input.value.toLowerCase();
      sugestoesList.innerHTML = '';
      let sugestoesExibidas = 0;

      if (valorInput.length < tamanhoMinimo) {
        sugestoesList.style.display = "none";
        return;
      }

      sugestoes.forEach(sugestao => {
        if (sugestoesExibidas >= limiteSugestoes) {
          return; // Limite de sugestões atingido
        }
        if (sugestao.toLowerCase().includes(valorInput)) {
          const li = document.createElement("li");
          li.className = "pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900 w-full";
          li.textContent = sugestao;
          sugestoesList.appendChild(li);
          sugestoesExibidas++;
        }
      });

      if (sugestoesExibidas > 0) {
        sugestoesList.style.display = "block";
      }
    }

    instituicaoInput.addEventListener("input", function() {
      fetch('../../config/enums.json')
        .then(response => response.json())
        .then(data => atualizarSugestoes(data.instituicoes, instituicaoInput, instituicaoLista));
    });

    instituicaoLista.addEventListener("click", function(e) {
      if (e.target.tagName === "LI") {
        instituicaoInput.value = e.target.textContent.trim();
        instituicaoLista.style.display = "none";
      }
    });

    nomeCursoInput.addEventListener("input", function() {
      fetch('../../config/enums.json')
        .then(response => response.json())
        .then(data => atualizarSugestoes(data.nomeCurso, nomeCursoInput, nomeCursoLista));
    });

    nomeCursoLista.addEventListener("click", function(e) {
      if (e.target.tagName === "LI") {
        nomeCursoInput.value = e.target.textContent.trim();
        nomeCursoLista.style.display = "none";
      }
    });
  });
</script>
</body>
</html>
<?php
ob_end_flush();
?>