<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="css/cadprof.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: rgb(243, 247, 255);
            background: linear-gradient(239deg, rgba(243, 247, 255, 1) 0%, rgba(201, 224, 245, 1) 80%, rgba(191, 218, 243, 1) 99%);
        }

        .container {
            display: flex;
            align-items: center;
        }

        .imagem-form {
            flex: 1;
            padding: 20px;
        }

        .imagem-form img {
            max-width: 100%;
            height: auto;
        }

        .formulario {
            flex: 1;
            padding: 20px;
        }

        .bem-vindo {
            display: flex;
            width: 367.298px;
            height: 68px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #152A5C;
            font-family: Plus Jakarta Sans;
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: 18px;
            /* 60% */
        }

        .venha {
            display: flex;
            width: 359.378px;
            height: 34px;
            flex-direction: column;
            justify-content: center;
            flex-shrink: 0;
            color: #000;
            font-family: Plus Jakarta Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px;
            /* 90% */
        }

        input {
            border-radius: 10px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.20);
            width: 500px;
            height: 40px;
            flex-shrink: 0;
        }

        .chek {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            border-radius: 5px;
            background: #002776;
        }
        .sexo {
            display: flex;
            width: 20px;
            height: 20px;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="imagem-form">
            <img src="img/duasmocassentadas.svg" alt="">
        </div>
        <div class="formulario">
            <h1 class="bem-vindo">Bem vindo ao Psidevs</h1>
            <p class="venha">Venha conhecer os nossos serviços</p>
            <form action="processa_cadastro.php" method="POST">
                <label for="nome"></label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome"><br>

                <label for="email"></label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail"><br>

                <label for="senha"></label>
                <input type="password" id="senha" name="senha" required placeholder="Senha"><br>

                <div>
                    <input class="chek" type="checkbox" id="lembrar-senha" name="lembrar-senha">
                    <label for="lembrar-senha">Lembrar Senha</label><br>
                </div>

                <label for="celular"></label>
                <input type="tel" id="celular" name="celular" required placeholder="Digite seu número de celular"><br>

                <label for="crp"></label>
                <input type="text" id="crp" name="crp" required placeholder="Digite seu CRP"><br>

                <label for="cpf"></label>
                <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF"><br>

                <label for="ano-formacao"></label>
                <input type="number" id="ano-formacao" name="ano-formacao" required placeholder="Digite o ano de formação"><br>

                <label for="especialidade"></label>
                <select id="especialidade" name="especialidade">
                    <option value="psicologia"></option>
                    <option value="" selected disabled>Especialidade</option>
                    <option value="psicologia">Psicologia</option>
                    <option value="psiquiatria">Psiquiatria</option>
                    <option value="terapia-ocupacional">Terapia Ocupacional</option>
                </select><br>

                <div class="sexo">
                    <label>Gênero:</label><br>
                    <input type="checkbox" id="genero-masculino" name="genero" value="masculino">
                    <label for="genero-masculino">Masculino</label><br>

                    <input type="checkbox" id="genero-feminino" name="genero" value="feminino">
                    <label for="genero-feminino">Feminino</label><br>

                    <input type="checkbox" id="genero-nao-binario" name="genero" value="nao-binario">
                    <label for="genero-nao-binario">Não Binário</label><br>
                </div>

                <div>
                    <input type="checkbox" id="termos-politica" name="termos-politica" required>
                    <label for="termos-politica">Aceitar os <a href="termos.html">Termos e Condições</a></label><br>
                </div>

                <button type="submit">Criar Conta</button>
            </form>

        </div>


</body>

</html>