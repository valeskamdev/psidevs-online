function validatePassword() {
  const passwordInput = document.getElementById("novaSenha");
  const password = passwordInput.value;
  const lengthError = document.getElementById("lengthError");
  const uppercaseError = document.getElementById("uppercaseError");
  const specialCharError = document.getElementById("specialCharError");

  let isValid = true;

  if (password.length < 6) {
    lengthError.textContent = "Insira no mínimo 6 caracteres";
    lengthError.classList.add("text-red-500");
    passwordInput.classList.add("border-2", "border-rose-600");
    isValid = false;
  } else {
    lengthError.textContent = "";
    lengthError.classList.remove("text-red-500");
    passwordInput.classList.remove("border-2", "border-rose-600");
  }

  if (!/[A-Z]/.test(password)) {
    uppercaseError.textContent = "A senha deve conter uma letra maiúscula";
    uppercaseError.classList.add("text-red-500");
    passwordInput.classList.add("border-2", "border-rose-600");
    isValid = false;
  } else {
    uppercaseError.textContent = "";
    uppercaseError.classList.remove("text-red-500");
    passwordInput.classList.remove("border-2", "border-rose-600");
  }

  if (!/[!@#$%^&*]/.test(password)) {
    specialCharError.textContent = "A senha deve conter um caractere especial";
    specialCharError.classList.add("text-red-500");
    passwordInput.classList.add("border-2", "border-rose-600");
    isValid = false;
  } else {
    specialCharError.textContent = "";
    specialCharError.classList.remove("text-red-500");
    passwordInput.classList.remove("border-2", "border-rose-600");
  }
  return isValid;
}

function validateConfirmPassword() {
  const passwordInput = document.getElementById("novaSenha");
  const confirmPasswordInput = document.getElementById("confirmarSenha");
  const password = passwordInput.value;
  const confirmPassword = confirmPasswordInput.value;
  const errorConfirmaSenha = document.getElementById("errorConfirmaSenha");

  let isValid = true;

  if (confirmPassword.length > 0 && password !== confirmPassword) {
    confirmPasswordInput.classList.add("border-2", "border-rose-600");
    errorConfirmaSenha.textContent = "As senhas não coincidem";
    errorConfirmaSenha.classList.add("text-red-500");
    isValid = false;
  } else {
    errorConfirmaSenha.textContent = "";
    errorConfirmaSenha.classList.remove("text-red-500");
    confirmPasswordInput.classList.remove("border-2", "border-rose-600");
  }
}

document.getElementById('alterarSenha').addEventListener('click', function (event) {
  event.preventDefault();
});

document.getElementById('myForm').addEventListener('submit', async function (event) {
  event.preventDefault(); // Impede o envio do formulário
});

document.getElementById('salvarSenha').addEventListener('click', async function () {

  const senhaAtualInput = document.getElementById('senhaAtual');
  const novaSenhaInput = document.getElementById('novaSenha');
  const confirmarSenhaInput = document.getElementById('confirmarSenha');

  // const mensagemSenhaAtual = document.getElementById("errorInModal");
  const inputsVazios = document.querySelectorAll('.inputVazio');
  const inputsSenhaNovaEConfirma = document.querySelectorAll('.inputSenha');

  const senhaAtual = document.getElementById('senhaAtual').value;
  const novaSenha = document.getElementById('novaSenha').value;
  const confirmarSenha = document.getElementById('confirmarSenha').value;

  const errorSenhaAtual = document.getElementById('errorSenhaAtual');
  const errorNovaSenha = document.getElementById('errorNovaSenha');
  const errorConfirmaSenha = document.getElementById('errorConfirmaSenha');

  if (senhaAtual === '' && novaSenha === '' && confirmarSenha === '') {
    errorSenhaAtual.textContent = 'Por favor, preencha o campo "Senha atual".';
    errorSenhaAtual.classList.add('text-red-500');
    senhaAtualInput.classList.add('border-2', 'border-rose-600');

    errorNovaSenha.textContent = 'Por favor, preencha o campo "Nova Senha".';
    errorNovaSenha.classList.add('text-red-500');
    novaSenhaInput.classList.add('border-2', 'border-rose-600');

    errorConfirmaSenha.textContent = 'Por favor, preencha o campo "Confirmar Nova Senha".';
    errorConfirmaSenha.classList.add('text-red-500');
    confirmarSenhaInput.classList.add('border-2', 'border-rose-600');

    novaSenhaInput.addEventListener('input', function () {
      errorNovaSenha.textContent = '';
      errorNovaSenha.classList.remove('text-red-500');
      novaSenhaInput.classList.remove('border-2', 'border-rose-600');
    });

    senhaAtualInput.addEventListener('input', function () {
      errorSenhaAtual.textContent = '';
      errorSenhaAtual.classList.remove('text-red-500');
      senhaAtualInput.classList.remove('border-2', 'border-rose-600');
    });

    confirmarSenhaInput.addEventListener('input', function () {
      errorConfirmaSenha.textContent = '';
      errorConfirmaSenha.classList.remove('text-red-500');
      confirmarSenhaInput.classList.remove('border-2', 'border-rose-600');
    });
    return;
  }

  if (senhaAtual === '') {
    errorSenhaAtual.textContent = 'Por favor, preencha o campo "Senha atual".';
    errorSenhaAtual.classList.add('text-red-500');
    senhaAtualInput.classList.add('border-2', 'border-rose-600');

    senhaAtualInput.addEventListener('input', function () {
      errorSenhaAtual.textContent = '';
      errorSenhaAtual.classList.remove('text-red-500');
      senhaAtualInput.classList.remove('border-2', 'border-rose-600');
    });
    return;
  }

  if (novaSenha === '') {
    errorNovaSenha.textContent = 'Por favor, preencha o campo "Nova Senha".';
    errorNovaSenha.classList.add('text-red-500');
    novaSenhaInput.classList.add('border-2', 'border-rose-600');

    novaSenhaInput.addEventListener('input', function () {
      errorNovaSenha.textContent = '';
      errorNovaSenha.classList.remove('text-red-500');
      novaSenhaInput.classList.remove('border-2', 'border-rose-600');
    });
    return;
  }

  if (confirmarSenha === '') {
    errorConfirmaSenha.textContent = 'Por favor, preencha o campo "Confirmar Nova Senha".';
    errorConfirmaSenha.classList.add('text-red-500');
    confirmarSenhaInput.classList.add('border-2', 'border-rose-600');

    confirmarSenhaInput.addEventListener('input', function () {
      errorConfirmaSenha.textContent = '';
      errorConfirmaSenha.classList.remove('text-red-500');
      confirmarSenhaInput.classList.remove('border-2', 'border-rose-600');
    });
    return;
  }

  if (!validatePassword()) {
    novaSenhaInput.classList.add('border-2', 'border-rose-600');
    return;
  }

  if (novaSenha !== confirmarSenha) {
    errorConfirmaSenha.textContent = 'As senhas não coincidem';
    errorConfirmaSenha.classList.add('text-red-500');
    confirmarSenhaInput.classList.add('border-2', 'border-rose-600');

    confirmarSenhaInput.addEventListener('input', function () {
      errorConfirmaSenha.textContent = '';
      errorConfirmaSenha.classList.remove('text-red-500');
      confirmarSenhaInput.classList.remove('border-2', 'border-rose-600');
    });
    return; // Impede o fechamento do modal
  }

  try {
    // Realize uma requisição Ajax para verificar a senha atual no servidor
    const response = await fetch('../../inc/processa-senha.php', {
      method: 'POST',
      body: JSON.stringify({ senha_atual: senhaAtual, nova_senha: novaSenha, confirmar_senha: confirmarSenha }),
      headers: {
        'Content-Type': 'application/json',
      },
    });

    if (response.ok) {
      const data = await response.json();

      if (data.senha_correta && data.match) {
        // Senha correta e a nova senha coincide com a confirmação, você pode fechar o modal
        let modal = document.getElementById('modalSenha');
        window.location.href = 'perfil.php?senha_alterada';
        modal.close();
      } else if (data.senha_correta && !data.match) {
        // Senha correta, mas a nova senha não coincide com a confirmação
        errorConfirmaSenha.textContent = 'As senhas não coincidem';
      } else {
        // Senha atual incorreta
        errorSenhaAtual.textContent = 'Senha incorreta';
        errorSenhaAtual.classList.add('text-red-500');
        senhaAtualInput.classList.add('border-2', 'border-rose-600');

        senhaAtualInput.addEventListener('input', function () {
          errorSenhaAtual.textContent = '';
          errorSenhaAtual.classList.remove('text-red-500');
          senhaAtualInput.classList.remove('border-2', 'border-rose-600');
        });
      }
    } else {
      // Lidar com erro na resposta
      console.error('Erro na resposta:', response.status);
    }
  } catch (error) {
    // Lidar com erros na solicitação Ajax
    console.error('Erro ao verificar a senha:', error);
  }

});

document.getElementById("naoSalvarSenha").addEventListener("click", function() {
  let modal = document.getElementById("modalSenha");
  modal.close();
});