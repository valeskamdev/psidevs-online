<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PsiDevs</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="shortcut icon" href="assets/logo-favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="css/dist/build.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="limitador">
      <h1>
        <a href="index.html"><img src="assets/logo.svg" alt="Logo psidevs" /></a>
      </h1>
      <nav>
        <h2>
          <a href="" class="icone"><img src="assets/icon-menu.svg" alt="icone de menu"></a>
        </h2>
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="cadastro-profissional.php">Cadastro</a></li>
          <button id="open" data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            login
        </button>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <?php require_once "inc/modal.php"?>

    <article class="destaque">
        <div class="limitador" data-aos="fade-right">
          <p>Encontre o equilíbrio emocional</p>
          <h2>O seu bem-estar mental é a nossa prioridade</h2>
          <p>
            Você encontra uma equipe de profissionais dedicados a ajudá-lo.
            Oferecemos tratamentos <br />
            personalizados e eficazes para ajudá-lo a lidar com seus problemas
          </p>
          <a href="servicos.html">Nossos Serviços</a>
        </div>
      </article>




  </main>
  <script src="js/menu.js"></script>
  <script src="js/script.js" defer></script>
</body>

</html>