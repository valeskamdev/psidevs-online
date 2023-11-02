               
        <!-- hide -->
<div id="fade-cadastro" class="hide">
</div> 

<!-- Main modal -->
<div id="default-modal-cadastro" tabindex="-1" aria-hidden="true" class="hide fixed top-0 left-0 right-0 z-50 w-full lg:w-[42%] p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-0rem)] max-h-full max-h-ful mx-auto my-4">
    <div class="relative w-full mt-20">
        <div class="modal-estrutura">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4">
                <div class="mx-auto text-center lg:p-3" >
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white lg:text-3xl">
                    Como você quer criar a sua conta no Psidevs?
                    </h3>
                    <p class="text-xl leading-relaxed text-gray-500 dark:text-gray-400 lg:text-2xl">
                        Selecione a opção que deseja criar a sua conta
                    </p>
                </div>
                <button type="button" id="close-cadastro" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <!-- <span class="sr-only">Close modal</span> -->
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6">
                <ul class="my-4 space-y-3">
                    <li >
                        <button class= "h-3/6 w-full">
                            <a href="cadastro-cliente.php?" class="flex items-center p-6 text-base  text-gray-700 rounded-lg border border-gray-200 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white h-full">
                                <img src="img/cliente-icon.svg" class="w-10 mr-4" alt="">
                                <div class="text-left font-ubuntu font-normal">
                                <span class="flex-1 text-2xl font-semibold lg:text-3xl">Cliente   |  Cadastro</span>
                                    <p class="text-xl leading-relaxed text-gray-400 dark:text-gray-400 lg:text-2xl">
                                    Quero fazer sessões de terapias e ver conteúdos sobre saúde emocional
                                    </p>
                                </div>
                            </a>
                        </button>
                    </li>
                    <li>
                        <button class= "h-3/6 w-full">
                            <a href="cadastro-profissional.php?" class="flex items-center p-6 text-base text-gray-700 rounded-lg border border-gray-200 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white h-full">
                                <img src="img/profissional-icon.svg" class="w-10 mr-4"  alt="">
                                <div class="text-left font-ubuntu font-normal">
                                <span class="flex-1 text-2xl font-semibold lg:text-3xl">Profissional   |  Cadastro</span>
                                    <p class="text-xl leading-relaxed text-gray-400 dark:text-gray-400 lg:text-2xl">
                                    Quero atender pacientes online e fazer gestão da minha carreira
                                    </p>
                                </div>
                            </a>
                        </button>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>