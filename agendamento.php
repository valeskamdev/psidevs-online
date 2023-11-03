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
                                            align-items-center " 
                    method="get">
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
                                    <img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1.png" alt="">
                                </p>
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