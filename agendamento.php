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
                        <select name="especialista" class="form-select  form-select-lg mb-3" id="especialista">
                            <option value="">Qualquer Especialista</option>
                        </select>
                        <label for="especialista" class="form-label">
                            Tipo de Especialista
                        </label>
                    </div>
                    <div class="col-auto form-floating">
                        <select name="preco" id="preco" class="form-select  form-select-lg mb-3 ">
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
            <div class="card-psicologo">
                <!-- Inicio do card -->
                <article class="exibir-psicologo my-3 py-3 ">
                    <div class="d-flex d-flex-row
                                g-3
                                flex-wrap
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
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPORoC7j6v6eU8dw_jar82h7_bn_gkcPC9Kjxjj8Y4&s" alt="">
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
                                            <button class="btn btn-success">
                                            <i class="bi bi-whatsapp"></i>
                                            </button>
                                        </li>
                                        <li>
                                        
                                            <button class="btn btn-success">
                                                <i class="bi bi-whatsapp"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn btn-success ">
                                                <i class="bi bi-whatsapp"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="agenda p-3 align-self-start">
                            <h2>Horarios Disponiveis</h2>
                            <div class="calendario table-responsive">
                                <table class="table  caption-top">
                                    <caption class="text-center">Novembro</caption>
                                    <thead>
                                
                                        <tr>
                                            <th>Segunda-feira</th>
                                            <th>Terça-feira</th>
                                            <th>Quarta-feira</th>
                                            <th>Quinta-feira</th>
                                            <th>Sexta-feira</th>
                                            <th>Sábado-feira</th>
                                            <th>Domingo-feira</th>
                                        </tr>
                                
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Fim do card -->
            </div>
        </section>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>