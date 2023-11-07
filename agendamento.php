<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | Psidevs</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estiloagendamento.css">
</head>

<body>

    <main>
        <section class="destaque-agendamento 
                        d-flex align-items-center 
                        ">

            <article class="container col-auto">
                <h2 class="text-center  mb-3">
                    Encontre um Especialista
                </h2>
                <form action="" method="get">
                    <div class="input-group  input-group-lg mb-3 ">
                        <input type="search" name="busca" id="busca" placeholder="pesquisar" class="form-control  form-control-lg">

                        <button class="btn btn-outline-secondary pesquisabtn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>

                    </div>


                </form>

            </article>


        </section>
        <section class="filtros align-items-center  mb-3">
            <article class="container col-auto mb-3">
                <form action="" class=" row
                                             g-3
                                            justify-content-between
                                            align-items-center " method="get">
                    <div class="col-auto form-floating">
                        <select name="especialista" class="form-select  form-select-lg my-1 mx-1 mb-3 " id="especialista">
                            <option value="">Qualquer Especialista</option>
                        </select>
                        <label for="especialista" class="form-label">
                            Tipo de Especialista
                        </label>
                    </div>
                    <div class="col-auto form-floating">
                        <select name="preco" id="preco" class="form-select  form-select-lg my-1 mx-1 mb-3 ">
                            <option value="">Qualquer valor</option>
                        </select>
                        <label for="preco" class="form-label">
                            Valor da sessão
                        </label>
                    </div>
                </form>
            </article>
        </section>

        <section class="container">

            <div class="card-psicologo 
            d-flex flex-row 
            flex-wrap  
            align-items-center
            justify-content-around">
                <?php for ($i = 0; $i <= 6; $i++) { ?>
                    <!-- Inicio do card -->
                    <div class="card-container col-auto">
                        <article class="exibir-psicologo my-3 py-2  tamanho ">
                            <div class="d-flex d-flex-row
                                        g-3
                                        quebra
                                        justify-content-around
                                        align-items-center">
                                <div class="espaco">
                                    <ul class="esconder-lista ">
                                        <li>
                                            <ul class="esconder-lista d-flex d-flex-row
                                                        g-3
                                                        justify-content-center
                                                        align-items-center">
                                                <li>
                                                    <p class="perfil-foto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                        </svg>
                                                        <img src="" alt="">
                                                    </p>
                                                </li>
                                                <li>
                                                    <ul class="nome-preco esconder-lista">
                                                        <li>
                                                            <p>Bar da Lora</p>
                                                        </li>
                                                        <li>
                                                            <p>Especialidade</p>
                                                        </li>
                                                        <li>
                                                            <p>Preco</p>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="descricao esconder-lista">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsa officia officiis sunt aperiam dolores eligendi iusto adipisci ea, dolore quam cum tenetur, possimus porro similique quis dolor amet ullam!</p>
                                        </li>
                                        <li>
                                            <h2>Plataformas:</h2>
                                            <ul class="esconder-lista  d-flex d-flex-row
                                                        my-3
                                                        g-3
                                                        justify-content-around
                                                        align-items-center">
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
                                            <a class="horariosConsultas btn">
                                                <i class="bi bi-calendar2-plus"></i> Agendar Consulta
                                            </a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="agenda p-3 m-3 align-self-start ">
                                    <h2>Horarios Disponiveis <i class="bi bi-alarm"></i></h2>
                                    <div class="calendario">
                                        <table class="table  caption-top table-responsive   text-center">
                                            <caption class="text-center"><b><i class="bi bi-calendar"></i> Novembro</b></caption>
                                            <thead>
                                                <div class="grid grid-cols-4 bg-purple-100 justify-center content-center w-full sticky top-0" id="date-container-<?= $profissional['id'] ?>">
                                                </div>
                                            </thead>
                                            <tbody>
                                            <div id="horarios-<?=$profissional['id']?>" class="grid grid-cols-4 w-full max-h-52 overflow-y-scroll">
                    </div>
                                            </tbody>

                                    </div>

                                    </table>

                                    <div class="d-flex my-3 justify-content-around ">
                                        <button class="  rounded-md  my-3 px-3 py-2 btn anterior-button" data-profissional-id="<?= $profissional['id'] ?>">Anterior</button>
                                        <button class=" rounded-md  my-3 px-3 py-2 btn proximo-button" data-profissional-id="<?= $profissional['id'] ?>">Próximo</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </article>
            </div>
            <!-- Fim do card -->
        <?php } ?>



        </div>
        </section>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="js/agendamento.js"></script>
    <script src="js/card-agendamento.js"></script>

</body>

</html>