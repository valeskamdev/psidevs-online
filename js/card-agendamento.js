
document.addEventListener("DOMContentLoaded", function() {
  const idProfissional = "<?php echo $profissional['id']; ?>";
  const disponibilidades = "<?php echo json_encode($disponibilidadesPorProfissional[$idProfissional]); ?>";

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
<tr class="flex items-center p-1 col-span-1">
<td class="text-center w-full">
  <p class="text-purple-900 text-sm">${nextDay}</p>
  <p class="text-purple-900 font-bold">${currentDate.toLocaleString('pt-BR', { month: 'short' })}</p>
  <p class="text-purple-900 font-bold">${currentDate.getDate()}</p>
</td>
</tr>
`;

      horariosContainer.innerHTML += `
<tr class="col-span-1">
${disponibilidade && disponibilidade.horaInicio && disponibilidade.horaTermino ? (
        Array.from({ length: maxHorarios }, (_, index) => {
          if (disponibilidade.horaInicio && disponibilidade.horaTermino) {
            let startTime = new Date();
            startTime.setHours(parseInt(disponibilidade.horaInicio.split(":")[0], 10));
            startTime.setMinutes(parseInt(disponibilidade.horaInicio.split(":")[1], 10));
            startTime.setMinutes(startTime.getMinutes() + index * 30);

            if (hoje > currentDate) {
              return `
               <td class=" text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</td>
              `;
            }
            if (hoje.getDate() === currentDate.getDate() && startTime.getHours() < hoje.getHours()) {
              return `
              <td class="hidden">-</td>
              `;
            }

            if (
              startTime.getHours() > parseInt(disponibilidade.horaTermino.split(":")[0], 10) ||
              (startTime.getHours() === parseInt(disponibilidade.horaTermino.split(":")[0], 10) &&
                startTime.getMinutes() > parseInt(disponibilidade.horaTermino.split(":")[1], 10))
            ) {
              return `
              <td class="hidden">-</td>
              `;
            }
            return `
          <td>
              <button
              onclick="my_modal_1.showModal()"
              data-dia="${currentDate.getDate()}"
              data-dia-semana="${nextDay}"
              data-horario="${formatHour(startTime.toTimeString())}"
              data-mes="${currentDate.getMonth() + 1}"
              class="text-center py-2 px-0.5 border border-gray-300 cursor-pointer text-slate-700 m-1 hover:bg-blue-100">
                  ${formatHour(startTime.toTimeString())}
              </button>
          </td>
          `;
          } else {
            return `<td class="text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</td>`;
          }
        }).join('')
      ) : (
        Array.from({ length: maxHorarios }, () => {
          return `<td class="text-center py-2 bg-gray-200 border border-gray-300 m-1 disabled">-</td>`;
        }).join('')
      )}
</tr>
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
