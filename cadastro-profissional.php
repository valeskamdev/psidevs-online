<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadprof.css">
    <title>Cadastro Profissional</title>
</head>

<body>
    <div class="container">
        <div class="imagem">
            <img src="img/duasmocassentadas.svg" alt="duasmocassentadas">
            <div>
                <h1 class="welcome">Welcome to</h1>
                <h1 class="psi">PSIDEVS</h1>
                <P class="texto-img">A Psidevs torna simples encontrar psicólogos qualificados on line e reservar consultas de forma conveniente.</P>
            </div>

        </div>
        <div class="formulario">
            <h1 class="bem-psidev">Bem-vindo ao Psidevs</h1>
            <p class="venha-conhecer">Venha conhecer os nossos serviços</p>

            <form action="processa_cadastro.php" method="POST">
    <label for="nome"></label>
    <input class="input-nome" type="text" id="nome" name="nome" required placeholder="Digite seu nome"><br>

    <label for="email"></label>
    <input class="email" type="email" id="email" name="email" required placeholder="Digite seu e-mail"><br>

    <label for="senha"></label>
    <input class="senha" type="password" id="senha" name="senha" required placeholder="senha"><br>

    <label for="lembrar-senha" class="lembrar-senha">Lembrar Senha:</label>
    <input type="checkbox" id="lembrar-senha" name="lembrar-senha" class="botao-lembrar-senha"><br>

    <label for="celular"></label>
    <input type="tel" id="celular" name="celular" required placeholder="Digite seu número de celular" class="celular"><br>

    <label for="cpf"></label>
    <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF" class="cpf"><br>

    <label for="crp"></label>
    <input type="text" id="crp" name="crp" required placeholder="Digite seu CRP" class="crp"><br>

    <label for="ano-formacao"></label>
    <input type="number" id="ano-formacao" name="ano-formacao" required placeholder="Digite o ano de formação" class="ano-formacao"><br>

    <label  for="especialidade"></label>
    <select class="especialidade" id="especialidade" name="especialidade">
        <option value="" selected disabled>Especialidade</option>
        <option value="psicologia">Psicologia</option>
        <option value="psiquiatria">Psiquiatria</option>
        <option value="terapia-ocupacional">Terapia Ocupacional</option>
    </select><br>

    <label class="genero">Gênero:</label><br>
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