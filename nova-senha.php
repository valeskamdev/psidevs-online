<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psidevs | Recuperar Senha</title>
    <link rel="stylesheet" href="css/dist/build.css">
    <link rel="stylesheet" href="css/cadprof.css">
</head>

<body class="">

    <div class="min-h-screen p-6 bg-fundo-neutro bg-cover flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto flex items-center justify-center">
            <div class="flex">

                <!-- Lado Direito -->
                <form class="conteudo-direito-senha">
                    <div class="p-6">
                        <div class="p-4 m-4">
                            <h2 class=" text-sky-800 font-sans text-2xl font-medium mb-2">Nova senha</h2>
                            <p>Você está definindo sua nova senha</p>
                        </div>

                        <div class="px-4">
                            <div class="relative mt-4">
                                <label for="" class="sr-only"> Nova Senha </label>

                                <input
                                    type="text"
                                    id="nova-senha"
                                    placeholder="Nova senha"
                                    class=" mt-7 w-full rounded-md border-gray-200 pe-10 shadow-sm sm:text-sm"/>
                            </div>

                            <div class="">
                                <label for="" class="sr-only"> Confirme Senha </label>

                                <input
                                    type="text"
                                    id="confirme-senha"
                                    placeholder="Confirme senha"
                                    class=" mt-5 w-full rounded-md border-gray-200 pe-10 shadow-sm sm:text-sm"/>
                            </div>

                            <div class="mb-6 mt-6 text-center">
                                <button type="submit" name="enviar-nova-senha" style="background: rgb(102,124,187);
                                    background: linear-gradient(270deg, rgba(102,124,187,0.8911939775910365) 0%, rgba(90,155,249,1) 25%, rgba(118,174,226,1) 79%, rgba(163,210,253,1) 99%);" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enviar</button>
                            </div>      
                                                        
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>