<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroprofissional.css">.
    <title>Cadastro de Profissional - Psidevs</title>
</head>

<style>
     body {
            background: rgb(243, 247, 255);
            background: linear-gradient(239deg, rgba(243, 247, 255, 1) 0%, rgba(201, 224, 245, 1) 80%, rgba(191, 218, 243, 1) 99%);
        }
        
        /* Adicionando o fundo azul */
        .fundo-azul {
            background: rgb(200, 222, 255);
            background: linear-gradient(130deg, rgba(200, 222, 255, 1) 0%, rgba(136, 186, 235, 1) 75%, rgba(127, 181, 233, 1) 80%, rgba(113, 173, 228, 1) 99%);
        }
        button {
            background: rgb(102, 124, 187);
            background: linear-gradient(270deg, rgba(102, 124, 187, 0.8911939775910365) 0%, rgba(90, 155, 249, 1) 25%, rgba(118, 174, 226, 1) 79%, rgba(163, 210, 253, 1) 99%);
        }
    </style>
<body>
    <div class="container">
        <h1>Bem-vindo ao Psidevs</h1>
        <p>Venha conhecer os nossos serviços</p>


        
        
        <form action="processa_cadastro.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>

            <label for="lembrar-senha">Lembrar Senha:</label>
            <input type="checkbox" id="lembrar-senha" name="lembrar-senha"><br>

            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" required><br>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required><br>

            <label for="crp">CRP:</label>
            <input type="text" id="crp" name="crp" required><br>

            <label for="ano-formacao">Ano de Formação:</label>
            <input type="number" id="ano-formacao" name="ano-formacao" required><br>

            <label for="especialidade">Especialidade:</label>
            <select id="especialidade" name="especialidade">
                <option value=""></option>
                <option value="psicologia">Psicologia</option>
                <option value="psiquiatria">Psiquiatria</option>
                <option value="terapia-ocupacional">Terapia Ocupacional</option>
                <!-- Adicione mais opções conforme necessário -->
            </select><br>

            <label>Gênero:</label><br>
            <input type="radio" id="genero-masculino" name="genero" value="masculino">
            <label for="genero-masculino">Masculino</label><br>

            <input type="radio" id="genero-feminino" name="genero" value="feminino">
            <label for="genero-feminino">Feminino</label><br>

            <input type="radio" id="genero-nao-binario" name="genero" value="nao-binario">
            <label for="genero-nao-binario">Não Binário</label><br>

            <label for="termos">Aceitar os <a href="termos.html">Termos e Condições</a>:</label>
            <input type="checkbox" id="termos" name="termos" required><br>

            <label for="politica-privacidade">Aceitar a <a href="politica_privacidade.html">Política de Privacidade</a>:</label>
            <input type="checkbox" id="politica-privacidade" name="politica-privacidade" required><br>

            <button type="submit">Criar Conta</button>
        </form>
    </div>
</body>
</html>
