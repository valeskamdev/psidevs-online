<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="css/dist/build.css">
    <link rel="stylesheet" href="css/cadprof.css">
</head>

<body class="">

    <div class="min-h-screen p-6 bg-fundo-neutro bg-cover flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto flex items-center justify-center">
            <div class="flex ">
                <div class="text-gray-600 bg-fundo-azul rounded-l-lg bg-cover p-6 w-1/2">                    
                    <img src="img/character-login.png" class="w-50" alt="">
                </div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 w-1/2">
                    <div class="grid grid-cols-6 gap-4 text-sm lg:grid-cols-3 p-6">
                        <div class="sm:col-span-6">
                            <div class="flex items-center justify-center mb-6">
                                <img class="h-auto max-w-xs" src="img/login_avatar.png" alt="avatar generico" width="140" height="190">
                            </div>
                            <h2 class="text-center text-sky-800 font-sans text-2xl font-medium">Entre na sua conta!</h2>

                            <form class="px-4">
                                <div class="relative z-0 w-full mt-4 mb-6 group">
                                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">E-mail</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                    <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
                                </div>

                                <div class="flex items-center mt-4 mb-6">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ml-2 text-sm font-light  text-sky-800 dark:text-gray-300">Lembra Senha</label>
                                </div>

                                <div class="mb-6 text-center">
                                    <button type="submit" style="background: rgb(102,124,187);
                                     background: linear-gradient(270deg, rgba(102,124,187,0.8911939775910365) 0%, rgba(90,155,249,1) 25%, rgba(118,174,226,1) 79%, rgba(163,210,253,1) 99%);
                                    /* Outros estilos que você deseja adicionar */" class=" text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Criar conta</button>
                                </div>

                                                                
                                <div class="flex flex-wrap items-center">
                                    <label for="link-checkbox" class="ml-2 my-2 text-sm font-light text-gray-900 dark:text-gray-300">Esqueceu a senha? <a href="#" class="text-blue-600 font-light">
                                            Redefinir senha</a></label>
                                    <label for="link-checkbox" class="ml-2 text-sm font-light text-gray-900 dark:text-gray-300">Não tem conta? <a href="#" class="text-blue-600 font-light">
                                             Crie uma Conta</a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>