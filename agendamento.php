<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | Psidevs</title>

    <link rel="stylesheet" href="css/dist/build.css">
    <link rel="stylesheet" href="css/estiloagendamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <main>
        <section class="destaque-agendamento flex-itens-baseline">
            <p>
                <picture>
                    <source media="(min-width: 1100px)" srcset="assets/ligadevs.svg" />
                    <img src="" alt="">
                </picture>
            </p>
            <article>
                <h2 class="text-center">Encontre um Especialista</h2>
                <form action="" method="get">
                    <label for="busca"></label>
                    <input type="search" name="busca" id="busca" placeholder="pesquisar">
                    <button type="submit" name="pesquisar"><i class="bi bi-search"></i></button>
                </form>
            </article>
            <p>
                <picture>

                    <source media="(min-width: 1100px)" srcset="assets/ligacao-pesquisa.svg" /><img src="" alt="">
                </picture>
            </p>
        </section>
        <section class="filtros">
            <form action="" method="get">
                <div>
                    <p>Tipo de Especialista</p>
                    <select name="especialista" class="form-select form-select-lg mb-3" id="especialista">
                        <option value="">Todos</option>
                    </select>
                </div>
            </form>

            <form action="" method="get">
                <div>
                    <p>Valor da sessão</p>
                    <select name="preco" id="preco" class="form-select form-select-lg mb-3">
                        <option value="">Qualquer valor</option>
                    </select>
                </div>
            </form>
        </section>

        <section class="container">
            <div class="card-psicologo">
                <!-- Inicio do card -->
                <article class="exibir-psicologo d-md-flex justify-content-evenly gap-3">
                    <div class="d-md-flex gap-5">
                        <div>
                            <div class="d-md-flex justify-content-evenly align-items-center perfil">
                                <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPORoC7j6v6eU8dw_jar82h7_bn_gkcPC9Kjxjj8Y4&s" alt=""></p>
                                <div class="nome-preco">
                                    <h3> Bar da Lora</h3>
                                    <p><b>Preco</b></p>
                                </div>
                            </div>
                            <div class="descricao">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsa officia officiis sunt aperiam dolores eligendi iusto adipisci ea, dolore quam cum tenetur, possimus porro similique quis dolor amet ullam!</p>
                            </div>
                            <h2>Plataformas:</h2>
                            <div>
                                <p class="d-flex icones "><img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" alt="">
                                <img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" alt="">
                                <img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" alt=""></p>
                            </div>
                        </div>
                        <div class="agenda">
                            <h2>Horarios Disponiveis</h2>
                        </div>
                    </div>
                </article>
                <!-- Fim do card -->
            </div>
        </section>

    </main>





    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>