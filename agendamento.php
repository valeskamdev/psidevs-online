<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | Psidevs</title>

    <link rel="stylesheet" href="css/dist/build.css">
    <link rel="stylesheet" href="css/estiloagendamento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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
                    <input type="search" name="busca" id="busca" placeholder="pesquisar">
                    <button type="submit" name="pesquisar">Pesquisar</button>
                </form>
            </article>
            <p>
                <picture>

                    <source media="(min-width: 1100px)" srcset="assets/ligacao-pesquisa.svg" /><img src="" alt="">
                </picture>
            </p>
        </section>
        <section class="filtros">
            <form action="" method="get" >
                <div>
                    <p>Tipo de Especialista</p>
                    <select name="especialista" class="form-select form-select-lg mb-3" id="especialista">
                        <option value="">Todos</option>
                    </select>
                </div>


                <div>
                    <p>Valor da sessão</p>
                    <select name="preco" id="preco" class="form-select form-select-lg mb-3">
                        <option value="">Qualquer valor</option>
                    </select>
                </div>
            </form>
        </section>


    </main>





    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>