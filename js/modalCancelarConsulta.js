
document.querySelectorAll("button[name='cancelar']").forEach(function(button) {
  button.addEventListener("click", function(event) {
    event.preventDefault(); // Impede o envio do formulário
    let idConsulta = button.getAttribute("data-id");

    // Busque os detalhes da consulta com base no ID
    let consulta = consultas.find(function(consulta) {
      return consulta.id === idConsulta;
    });
    // Verifique se a consulta foi encontrada
    if (consulta) {
      // Aqui você tem os detalhes da consulta, como nome, valor e data
      let nomeConsulta = consulta.nome;
      let valorConsulta = consulta.valor;
      let dataConsulta = consulta.data.date;
      let idConsulta = consulta.id;

      const profissionalConsulta = document.getElementById("profissionalConsulta");
      const valorConsultaElement = document.getElementById("valorConsulta");
      const dataConsultaElement = document.getElementById("dataConsulta");
      const idConsultaInput = document.getElementById("idConsulta");
      profissionalConsulta.innerHTML = nomeConsulta;
      valorConsultaElement.innerHTML = valorConsulta;
      dataConsultaElement.innerHTML = formataData(dataConsulta);
      idConsultaInput.value = idConsulta;
    }
  });
});

function formataData(data) {
  const dataFormatada = new Date(data);
  const dia = dataFormatada.getDate().toString().padStart(2, '0');
  const mes = (dataFormatada.getMonth() + 1).toString().padStart(2, '0');
  const ano = dataFormatada.getFullYear();
  const hora = dataFormatada.getHours().toString().padStart(2, '0');
  const minuto = dataFormatada.getMinutes().toString().padStart(2, '0');
  return `${dia}/${mes}/${ano} ${hora}:${minuto}`;
}

document.getElementById("NaoCancelarConsulta").addEventListener("click", function() {
  let modal = document.getElementById("modalCancelarConsulta");
  modal.close();
});