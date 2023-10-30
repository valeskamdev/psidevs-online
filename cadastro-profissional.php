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
            <div class="flex">
                <div class="mostrar-form  text-gray-600 bg-fundo-azul rounded-l-lg bg-cover p-6 w-1/2  md:block">
                    <img src="img/fundo-profissional.png" class="w-50" alt="">
                </div>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="lg:col-span-3">

                            <h1 class="flex w-[367.298px] h-[68px] flex-col justify-center flex-shrink-0 text-[#152A5C] font-plus-jakarta-sans font-semibold text-3xl leading-[18px]">
                                Bem vindo(a) ao Psidevs!
                            </h1>

                            <p class="flex  w-[359.378px] h-[34px] flex-col justify-center flex-shrink-0 text-[#000] font-plus-jakarta-sans text-base font-normal leading-[18px]">
                                Venha conhecer os nossos serviços.
                            </p>



                            <form class="w-full">
                                <div class="relative z-0 w-full my-3 group mb-6">
                                    <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="text" id="Username" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Nome" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Nome
                                        </span>
                                    </label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="Email" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="email" id="Email" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="E-mail" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            E-mail
                                        </span>
                                    </label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="Senha" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                        <input type="password" id="Senha" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Senha" />
                                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                            Senha
                                        </span>
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lembra Senha</label>
                                </div>


                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <label for="Celular" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                            <input type="tel" id="Celular" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="Celular" />
                                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                Celular
                                            </span>
                                        </label>
                                    </div>

                                    <div class="relative z-0 w-full mb-6 group">
                                        <label for="CPF" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                            <input type="text" id="CPF" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="CPF" />
                                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                CPF
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <label for="CRP" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                                            <input type="text" id="CRP" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0" placeholder="CRP" />
                                            <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                                                CRP
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option>Especialidade</option>
                                        <option value="clinica">Psicologia Clínica</option>
                                        <option value="educacional">Psicologia Educacional</option>
                                        <option value="organizacional">Psicologia Organizacional</option>
                                        <option value="outros">Outras Especialidades</option>
                                    </select>
                                </div>


                                <div class="flex mb-5">
                                    <div class="flex items-center mr-10">
                                        <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feminino</label>
                                    </div>
                                    <div class="flex items-center mr-10">
                                        <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino</label>
                                    </div>
                                    <div class="flex items-center mr-10">
                                        <input checked id="inline-checked-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-checked-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não-binário</label>
                                    </div>
                                </div>
                                <div class="flex items-center mb-5">
                                    <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Li e concordo com os<a href="#" class="underline">
                                            termos e condições.</a>e <a href="" class="underline">Política de privacidade</a>.</label>
                                </div>

                                <div>
                                    <div class="flex justify-center">
                                        <button type="submit" class="text-white bg-gradient-to-r from-[rgba(200,222,255,1)] via-[rgba(136,186,235,1)] to-[rgba(113,173,228,1)] hover:from-[rgba(200,222,255,1)] hover:via-[rgba(136,186,235,1)] hover:to-[rgba(113,173,228,1)] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base sm:text-lg px-12 py-2 text-center dark:from-[rgba(200,222,255,1)] dark:via-[rgba(136,186,235,1)] dark:to-[rgba(113,173,228,1)] dark:hover:from-[rgba(200,222,255,1)] dark:hover:via-[rgba(136,186,235,1)] dark:hover:to-[rgba(113,173,228,1)] dark:focus:ring-blue-800">
                                            Criar conta
                                        </button>
                                    </div>


                                </div>
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
