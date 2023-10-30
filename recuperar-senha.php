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
                <!-- Lado Esquerdo -->
                <div class="mostrar-form text-gray-600 bg-fundo-azul rounded-l-lg bg-cover p-6 w-1/2  md:block">                    
                    <img src="img/character-esqueceu-senha.png" class="w-50" alt="">
                </div>

                <!-- Lado Direito -->
                <form class="conteudo-direito">
                    <div class="p-6">
                        <div class="p-4 mb10">
                            <h2 class=" text-sky-800 font-sans text-2xl font-medium mb-2">Esqueci minha senha</h2>
                            <p>Informe o seu email para enviarmos o link para redefinir sua senha</p>
                        </div>

                        <div class="px-4">
                            <div class="relative mt-10">
                                <label for="UserEmail" class="sr-only"> Email </label>

                                <input
                                    type="email"
                                    id="UserEmail"
                                    placeholder="E-mail"
                                    class=" mt-10 w-full rounded-md border-gray-200 pe-10 shadow-sm sm:text-sm"/>

                                    <span
                                        class="mt-10 pointer-events-none absolute inset-y-0 end-0 grid w-10 place-content-center text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1644ad" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg>
                                    </span>
                            </div>

                            <div class="mb-6 mt-4 text-center">
                                <button type="submit" style="background: rgb(102,124,187);
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