    
        <!-- hide -->
        <div id="fade" class="hide">
        </div> 

            <div id="modal" class ="modal hide">
                    <!-- Modal cabeçalho -->
                    <div class="modal-header flex items-start justify-center p-6 border-b rounded-t dark:border-gray-600 sm:text-lg">
                        <div class="mx-auto text-center lg:p-3" >
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white lg:text-3xl">
                                Como você quer entrar na sua conta Psidevs?
                            </h3>
                            <p class="text-lg leading-relaxed text-gray-500 dark:text-gray-400 lg:text-2xl">
                                Selecione a opção que deseja criar a sua conta
                            </p>
                        </div>
                        <button type="button" id="close" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <!-- <span class="sr-only">Close modal</span> -->
                        </button>
                    </div>

                    <!-- Modal conteudo -->
                    <div class="flex flex-col p-6 space-y-6 w-11/12 h-3/5 mt-2 sm:mb-10 content-center justify-items-center mx-auto lg:mt-6 sm:w-5/6 lg:h-4/6 ">
                        <button class= "h-3/6">
                            <a href="login.php?" class="flex items-center p-6 text-base font-bold text-gray-900 rounded-lg border border-gray-200 dark:border-gray-600 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white h-full">
                                <img src="img/cliente-icon.svg" class="w-10 mr-4"  alt="">
                                <div class="text-left">
                                    <span class="flex-1 text-xl lg:text-2xl">Cliente   |  Login</span>
                                    <p class="text-lg leading-relaxed text-gray-400 dark:text-gray-400 lg:text-xl">
                                    Quero fazer sessões de terapias e ver conteúdos sobre saúde emocional
                                    </p>
                                </div>
                            </a>
                        </button>
                        <button class= "h-3/6">
                            <a href="login.php?" class="flex items-center p-6 text-base font-bold text-gray-900 rounded-lg border border-gray-200 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white h-full">
                                <img src="img/profissional-icon.svg" class="w-10 mr-4"  alt="">
                                <div class="text-left">
                                    <span class="flex-1 text-xl lg:text-2xl">Profissional   |  Login</span>
                                    <p class="text-lg leading-relaxed text-gray-400 dark:text-gray-400 lg:text-xl">
                                    Quero atender pacientes online e fazer gestão da minha carreira
                                    </p>
                                </div>
                            </a>
                        </button>
                    </div>

            </div>
