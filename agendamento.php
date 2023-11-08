<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | Psidevs</title>
    <link rel="stylesheet" href="css/dist/build.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estiloagendamento.css">
</head>

<body>

    <main>
        <section class="destaque-agendamento
                       flex items-center 
                        ">

            <article class="container flex flex-col">
                <h2 class="text-center text-[3rem]  mb-3">
                    Encontre um Especialista
                </h2>
                <form action="" method="get" class="text-center">
                    <div class="relative mb-3">
                        <input type="search" name="busca" id="busca" placeholder="pesquisar" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <button class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 pesquisabtn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>

                    </div>


                </form>

            </article>


        </section>
        <section class="filtros flex items-center  mb-3">
            <article class="container flex mb-3">
                <form action="" class=" flex
                                             w-full
                                             justify-between
                                            items-center " method="get">
                    <div class="flex-auto text-[1.4rem]">
                        <label for="especialista" class="block mb-2 text-sm font-medium text-white white:text my-1 mx-1 mb-3 w-[40%] ">
                            Tipo de Especialista
                        </label>
                        <select name="especialista" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-1 mx-1 mb-3 " id="especialista">
                            <option value="">Qualquer Especialista</option>
                        </select>
                    </div>
                    <div class="flex-auto text-[1.4rem] self-end">
                        <label for="preco" class="block mb-2 text-sm font-medium text-white  white:text my-1 mx-1 mb-3 ">
                            Valor da sessão
                        </label>
                        <select name="preco" id="preco" class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-1 mx-1 mb-3 ">
                            <option value="">Qualquer valor</option>
                        </select>
                    </div>
                </form>
            </article>
        </section>

        <section class="container">

            <div class="card-psicologo 
           flex flex-col 
            flex-wrap  
            items-center
            justify-around">
                <?php for ($i = 0; $i <= 6; $i++) { ?>
                    <!-- Inicio do card -->
                    <div class="card-container col-auto w-full">
                        <article class="exibir-psicologo my-3 py-2  tamanho ">
                            <div class="flex d-flex-row
                                        m-3
                                        quebra
                                        justify-around
                                        items-center">
                                <div class="espaco">
                                    <ul class="esconder-lista ">
                                        <li>
                                            <ul class="esconder-lista flex flex-row
                                                        m-3
                                                        justify-center
                                                        items-center">
                                                <li>
                                                    <p class="perfil-foto m-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                        </svg>
                                                        <img src="" alt="">
                                                    </p>
                                                </li>
                                                <li>
                                                    <ul class="nome-preco esconder-lista m-2">
                                                        <li>
                                                            <p>Vitor Dev</p>
                                                        </li>

                                                        <li>
                                                            <p>Preco</p>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>

                                                    <h2  class="m-2 p-2">Especialidades:</h2>
                                                    <div class="flex flex-wrap justify-around">
                                                        <p class=" fundoEspe p-2 m-2">Especialidade</p>
                                                        <p class=" fundoEspe p-2 m-2">Especialidade</p>
                                                        <p class=" fundoEspe p-2 m-2">Especialidade</p>
                                                    </div>                            
                                                                                           
                                        </li>
                                        <li class="m-2 p-3">
                                            <h2>CRP: </h2>
                                            <h2><span> REGIÃO: </span></h2>
                                        </li>
                                        <li class="descricao esconder-lista">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsa officia officiis sunt aperiam dolores eligendi iusto adipisci ea, dolore quam cum tenetur, possimus porro similique quis dolor amet ullam!</p>
                                        </li>
                                        <li class="my-2  py-1">
                                            <h2 class="text-[2rem]">Plataformas:</h2>
                                            <ul class="esconder-lista flex flex-row
                                                        m-3
                                                        g-3
                                                        text-[1.7rem]
                                                        justify-around
                                                        items-center">
                                                <li>
                                                    <a href="agendamento.php?teams">
                                                        <button class="btn btn-primary">
                                                            <h3><i class="bi bi-microsoft-teams"></i></h3>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="agendamento.php?meet">
                                                        <button class="btn btn-success">
                                                            <h3><i class="bi bi-camera-reels"></i></h3>
                                                        </button>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="agendamento.php?zoom">
                                                        <button class="btn btn-primary">
                                                            <h3><i class="bi bi-camera-video-fill"></i></h3>
                                                        </button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="m-3 py-1 text-center" <p>
                                            <a class="horariosConsultas m-3 p-3 rounded-lg btn">
                                                <i class="bi bi-calendar2-plus"></i> Agendar Consulta
                                            </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agenda py-3 m-3 self-start p-3 ">
                                    <h2 class="text-[2rem]">Horarios Disponiveis <i class="bi bi-alarm"></i></h2>
                                    <div class="calendario">
                                        <table class="table-auto  caption-top">
                                            <caption class="text-center">
                                                <h2><b><i class="bi bi-calendar"></i></b></h2>
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th>Segunda</th>
                                                    <th>Terça</th>
                                                    <th>Quarta</th>
                                                    <th>Quinta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                                <tr>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                    <td>00:00</td>
                                                </tr>
                                            </tbody>

                                    </div>

                                    </table>

                                    <div class="flex my-3 justify-between w-full">
                                        <button class="  rounded-md   p-3 m-3 btn anterior-button" data-profissional-id="<?= $profissional['id'] ?>">Anterior</button>
                                        <button class=" rounded-md   p-3 m-3 btn proximo-button" data-profissional-id="<?= $profissional['id'] ?>">Próximo</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </article>
            </div>
            <!-- Fim do card -->
        <?php  } ?>



        </div>
        </section>

    </main>





    <script src="js/agendamento.js"></script>
    <script src="js/card-agendamento.js"></script>

</body>

</html>