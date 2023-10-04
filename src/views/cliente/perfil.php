<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../../css/dist/build.css">
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
        <h1><a href="index.php"><img src="../../../assets/logo-branca.svg" class="w-11/12 ps-2 sm:ps-0" alt="Logo Psidevs, Plataforma Online"></a></h1>
      </div>
      <div class="header_perfil hidden lg:flex">
        <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu">
          <p>Josefa Ferreira</p>
          <p class="font-medium">Perfil</p>
        </div>
        <div class="header_perfil_avatar">
          <img src="../../../assets/cliente-avatar.svg" alt="Avatar cliente">
        </div>
      </div>
      <div class="container_header_mobile lg:hidden z-10">
        <span class=" cursor-pointer" onclick="Openbar()">
          <img src="../../../assets/icone-menu.svg" class="pe-2 sm:pe-0" alt="menu">
        </span>
        <div class="sidebar">
          <div class="text-gray-100 text-xl">
            <div class="header_sidebar p-2.5 rounded-md">
              <div class="container_header_mobile_avatar text-lg font-medium text-neutral-700">
                <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
                <p class="">Minha conta</p>
              </div>
              <i class="bi bi-x cursor-pointer bg-tertiary py-2 px-3 rounded-md text-primary text-2xl" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">
            <ul>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-home.svg" alt="Casa">
                <span class="textMenuMobile">Home</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-calendario.svg" alt="Calendário">
                <span class="textMenuMobile">Minhas consultas</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-historico.svg" alt="Relógio">
                <span class="textMenuMobile">Histórico de consultas</span>
              </li>
              <li class="linkMenuMobile">
                <img src="../../../assets/icone-perfil.svg" alt="Boneco">
                <span class="textMenuMobile">Meu perfil</span>
              </li>
              <li class="my-4 text-gray-600"></li>
            </ul>
            <ul class="pt-5 space-y-2 border-t border-gray-200">
              <li class="linkMenuMobile mt-0">
                <img src="../../../assets/icone-sair.svg" alt="Porta">
                <span class="textMenuMobile">Sair</span>
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
              <a href="#" class="container_header_marcar_consulta_botao"><img src="../../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
          </div>
        </div>
      </div>
      <div class="container_principal">
        <div class="container_navbar">
          <div class="container_navbar_conteudo lg:sticky lg:top-5">
            <div class="container_navbar_conteudo_avatar text-xl font-medium text-neutral-700 pt-3">
              <img src="../../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
              <p>Minha conta</p>
            </div>
            <nav class="text-primary text-lg font-medium mt-4">
              <ul>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-home.svg" class="pe-3.5" alt="Casa">Início</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-calendario.svg" class="pe-3.5" alt="Calendário">Minhas consultas</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-historico.svg" class="pe-3.5" alt="Relógio">Histórico de consultas</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar"><img src="../../../assets/icone-perfil.svg" class="pe-3.5" alt="Boneco">Meu perfil</a>
                </li>
                <li>
                  <a href="#" class="linkSidebar border-t border-gray-900/20"><img src="../../../assets/icone-sair.svg" class="pe-3.5" alt="Porta">Sair</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="container_conteudo">
          <!-- <div class="container_conteudo_consulta_hoje_bg">
            <div class="container_conteudo_consulta_hoje">
              <div class="container_conteudo_consulta_hoje_titulo">
                <h2 class="consultaTitulo">Consulta de hoje</h2>
                <span class="container_conteudo_consulta_hoje_horario">16:40</span>
              </div>
              <div class="divisor container_conteudo_consulta_hoje_body_rodape">
                <div class="container_conteudo_consulta_hoje_corpo">
                  <h3 class="container_conteudo_consulta_hoje_corpo_titulo">Jorge Nogueira</h3>
                  <p class="container_conteudo_consulta_hoje_corpo_subtitulo">Psicólogo Educacional</p>
                  <p class="container_conteudo_consulta_hoje_corpo_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, magnam, maxime!
                    Adipisci aut blanditiis commodi delectus laboriosam nulla rerum?</p>
                </div>
                <div class="container_conteudo_consulta_hoje_rodape">
                  <div class="container_conteudo_consulta_hoje_rodape_plataforma hidden">
                    <img src="../../../assets/icone-plataforma-zoom.svg" class="" alt="Plataforma Zoom">
                  </div>
                  <div class="container_conteudo_consulta_hoje_rodape_conteudo">
                    <div class="container_conteudo_consulta_hoje_rodape_textos">
                      <h4 class="container_conteudo_consulta_hoje_rodape_titulo">Entre na chamada</h4>
                      <p class="container_conteudo_consulta_hoje_rodape_texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="container_conteudo_consulta_hoje_rodape_conteudo_link">
                    <a href="#" class="container_conteudo_consulta_hoje_rodape_conteudo_link_botao">Conectar</a>
                  </div>
              </div>
              </div>
            </div>
          </div>
          <div class="container_conteudo_proxima_consulta_bg card_bg">
              <div class="container_conteudo_proxima_consulta">
                <div class="container_conteudo_proxima_consulta_titulo">
                  <h2 class="consultaTitulo">Próximas consultas</h2>
                </div>
                <ul class="divisor">
                  <li><div class="container_conteudo_proxima_consulta_profissional">
                      <div class="container_conteudo_proxima_consulta_profissional_avatar_e_horario">
                        <div class="container_conteudo_proxima_consulta_grupo_avatar">
                          <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
                        </div>
                        <div class="container_conteudo_proxima_consulta_grupo_texto">
                          <h3 class="container_conteudo_proxima_consulta_grupo_texto_titulo">Fábia Araújo de Nogueira</h3>
                          <span class="dataConsulta"><img src="../../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span>20/06/2023</span><span class="dot">09:00</span><span>Meet</span></span>
                        </div>
                      </div>
                      <div class="container_conteudo_proxima_consulta_horario">
                        <span class="horarioConsulta">14:30</span>
                      </div>
                    </div></li>
                  <li><div class="container_conteudo_proxima_consulta_profissional">
                      <div class="container_conteudo_proxima_consulta_profissional_avatar_e_horario">
                        <div class="container_conteudo_proxima_consulta_grupo_avatar">
                          <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
                        </div>
                        <div class="container_conteudo_proxima_consulta_grupo_texto">
                          <h3 class="container_conteudo_proxima_consulta_grupo_texto_titulo">Fábia Araújo de Nogueira</h3>
                          <span class="dataConsulta"><img src="../../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span>20/06/2023</span><span class="dot">09:00</span><span>Meet</span></span>
                        </div>
                      </div>
                      <div class="container_conteudo_proxima_consulta_grupo_horario">
                        <span class="horarioConsulta">14:30</span>
                      </div>
                    </div></li>
                  <li><div class="container_conteudo_proxima_consulta_profissional">
                      <div class="container_conteudo_proxima_consulta_profissional_avatar_e_horario">
                        <div class="container_conteudo_proxima_consulta_grupo_avatar">
                          <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
                        </div>
                        <div class="container_conteudo_proxima_consulta_grupo_texto">
                          <h3 class="container_conteudo_proxima_consulta_grupo_texto_titulo">Fábia Araújo de Nogueira</h3>
                          <span class="dataConsulta"><img src="../../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span>20/06/2023</span><span class="dot">09:00</span><span>Meet</span></span>
                        </div>
                      </div>
                      <div class="container_conteudo_proxima_consulta_grupo_horario">
                        <span class="horarioConsulta">14:30</span>
                      </div>
                    </div></li>
                </ul>
            </div> -->
            <!-- <div class="container_conteudo_proxima_consulta_rodape">
              <a href="#" class="rodape">Ver todas consultas</a>
            </div>
          </div>
          <div class="container_conteudo_historico_consulta_bg card_bg">
            <div class="container_conteudo_historico_consulta">
              <div class="container_conteudo_historico_consulta_sessao">
                <div class="container_conteudo_historico_consulta_titulo">
                  <h2 class="consultaTitulo">Histórico de consultas</h2>
                </div>
                <div class="divisor">
                  <div class="container_conteudo_historico_consulta_profissional_bg">
                    <div class="container_conteudo_historico_consulta_profissional">
                      <div class="container_conteudo_historico_consulta_profissional_avatar">
                        <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
                      </div>
                      <div class="container_conteudo_historico_consulta_profissional_texto">
                        <h3 class="font-inter text-neutral-600 mb-1 text-lg">Daniela Júlia Queiroz</h3>
                        <span class="dataConsulta mb-1"><img src="../../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span>20/06/2023</span><span class="dot">09:00</span><span>Meet</span></span>
                        <span class="dataConsulta_status_badge text-green-800 bg-green-100 me-2">Finalizada</span>
                        <span class="dataConsulta_status_badge text-gray-800 bg-gray-100">R$ 75,00</span>
                      </div>
                    </div>
                    <div class="container_conteudo_historico_consulta_profissional_botao">
                      <a href="#" class="botaoReagendar">Reagendar</a>
                    </div>
                  </div>
                  <div class="container_conteudo_historico_consulta_profissional_bg">
                    <div class="container_conteudo_historico_consulta_profissional">
                      <div class="container_conteudo_historico_consulta_profissional_avatar">
                        <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
                      </div>
                      <div class="container_conteudo_historico_consulta_profissional_texto">
                        <h3 class="font-inter text-neutral-600 mb-1 text-lg">Daniela Júlia Queiroz</h3>
                        <span class="dataConsulta mb-1"><img src="../../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span>20/06/2023</span><span class="dot">09:00</span><span>Meet</span></span>
                        <span class="dataConsulta_status_badge text-red-800 bg-red-100 me-2">Cancelada</span>
                        <span class="dataConsulta_status_badge text-gray-800 bg-gray-100">R$ 75,00</span>
                      </div>
                    </div>
                    <div class="container_conteudo_historico_consulta_profissional_botao">
                      <a href="#" class="botaoReagendar">Reagendar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container_conteudo_historico_consulta_rodape">
              <a href="#" class="rodape">Ver histórico de consultas</a>
            </div>
          </div> -->
          <div class="container_navbar">
            <div class="container_navbar_conteudo lg:sticky lg:top-5">
            <form>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <div class="mt-2 relative">
                        <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nome</label>
                        <input type="text" id="large-input" placeholder="Josefa" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2 relative">
                        <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">E-mail</label>
                        <input type="text" id="large-input"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2 relative">
                        <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Telefone</label>
                        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2 relative">
                        <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Gênero</label>
                        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2 relative">
                    <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nome</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>


                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
        
            </div>

            </form>
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