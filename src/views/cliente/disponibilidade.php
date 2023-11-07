<?php
			if(isset($_POST['salvar-disponibilidade'])){
        // if (!empty($_POST['']) && !empty($_POST[''])) {
          header("location:disponibilidade.php?campos_preechidos");
        // }
      }
?>


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
  <title>Psidevs | Disponibilidade</title>
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


            <?php if (isset($_GET["campos_preechidos"])) { ?>
              <div class="aviso-modal border-t border-b bg-teal-100 border-teal-500 text-teal-900 px-4 py-3"  role="alert">
                <p class="font-bold">Disponibilidade foi preenchida!<br>
                <span class="text-sm font-light">Não preencha os horários novamente.</span></p>
              </div>
            <?php } else { ?>
              <div class="aviso-modal bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 flex justify-between" role="alert">
                <p class="font-bold">Adicione sua disponibilidade<br>
                <span class="text-sm font-light">Ainda não possui horários definidos.</span></p>
                <button class="adicionar bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 border border-blue-700 rounded">Adicionar</button>
              </div>
            <?php } ?>

           <!-- Modal -->
                <div class="bg-blue-100 rounded-md m-7 hidden" id="modal-disp">

                    <form name="form-disponibilidade" id="form-disponibilidade" method="post" type="post">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 p-8 sm:grid-cols-8">
                                        <!-- Legendas Fixas -->
                            <div class="font-semibold hidden sm:col-span-3 md:block">
                                <label for="">Dias da semana</label>
                            </div>
                            <div class="font-semibold hidden md:block md:col-span-4">
                                <label for="">Intervalo de Horas</label>
                            </div>

                        <!-- SEGUNDA -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="genero" name="genero" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="" selected>Segunda</option>
                                    </select>
                                </div>
                            </div>

                                <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="genero" name="genero" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="genero" name="genero" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                        <!-- TERÇA -->
                            
                            <!-- Dias -->
                            <div class="mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Terça</span>
                            </div>


                            <div class=" sm:border-t-0 sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="terca" name="terca" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Terça</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        <!-- QUARTA -->
                        
                            <div class=" mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Quarta</span>
                            </div>
                            <!-- Dias -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="terca" name="terca" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Quarta</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario-inicio" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario-fim" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>


                            <!-- QUINTA -->
                        
                            <div class=" mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Quinta</span>
                            </div>
                            <!-- Dias -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="quinta" name="quinta" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Quinta</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario-inicio" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario-fim" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <!-- SEXTA -->
                        
                            <div class=" mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Sexta</span>
                            </div>
                            <!-- Dias -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="sexta" name="sexta" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Sexta</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario-inicio" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario-fim" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <!-- SABADO -->
                        
                            <div class=" mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Sábado</span>
                            </div>
                            <!-- Dias -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="sabado" name="sabado" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Sabado</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario-inicio" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario-fim" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <!-- Domingo -->
                        
                            <div class=" mt-10 inline-flex items-center justify-center w-full sm:hidden">
                                <hr class="disponibilidade-hr">
                                <span class="absolute px-3 font-medium text-gray-900 bg-tertiary -translate-x-1/2left-1/2 dark:text-white dark:bg-gray-900">Domingo</span>
                            </div>
                            <!-- Dias -->
                            <div class="sm:col-span-3">
                                <label class="md:hidden" for="">Dias da semana</label>
                                <div class="mt-2 relative">
                                    <select id="domingo" name="domingo" class="disponibilidade-padrao-select sm:text-md">
                                        <option value="">Domingo</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Horarios -->
                            <div class="sm:col-span-2">
                                <label class="md:hidden" for="">Horários</label>
                                <div class="mt-2 relative">
                                    <select id="" name="horario-inicio" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:grid-cols-1 flex justify-center content-center items-center">
                                <span>Até</span>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="mt-2 relative">
                                    <select id="" name="horario-fim" class="disponibilidade-padrao-select sm:text-md">
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>

                        <!-- Fim Dos Dias da Semana -->
                        </div>
                        <div class="flex justify-end mt-5 mr-10 pb-5">
                          <button type="submit" name="salvar-disponibilidade" class="salvar-disponibilidade bg-blue-800 hover:bg-blue-700 text-white font-bold py-3 px-6 border border-blue-700 rounded">Salvar</button>
                        </div>
                      </form>
                </div>

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


  <script>
    const openModalButton = document.querySelector(".adicionar");
    const modal1 = document.querySelector("#modal-disp");
    

    const toggleModal1 = () => {
        modal1.classList.toggle("hidden");
        openModalButton.disabled = true; // Desabilita o botão ao ser clicado
        openModalButton.classList.add("bg-gray-400", "cursor-not-allowed", "opacity-50");

    };

    openModalButton.addEventListener("click", () => toggleModal1());
  </script>

<!-- <script>
    const openModalButton = document.querySelector(".adicionar");
    const button2 = document.querySelector(".salvar-disponibilidade");
    const modal1 = document.querySelector("#modal-disp");
    const formDisponibilidade = document.getElementById("form-disponibilidade");


    const toggleModal1 = () => {
        modal1.classList.toggle("hidden");
    };

    const disableAdicionarButton = () => {
        openModalButton.disabled = true;
        openModalButton.classList.add("bg-gray-400", "cursor-not-allowed", "opacity-50");
    };

    const handleFormSubmit = (event) => {
        event.preventDefault();
        // Desativa o botão "Adicionar" após o envio do formulário
        disableAdicionarButton();
    };

    openModalButton.addEventListener("click", () => toggleModal1());
    formDisponibilidade.addEventListener("submit", handleFormSubmit);
  </script> -->

</body>
</html>