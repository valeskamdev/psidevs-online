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
                        <div class="mb10">
                            <h2 class=" text-sky-800 font-sans text-2xl font-medium mb-2">Esqueci minha senha</h2>
                            <p>Informe o seu email para enviarmos o link para redefinir sua senha</p>
                        </div>

                        <div class="mb10 relative z-0 w-full mt-9">
                            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                        </div>


                        <div class="mb-6 text-center">
                            <button type="submit" style="background: rgb(102,124,187);
                                background: linear-gradient(270deg, rgba(102,124,187,0.8911939775910365) 0%, rgba(90,155,249,1) 25%, rgba(118,174,226,1) 79%, rgba(163,210,253,1) 99%);
                            /* Outros estilos que você deseja adicionar */" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>