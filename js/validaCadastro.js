document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("formCadastro");
  const submitButton = document.getElementById("criarConta");

  submitButton.addEventListener("click", function(event) {
    event.preventDefault(); // Impede o envio do formulário

    clearErrorMessages(); // Limpe mensagens de erro anteriores

    if (validateForm()) {
      const formData = new FormData(form);

      fetch("../inc/processa-cadastro.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Sucesso, redirecione para a página de login
            window.location.href = "login.php";
          } else {
            // Erros encontrados, exiba as mensagens
            if (data.errors.nome) {
              displayErrorMessage("nome", data.errors.nome);
            }
            if (data.errors.email) {
              displayErrorMessage("email", data.errors.email);
            }
            if (data.errors.senha) {
              displayErrorMessage("senha", data.errors.senha);
            }
            if (data.errors.telefone) {
              displayErrorMessage("telefone", data.errors.telefone);
            }
            if (data.errors.cpf) {
              displayErrorMessage("cpf", data.errors.cpf);
            }
            if (data.errors.crp) {
              displayErrorMessage("crp", data.errors.crp);
            }
            if (data.errors.genero) {
              displayErrorMessage("genero", data.errors.genero);
            }
            if (data.errors.termoCondicao) {
              displayErrorMessage("termoCondicao", data.errors.termoCondicao);
            }
          }
        })
        .catch(error => console.error("Erro na requisição: ", error));
    }
  });

  function clearErrorMessages() {
    const errorElements = document.querySelectorAll('[id^="erro"]');
    errorElements.forEach(element => element.innerHTML = '');

    const inputElements = form.querySelectorAll("input");
    inputElements.forEach(input => {
      input.classList.remove("text-red-500", "border-2", "border-rose-600");
    });
  }

  function displayErrorMessage(fieldId, message) {
    const errorElement = document.getElementById(`erro${fieldId}`);
    if (errorElement) {
      errorElement.innerHTML = message;
      const inputElement = document.getElementById(fieldId);
      inputElement.classList.add("text-red-500", "border-2", "border-rose-600");
    }
  }

  function validateForm() {
    let isValid = true;
    const requiredFields = ["nome", "email", "senha", "telefone", "cpf", "crp", "genero", "termoCondicao"];
    requiredFields.forEach(field => {
      const inputElement = document.getElementById(field);
      if (!inputElement.value) {
        displayErrorMessage(field, `Por favor, preencha o campo "${inputElement.placeholder}".`);
        isValid = false;
      }
    });
    return isValid;
  }
});
