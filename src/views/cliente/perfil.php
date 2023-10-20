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
          <div class="container_header_marcar_consulta_botao_bg z-10">
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
          <div class="container_conteudo_perfil_bg card_bg">
            <div class="container_conteudo_perfil_estrutura">
              <form>
                <!-- <img class="h-auto max-w-xs" src="../../../assets/cliente-avatar.svg" alt="image description" style="background-color: #9FA9FF;" width="150" height="200">
                -->
                <div class="container-foto grid grid-flow-row-dense grid-rows-5 grid-cols-1 gap-4 sm:grid-cols-4 sm:grid-rows-2 ">
                  <div class="foto-upload row-span-3 flex justify-center sm:row-span-2 sm:justify-start">                 
                    <label for="dropzone-file" class="flex flex-col items-center justify-center  max-w-xs h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-6 pb-5 m-3">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-center"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                      </div>
                      <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                  </div>
                  <div class="foto-botoes row-span-1  sm:row-span-1 sm:col-span-2 sm:items-end sm:justify-start ">
                    <button type="button" class="perfil_botao bg-primary sm:col-span-3 mr-4">DEFINIR NOVA FOTO
                    </button>
                    <button type="button" class="perfil_botao text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg sm:col-span-3">
                      SEM FOTO 
                    </button>
                  </div>

                  <div class="foto-legenda row-span-1 text-center sm:row-span-1 sm:col-span-2  sm:justify-start">
                    <label class="text-gray-500 font-bold">
                      <span class="text-sm"> JPG ou PNG permitidos. (Tamanho máx. 800k) </span>
                    </label>
                  </div>
                </div>


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
                              <input placeholder="nome@email.com" type="email" id="large-input"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                              <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Telefone</label>
                              <input type="tel" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                      </div>
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Gênero</label>
                            <select id="genero" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected></option>
                              <option value="nao-binario">Não Binário</option>
                              <option value="feminino">Feminino</option>
                              <option value="masculino">Masculino</option>
                            </select>
                          </div>
                      </div>
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Senha</label>
                            <input type="password" id="password" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••" required>
                          </div>
                      </div>
                      <div class="sm:col-span-3">
                          <div class="mt-2 relative">
                            <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirmar senha</label>
                            <input type="password" id="confirm_password" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••" required>
                          </div>
                      </div>
                    
                      <div class="sm:col-span-6">
                        <button type="button" class="perfil_botao bg-primary text-lg sm:col-span-3">SALVAR ALTERAÇÕES</button>
                      </div>
                    </div>
              </form>
            </div>
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