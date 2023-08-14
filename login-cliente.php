<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Psidevs online</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   
</head>
<body>


    <main>       
       
        <form action="" method="post" class="row g-3"> 
        <div class="text-center">
            <p><img src="img/github.png" alt="" class="img-login-cliente"></p>
            <h3>Entre na sua conta!</h3>
            <p>Faça o seu login e dê início à sua trajetória!</p>
        </div>
            <div class="col-12">
                <p>
                    <label for="email-login-cliente"  class="form-label">Email: </label>
                    <input type="email" name="email-login-cliente" id="email-login-cliente" required  class="form-control">
                </p>
            </div>

            <div class="col-12">
                <p>
                    <label for="senha-login-cliente"  class="form-label">Senha</label>
                    <input type="password" name="senha-login-cliente" id="senha-login-cliente" required  class="form-control">
                </p>
            </div>

            <div >
                <p>  
                    <input type="checkbox" name="lembrar-senha-login-cliente" id="lembrar-senha-login-cliente" required class="form-check-input">
                    <label for="lembrar-senha-login-cliente" class="form-check-label">Lembrar-senha</label>
                </p>
            </div>

            <div class="text-center">
                <button type="submit" name="entrar-na-conta-cliente" class=" text-center">Entrar na Conta</button>
            </div>   
        <div>
            <p><a href="">Esqueceu a senha? </a></p>
            <p>Não tem conta no Psidevs Online? <a href=""> Criar conta!</a></p>
           
        </div>
        </form>

     
    </main>
    <footer>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
