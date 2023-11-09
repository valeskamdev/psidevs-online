<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/dist/build.css">
  <link rel="preconnect" href="https:fonts.googleapis.com">
  <link rel="preconnect" href="https:fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https:cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https:fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Psidevs | Financeiro</title>
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
        <h2 class="container_sub_header_saudacao">Boa tarde, Josefa Ferreira</h2>
        <div class="container_header_marcar_consulta_botao_bg">
          <a href="#" class="container_header_marcar_consulta_botao z-50"><img src="../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
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
      <div class="container_conteudo card_bg ">
          <div class="container_conteudo_perfil_bg ">
            <div class="container_conteudo_perfil_estrutura">
              <!--  -->
              <div class="flex flex-wrap mt-8 sm:col-span-6 sm:flex-nowrap sm:justify-between sm:items-center">
                    <h2 class= "text-xl mx-8 sm:mx-3 text-blue-900 font-semibold w-full sm:text-2xl sm:w-1/2">Relatório Financeiro</h2>
               </div>
              <div class="-mt-4 flex items-center justify-center">
                <div
                    class="w-full max-w-[1190px] py-5 sm:py-2 rounded-xl min-h-[300px] m-6 sm:m-2 ">
                    <ul class="flex items-start justify-between gap-5 mt-10 md:flex-row flex-col text-blue-900">
                        <li
                            class="w-full lg:w-[32%] px-8 pt-16 pb-8 bg-[#eef0fd] rounded-lg self-stretch hover:scale-105 hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in">
                            <p class="text-center tracking-tighter block mb-10">
                                <span class="text-4xl font-bold">R$8500</span>
                                <span class="text-black/40 text-center">/ano</span>
                            </p>
                            <p class="font-semibold">Total no Ano</p>
                            <ol class="text-gray-500 font-normal ml-1 list-none w-[80%] mx-auto">
                                <li><span class= "text-xs">Valor sessão R$180</span></li>
                                <li><span class= "text-xs">Clientes 35</span></li>
                            </ol>
                        </li>
                        <li
                            class="w-full lg:w-[32%] px-8 pt-16 pb-8 bg-[#eef0fd] rounded-lg self-stretch hover:scale-105 hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in">
                            <p class="text-center tracking-tighter block mb-10">
                                <span class="text-4xl font-bold">R$900</span>
                                <span class="text-black/40 text-center">/mês</span>
                            </p>
                            <p class="font-semibold">Saldo Mensal</p>
                            <ol class="text-gray-500 font-normal ml-1 list-none w-[80%] mx-auto">
                                <li><span class= "text-xs">Valor sessão: R$180</span></li>
                                <li><span class= "text-xs">Clientes: 5</span></li>
                            </ol>
                        </li>
                        <li
                            class="w-full lg:w-[32%] px-7 pt-16 pb-8 bg-[#eef0fd] rounded-lg self-stretch hover:scale-105 hover:shadow-[0px_14px_28px_-5px_rgba(0,0,0,0.1)] transition-all duration-150 ease-in">
                            <p class="text-center tracking-tighter block mb-10">
                                <span class="text-4xl font-bold">5</span>
                                <span class="text-black/40 text-center">/mês</span>
                            </p>
                            <p class="font-semibold">Quantidade de clientes</p>
                            <ol class="text-gray-500 font-normal ml-1 list-none w-[80%] mx-auto">
                                <li><span class= "text-xs">Valor sessão: R$180</span></li>
                                <li><span class= "text-xs">Clientes: 5</span></li>
                            </ol>
                        </li>
                    </ul>
                    <div
                        class="w-full mt-8 px-8 pt-16 pb-8 bg-white rounded-lg self-stretch border-2 border-primary">
                            
                    </ldiv>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="backdrop" onclick="Openbar()"></div>
</main>

<script>
  function Openbar() {
    document.querySelector('.sidebar').classList.toggle('right-[0px]');
    document.querySelector('.backdrop').classList.toggle('drawer-backdrop');
  }
</script>
</body>
</html>