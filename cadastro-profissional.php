<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Profissional - Psidevs</title>
    <link rel="stylesheet" href="css/cadastroprofissional.css">
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/duasmocassentadas.svg" alt="duasmocassentadas">
        </div>
        <div class="form">
            <form action="#">
                <div class="titulo">
                    <h1 class="bemvindo">Bem vindo ao Psidevs</h1>
                    <p>Venha conhecer os nossos serviços</p>
                </div>
                <div class="formulario">
                    <form action="processa_cadastro.php" method="POST">
                        <label for="nome">Nome:</label>
                        <input class="rectangle-85" type="text" id="nome" name="nome" required><br>

                        <label for="email">E-mail:</label>
                        <input class="rectangle-85" type="email" id="email" name="email" required><br>

                        <label for="senha">Senha:</label>
                        <input class="rectangle-85" type="password" id="senha" name="senha" required><br>

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
                        <select class="rectangle-85" id="especialidade" name="especialidade">
                            <option value=""></option>
                            <option value="psicologia">Psicologia</option>
                            <option value="psiquiatria">Psiquiatria</option>
                            <option value="terapia-ocupacional">Terapia Ocupacional</option>
                        </select><br>

                        <!-- Outros campos de entrada aqui... -->

                        <label for="termos">Aceitar os <a href="termos.html">Termos e Condições</a>:</label>
                        <input type="checkbox" id="termos" name="termos" required><br>

                        <label for="politica-privacidade">Aceitar a <a href="politica_privacidade.html">Política de Privacidade</a>:</label>
                        <input type="checkbox" id="politica-privacidade" name="politica-privacidade" required><br>
                    </form>
                </div>
                <div class="botao">
                    <button><a class="criar-conta" href="#">Criar conta</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>