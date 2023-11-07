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
                    <div class="p-8">
                        <div class="p-4 m-1">
                            <h2 class=" text-sky-800 font-sans text-2xl font-medium mb-2">Nova senha</h2>
                            <p>Você está definindo sua nova senha</p>
                        </div>

                        <div class="px-4">
                            <div class="relative mt-4">
                                <input type="text" id="nova-senha" placeholder="Nova senha" placeholder="Confirmar Senha" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="relative mt-4">
                                <input type="text" id="confirmar-senha" placeholder="Confirmar Senha" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="mb-6 mt-6 text-center">
                                <button type="submit" style="background: rgb(102,124,187);
                                    background: linear-gradient(270deg, rgba(102,124,187,0.8911939775910365) 0%, rgba(90,155,249,1) 25%, rgba(118,174,226,1) 79%, rgba(163,210,253,1) 99%);" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-28 py-2.5 text-center">Enviar</button>
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