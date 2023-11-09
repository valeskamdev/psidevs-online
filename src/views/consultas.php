<?php
ob_start();

use Psidevs\Entity\Cliente;
use Psidevs\Entity\Consulta;
use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;
use Psidevs\Repository\QueryBuilderConsulta;

require_once "../../vendor/autoload.php";

$verificaLogin = new ControleDeAcesso();
$verificaLogin->verificaAcesso();
$verificaLogin->verificaAcessoCliente();
if(isset($_GET["sair"])) $verificaLogin-> logout();

$usuario = new Usuario();
$usuario->setTipoUsuario($_SESSION['tipo_usuario']);
$usuario->setNome($_SESSION['nome']);

$entityManager   = EntityManagerCreator::createEntityManager();
$objetoClienteConsulta   = new QueryBuilderConsulta($entityManager, $entityManager->getClassMetadata(Cliente::class));

$proximasConsultaCliente = $objetoClienteConsulta->proximasConsultasCliente();
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
        <h2 class="container_sub_header_saudacao"> <span id="saudacao"></span>, <?=$usuario->getNome()?></h2>
        <div class="container_header_marcar_consulta_botao_bg">
          <a href="../../agendamento.php" class="container_header_marcar_consulta_botao"><img src="../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
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
<?php if(!empty($proximasConsultaCliente)) { ?>
          <div class="container_conteudo_historico_consulta_bg_pagina_consultas card_bg">
            <div class="container_conteudo_historico_consulta_pagina_consultas">
              <div class="container_conteudo_historico_consulta_sessao">
                <div class="container_conteudo_historico_consulta_titulo_pagina_consultas">
                  <h2 class="consultaTitulo individual mb-0">Minhas de consultas</h2>
                </div>
                <div class="divisor historicos_consulta">
                  <?php foreach ($proximasConsultaCliente as $consulta) : ?>
                    <div class="container_conteudo_historico_consulta_profissional_bg">
                    <div class="container_conteudo_historico_consulta_profissional">
                      <div class="container_conteudo_historico_consulta_profissional_avatar">
                        <img src="../../assets/foto_perfil/<?=$consulta['foto']?>" class="avatar" alt="foto do profissional">
                      </div>
                      <div class="container_conteudo_historico_consulta_profissional_texto">
                        <h3 class="font-inter text-neutral-600 mb-1 text-lg"><?=$consulta['nome']?></h3>
                        <span class="dataConsulta mb-1"><img src="../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span><?=Utilitarios::formataData($consulta['data'])?></span><span class="dot"><?=Utilitarios::formataHora($consulta['data'])?></span><span>Meet</span></span>
                        <span class="dataConsulta_status_badge text-gray-800 bg-gray-200 me-2"><?=Utilitarios::primeriaLetraMaiscula($consulta['status'])?></span>
                        <span class="dataConsulta_status_badge text-gray-800 bg-tertiary"><?=Utilitarios::formataPreco($consulta['valor'])?></span>
                      </div>
                    </div>

                    <div class="container_conteudo_historico_consulta_profissional_botao">
                      <form action="" method="post">
                        <button type="button" name="cancelar"  data-id="<?=$consulta['id']?>" onclick="modalCancelarConsulta.showModal()" class="botaoCancelar">Cancelar</button>
                      </form>

                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php } else { ?>
  <div class="container_flor_bg container_flor_maior">
    <div class="container_flor">
      <img src="../../assets/flor-proximas-consultas.svg" alt="flor com uma mensagem de 'Sem próximas consultas'.">
    </div>
  </div>
  <?php } ?>
    </div>
  </div>
  <div class="backdrop" onclick="Openbar()"></div>
</main>


<?php
if(isset($_POST['modal_cancelar'])) {
    $idConsulta = $_POST['id_consulta'];
    $consulta = $entityManager->find(Consulta::class, $idConsulta);
    $consulta->setStatus('cancelada');
    $objetoCliente = new ObjetoRepository(
        $entityManager,
        $entityManager->getClassMetadata(Consulta::class)
    );
    $objetoCliente->atualizar($consulta);
    header("location:consultas.php?consulta_apagada");
    exit();
}
?>

<dialog
  id="modalCancelarConsulta"
  class="rounded-2xl border border-blue-100 bg-white p-4 shadow-lg sm:p-6 lg:p-8 max-w-lg"
>
  <div class="flex items-center gap-4">
    <span class="shrink-0 rounded-full bg-red-400 p-2 text-white">
      <svg
        class="h-4 w-4"
        fill="currentColor"
        viewbox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          clip-rule="evenodd"
          d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
          fill-rule="evenodd"
        />
      </svg>
    </span>

    <p class="font-medium sm:text-lg">Atenção</p>
  </div>

  <p class="mt-4 text-gray-600">
    Tem certeza que deseja cancelar a consulta? <br> <span class="font-medium text-xs text-red-600">(Essa ação não poderá ser desfeita)</span>
  </p>
  <hr class="my-4 text-gray-600">
  <form action="" method="post">
    <div class="py-4 text-slate-600" id="profissional-info">
      <input type="hidden" name="id_consulta" id="idConsulta">
      <p class="mb-2">Dados da consulta:</p>
      <p><span class="font-medium mb-1">Profissional:</span> <span id="profissionalConsulta"></span></p>
      <p><span class="font-medium mb-1">Data:</span> <span id="dataConsulta"></span></p>
      <p><span class="font-medium">Valor:</span> <span id="valorConsulta"></span></p>
    </div>


  <div class="mt-6 sm:flex sm:gap-4">
    <button type="submit" name="modal_cancelar" id="cancelarConsulta"
      class="inline-block w-full rounded-lg bg-primary px-5 py-3 text-center text-sm font-semibold hover:bg-primary/90 text-white sm:w-auto"
    >Cancelar Consulta</button>

    <button type="button"  id="NaoCancelarConsulta"
      class="mt-2 inline-block w-full rounded-lg bg-gray-200 px-5 py-3 text-center text-sm font-semibold text-gray-500 hover:bg-gray-300 sm:mt-0 sm:w-auto"
>Não cancelar consulta</button>
  </div>
  </form>
</dialog>


<?php
// Verifica se o parâmetro consulta_apagada está presente na URL
$consultaApagadaParam = isset($_GET["consulta_apagada"]) ?? null;

if ($consultaApagadaParam) {
    echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-7 z-50 " role="alert">
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
      Sua consulta foi cancelada com sucesso.
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

<script>
  function Openbar() {
    document.querySelector('.sidebar').classList.toggle('right-[0px]');
    document.querySelector('.backdrop').classList.toggle('drawer-backdrop');
  }
</script>
<script src="../../js/saudacao.js"></script>
<script src="../../js/modalCancelarConsulta.js"></script>
<script>
  let consultas = <?php echo json_encode($proximasConsultaCliente); ?>;
</script>
</body>
</html>
<?php
ob_end_flush();
?>