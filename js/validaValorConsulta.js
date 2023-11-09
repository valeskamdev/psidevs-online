document.addEventListener('DOMContentLoaded', function () {
  const valorInput = document.getElementById("valorConsulta");
  const mensagemErro = document.getElementById("mensagemErro");

  function validarValor() {
    const valorTexto = valorInput.value.replace(",", ".");
    const valor = parseFloat(valorTexto);

    if (isNaN(valor) || valor < 40) {
      mensagemErro.innerHTML = "Por favor, insira um valor válido e acima de R$40,00.";
    } else if (valor % 1 !== 0) {
      mensagemErro.innerHTML = "Por favor, insira um valor inteiro.";
    } else {
      mensagemErro.innerHTML = "";
    }
  }

  valorInput.addEventListener("input", validarValor);
  document.getElementById("formDadosProfissional").addEventListener("submit", function (event) {
    validarValor(); // Chama a função de validação antes do envio do formulário
    if (mensagemErro.innerHTML !== "") {
      event.preventDefault(); // Impede o envio do formulário se houver erro
    }
  });
});
