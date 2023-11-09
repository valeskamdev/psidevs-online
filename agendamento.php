<?php
ob_start();

use Psidevs\Entity\Cliente;
use Psidevs\Entity\Consulta;
use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Entity\Disponibilidade;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;
use Psidevs\Repository\QueryBuilderProfissinal;

require_once "vendor/autoload.php";

$verificaLogin = new ControleDeAcesso();
$verificaLogin->verificaAcesso();
$verificaLogin->verificaAcessoCliente();

$entityManager        = EntityManagerCreator::createEntityManager();

$metadataProfissional = $entityManager->getClassMetadata(Profissional::class);
$profissionalRepository = new QueryBuilderProfissinal($entityManager, $metadataProfissional);
$dadosDeProfissionais = $profissionalRepository->buscarTodos();

$metadataDisponibilidade = $entityManager->getClassMetadata(Disponibilidade::class);
$disponibilidadeRepository = new QueryBuilderProfissinal($entityManager, $metadataDisponibilidade);

?>
  <!doctype html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/dist/build.css">
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    </script>
    <title>Document</title>
  </head>
  <body>
  <div class='flex items-center justify-center min-h-screen bg-blue-300'>
    <div class='w-7/12 mx-20 p-5 bg-white rounded-lg shadow-xl'>
      <div class=''>
        <h1 class="text-2xl text-center mb-5">Encotre Psicólogos</h1>
        <a href="src/views/index.php" class="text-2xl text-blue-700 underline">Minha Conta</a>
        <div class="flex justify-center items-center flex-wrap">

            <?php foreach ($dadosDeProfissionais as $profissional) :
                $idProfissional = $profissional['id'];
                $disponibilidades = $disponibilidadeRepository->buscaDisponibilidadesAgendamento($idProfissional);

                // Filtra as disponibilidades para que apenas as que possuem horaInicio e horaTermino sejam exibidas
                if(empty($disponibilidades) ) {
                    continue;
                }

                $disponibilidadesPorProfissional[$idProfissional] = $disponibilidades;
                ?>
              <article class="group w-full bg-slate-200 m-5">
                <img
                  alt="imagem"
                  src="assets/foto_perfil/<?=$profissional['foto']?>?>"
                  class="avatar"
                />
                <div class="flex flex-wrap">
                  <div class="p-4 flex flex-col justify-center">
                    <h2 class="text-lg font-medium text-gray-900"><?=$profissional['nome']?></h2>
                    <p>CRP: <?=$profissional['registroCRP']?> | <span>  <?=Utilitarios::primeriaLetraMaiscula($profissional['regiao'])?></span></p>
                    <span><?=$profissional['especialidade']?></span> <br>
                    <span><?=Utilitarios::formataPreco($profissional['valorConsulta'])?> / 40 MIN</span>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500"><?=$profissional['descricao']?></p>
                  </div>

                  <div class="w-[220px] text-xs flex flex-col items-center m-3">
                    <div class="flex flex-col justify-start overflow-auto rounded-lg w-[180px] bg-slate-100 mb-2">
                      <div class="grid grid-cols-4 bg-purple-100 justify-center content-center w-full sticky top-0" id="date-container-<?=$profissional['id']?>">
                      </div>
                      <div id="horarios-<?=$profissional['id']?>" class="grid grid-cols-4 w-full max-h-52 overflow-y-scroll">
                      </div>
                    </div>
                    <div class="flex justify-between w-full">
                      <button type="button" class="bg-blue-800 text-white rounded-md px-3 py-2 anterior-button" data-profissional-id="<?=$profissional['id']?>">Anterior</button>
                      <button type="button" class="bg-blue-800 text-white rounded-md px-3 py-2 proximo-button" data-profissional-id="<?=$profissional['id']?>">Próximo</button>
                    </div>
                  </div>
                </div>
              </article>
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                  const idProfissional = "<?php echo $profissional['id']; ?>";
                  const disponibilidades = <?php echo json_encode($disponibilidadesPorProfissional[$idProfissional]); ?>;

                  const daysOfWeek = {
                    "Dom": "Sunday",
                    "Seg": "Monday",
                    "Ter": "Tuesday",
                    "Qua": "Wednesday",
                    "Qui": "Thursday",
                    "Sex": "Friday",
                    "Sab": "Saturday"
                  };

                  const currentDate = new Date();
                  const dateContainer = document.getElementById("date-container-<?=$profissional['id']?>");
                  const horariosContainer = document.getElementById("horarios-<?=$profissional['id']?>");
                  const anteriorButton = document.querySelector("button.anterior-button[data-profissional-id='<?=$profissional['id']?>']");
                  const proximoButton = document.querySelector("button.proximo-button[data-profissional-id='<?=$profissional['id']?>']");

                  function formatHour(hour) {
                    return hour.substring(0, 5);
                  }

                  function calculateMaxHorarios() {
                    return disponibilidades.reduce((max, disponibilidade) => {
                      if (disponibilidade.horaInicio && disponibilidade.horaTermino) {
                        const start = new Date();
                        start.setHours(parseInt(disponibilidade.horaInicio.split(":")[0], 10));
                        start.setMinutes(parseInt(disponibilidade.horaInicio.split(":")[1], 10));

                        const end = new Date();
                        end.setHours(parseInt(disponibilidade.horaTermino.split(":")[0], 10));
                        end.setMinutes(parseInt(disponibilidade.horaTermino.split(":")[1], 10));

                        const diffInMinutes = (end - start) / 1000 / 60;
                        return Math.max(max, diffInMinutes / 30);
                      }
                      return max;
                    }, 0);
                  }

                  function updateHorariosByDay() {
                    dateContainer.innerHTML = "";
                    horariosContainer.innerHTML = "";

                    const maxHorarios = calculateMaxHorarios();
                    const hoje = new Date(); // Data de hoje

                    for (let i = 0; i < 4; i++) {
                      let nextDay = Object.keys(daysOfWeek)[currentDate.getDay()];
                      let disponibilidade = disponibilidades.find(item => item.diaSemana === nextDay);

                      dateContainer.innerHTML += `
        <div class="flex items-center p-1 col-span-1">
            <div class="text-center w-full">
                <p class="text-purple-900 text-sm">${nextDay}</p>
                <p class="text-purple-900 font-bold">${currentDate.toLocaleString('pt-BR', { month: 'short' })}</p>
                <p class="text-purple-900 font-bold">${currentDate.getDate()}</p>
            </div>
        </div>
    `;

                      horariosContainer.innerHTML += `
        <div class="col-span-1">
            ${disponibilidade && disponibilidade.horaInicio && disponibilidade.horaTermino ? (
                        Array.from({ length: maxHorarios }, (_, index) => {
                          if (disponibilidade.horaInicio && disponibilidade.horaTermino) {
                            let startTime = new Date();
                            startTime.setHours(parseInt(disponibilidade.horaInicio.split(":")[0], 10));
                            startTime.setMinutes(parseInt(disponibilidade.horaInicio.split(":")[1], 10));
                            startTime.setMinutes(startTime.getMinutes() + index * 30);

                            if (hoje > currentDate) {
                              return `
                             <div class=" text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</div>
                            `;
                            }
                            if (hoje.getDate() === currentDate.getDate() && startTime.getHours() < hoje.getHours()) {
                              return `
                            <div class="hidden">-</div>
                            `;
                            }

                            if (
                              startTime.getHours() > parseInt(disponibilidade.horaTermino.split(":")[0], 10) ||
                              (startTime.getHours() === parseInt(disponibilidade.horaTermino.split(":")[0], 10) &&
                                startTime.getMinutes() > parseInt(disponibilidade.horaTermino.split(":")[1], 10))
                            ) {
                              return `
                            <div class="hidden">-</div>
                            `;
                            }
                            return `
                        <button
                        onclick="my_modal_1.showModal()"
                        data-dia="${currentDate.getDate()}"
                        data-dia-semana="${nextDay}"
                        data-horario="${formatHour(startTime.toTimeString())}"
                        data-mes="${currentDate.getMonth() + 1}"
                        class="text-center py-2 px-0.5 border border-gray-300 cursor-pointer text-slate-700 m-1 hover:bg-blue-100">
                            ${formatHour(startTime.toTimeString())}
                        </button>
                        `;
                          } else {
                            return `<div class="text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</div>`;
                          }
                        }).join('')
                      ) : (
                        Array.from({ length: maxHorarios }, () => {
                          return `<div class="text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</div>`;
                        }).join('')
                      )}
        </div>
    `;
                      currentDate.setDate(currentDate.getDate() + 1);
                    }
                  }
                  anteriorButton.addEventListener("click", () => {
                    currentDate.setDate(currentDate.getDate() - 8);
                    updateHorariosByDay();
                  });

                  proximoButton.addEventListener("click", () => {
                    currentDate.setDate(currentDate.getDate());
                    updateHorariosByDay();
                  });

                  // Inicialmente, exiba os horários do dia da semana atual
                  updateHorariosByDay();


                  // Função para exibir o modal com informações
                  function exibirModal(info) {
                    // const modal = document.getElementById("my_modal_1");
                    const modalInfo = document.getElementById("profissional-info");
                    modalInfo.innerHTML = info;
                    // modal.showModal();
                  }

                  // Adicionar eventos de clique aos botões de horário
                  // Depois
                  horariosContainer.addEventListener("click", (event) => {
                    if (event.target.tagName === "BUTTON") {
                      // Obter as informações a partir dos atributos de dados
                      const dia = event.target.getAttribute("data-dia");
                      const diaSemana = event.target.getAttribute("data-dia-semana");
                      const horario = event.target.getAttribute("data-horario");
                      const mes = event.target.getAttribute("data-mes");

                      // Você pode agora utilizar essas informações para preencher o modal
                      const nomeProfissional = "<?=$profissional['nome']?>";
                      const data = `${dia}/${mes}/${currentDate.getFullYear()}`;
                      const hora = `${horario}`;
                      const duracao = "Duração: 40 Minutos";  // Substitua pela duração real
                      const preco = "<?=Utilitarios::formataPreco($profissional['valorConsulta'])?>";
                      const info = `
                                  Profissional: ${nomeProfissional}<br>Data: ${data} ${hora}<br>Duração: ${duracao}<br>Preço: ${preco}
                                `;

                      document.getElementById("idProfissionalInput").value = "<?=$profissional['id']?>";
                      document.getElementById("dataInput").value = data;
                      document.getElementById("horaInput").value = hora;
                      document.getElementById("precoInput").value = preco;
                      exibirModal(info);
                    }
                  });

                  document.getElementById("cancelar").addEventListener("click", function(event) {
                    event.preventDefault();
                    my_modal_1.close();
                  });
                });
              </script>
            <?php endforeach; ?>
            <?php
            if (isset($_POST['agendar'])) {
                $profissional = $entityManager->find(Profissional::class, $_POST['id_profissional']);
                $cliente = $entityManager->find(Cliente::class, $_SESSION['id_cliente']);

                $consulta = new Consulta();
                $consulta->setProfissional($profissional);
                $consulta->setCliente($cliente);
                $consulta->setData(Utilitarios::dataHoraParaBanco($_POST['data'], $_POST['hora']));
                $consulta->setValor(Utilitarios::precoParaBanco($_POST['preco']));
                $consulta->setStatus('agendada');

                $objetoCliente = new ObjetoRepository(
                    $entityManager,
                    $entityManager->getClassMetadata(Consulta::class)
                );
                $objetoCliente->inserir($consulta);
                header('location:src/views/perfil.php?consulta_agendada');
                exit();
            }
            ?>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Verifica se o parâmetro consulta_apagada está presente na URL
  $consultaApagadaParam = isset($_GET["consulta_agendada"]) ?? null;

  if ($consultaApagadaParam) {
      echo '
   <div id="alertConsultaCancelada" class="alert flex animate-fade-down animate-delay-400 animate-once flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 max-w-sm absolute top-[84px] right-7 z-50 " role="alert">
  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
               viewBox="0 0 20 20"
               class="h-6 w-6">
						<path fill-rule="evenodd"
                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                  clip-rule="evenodd"></path>
					</svg>
				</span>
  </div>
  <div class="alert-content ml-4">
    <div class="alert-title font-semibold text-lg text-green-800">
      Sucesso!
    </div>
    <div class="alert-description text-sm text-green-600">
      Sua consulta foi agandada com sucesso.
    </div>
  </div>
</div>
   ';

      echo '<script>
            // Oculta o alerta após 5 segundos
            setTimeout(function() {
              document.getElementById("alertConsultaCancelada").classList.remove("flex");
             document.getElementById("alertConsultaCancelada").classList.add("hidden");
            }, 5000);
          </script>';
  }

  ?>

  <dialog id="my_modal_1" class="modal">
    <div class="modal-box  bg-slate-100">
      <h3 class="font-bold text-lg text-slate-900">Informações da Consulta</h3>
      <form action="" method="post">
        <input type="hidden" name="id_profissional" id="idProfissionalInput" value="">
        <input type="hidden" name="data" id="dataInput" value="">
        <input type="hidden" name="hora" id="horaInput" value="">
        <input type="hidden" name="preco" id="precoInput" value="">
        <div class="py-4 text-slate-600" id="profissional-info">
          <!-- Aqui as informações da consulta serão preenchidas dinamicamente. -->
        </div>
        <div class="modal-action">
          <button name="agendar" id="agendar" class="btn bg-green-300 border-0 text-slate-900 hover:bg-green-500">Agendar</button>
          <button id="cancelar" class="btn bg-red-300 border-0 text-slate-900 hover:bg-red-500">Cancelar</button>
        </div>
      </form>
    </div>
  </dialog>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <link
    rel="stylesheet"
    href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
  />
  </body>
  </html>
<?php
ob_end_flush();
?>