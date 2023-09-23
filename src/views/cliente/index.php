<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../../css/dist/build.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Psidevs | Minha Conta</title>
</head>
<body>
  <header class="bg-primary text-right">
    <div class="container_header container py-3 flex justify-between items-center">
      <div class="header_logo">
        <h1><a href="index.php"><img src="../../../assets/logo-branca.svg" alt="Logo Psidevs, Plataforma Online"></a></h1>
      </div>
      <div class="header_perfil flex">
        <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu font">
          <p>Josefa Ferreira</p>
          <p class="font-bold">Perfil</p>
        </div>
        <div class="header_perfil_avatar">
          <img src="../../../assets/cliente-avatar.svg" alt="Avatar cliente">
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="container_header">
      <h2>Boa tarde, Josefa Ferreira</h2>
      <div class="container_header_interacao">
        <div class="container_header_interacao_notificacao">
          <img src="../../../assets/icone-notificacao.svg" alt="Sino">
        </div>
        <div class="container_header_interacao_consulta">
          <a href="#"><img src="../../../assets/icone-plus.svg" alt="Sinal de adição">Marcar consulta</a>
        </div>
      </div>
    </div>
    <div class="container_principal">
      <div class="container_navbar">
        <div class="container_avatar">
          <img src="../../../assets/cliente-avatar.svg" alt="Avatar cliente">
          <p>Meu perfil</p>
        </div>
        <nav>
          <ul>
            <li><img src="../../../assets/icone-home.svg" alt="Casa"> Início</li>
            <li><img src="../../../assets/icone-calendario.svg" alt="Calendário">Minhas consultas</li>
            <li><img src="../../../assets/icone-historico.svg" alt="Relógio">Histórico de consultas</li>
            <li><img src="../../../assets/icone-perfil.svg" alt="Boneco">Meu perfil</li>
            <li><img src="../../../assets/icone-sair.svg" alt="Porta">Sair</li>
          </ul>
        </nav>
      </div>
      <div class="container_conteudo">
        <div class="container_conteudo_consulta_hoje">
          <div class="container_conteudo_consulta_hoje_titulo">
            <h2>Consulta de hoje</h2>
            <span>16:40</span>
          </div>
          <div class="container_conteudo_consulta_hoje_corpo">
            <h3>Jorge Nogueira</h3>
            <p>Psicólogo Educacional</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, magnam, maxime!
              Adipisci aut blanditiis corporis facilis illo quas saepe voluptatem.</p>
          </div>
          <div class="container_conteudo_consulta_hoje_rodape">
            <div class="container_conteudo_consulta_hoje_rodape_plataforma">
              <img src="../../../assets/icone-plataforma-zoom.svg" alt="Plataforma Zoom">
            </div>
            <div class="container_conteudo_consulta_hoje_rodape_conteudo">
              <div class="container_conteudo_consulta_hoje_rodape_texto">
                <h4>Entre na chamada</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi atque repudiandae vero?</p>
              </div>
              <div class="container_conteudo_consulta_hoje_rodape_conteudo_link">
                <a href="#">Conectar<img src="../../../assets/arrow-right.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container_conteudo_proxima_consulta">
          <div class="container_conteudo_proxima_consulta_titulo">
            <h2>Próxima consulta</h2>
          </div>
          <div class="container_conteudo_proxima_consulta_profissional">
            <div class="container_conteudo_proxima_consulta_grupo_1_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_texto">
              <h3>Fábia Araújo de Fraiz</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 20 Jul | Zoom</span>
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_horario">
              <span>14:30</span>
            </div>
          </div>
          <div class="container_conteudo_proxima_consulta_profissional">
            <div class="container_conteudo_proxima_consulta_grupo_1_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar de uma mulher">
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_texto">
              <h3>Juliana Souza Martins</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 21 Jul | Meet</span>
            </div>
            <div class="container_conteudo_proxima_consulta_grupo_1_horario">
              <span>09:00</span>
            </div>
          </div>
          <div class="container_conteudo_proxima_consulta_rodape">
            <p>Ver todas consultas</p>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta">
          <div class="container_conteudo_historico_consulta_titulo">
            <h2>Histórico de consultas</h2>
          </div>
          <div class="container_conteudo_historico_consulta_profissional">
            <div class="container_conteudo_historico_consulta_profissional_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
            </div>
            <div class="container_conteudo_historico_consulta_profissional_texto">
              <h3>Eduardo Mateus Freitas</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 14/06/2023 | 13:30 | Zoom</span>
              <span>Cancelada</span>
            </div>
            <div class="container_conteudo_historico_consulta_profissional_botao">
              <span>R$ 50,00</span>
              <a href="#">Reagendar</a>
            </div>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta">
          <div class="container_conteudo_historico_consulta_titulo">
            <h2>Histórico de consultas</h2>
          </div>
          <div class="container_conteudo_historico_consulta_profissional">
            <div class="container_conteudo_historico_consulta_profissional_avatar">
              <img src="../../../assets/icone-avatar-profissional.svg" alt="Avatar profissional">
            </div>
            <div class="container_conteudo_historico_consulta_profissional_texto">
              <h3>Daniela Júlia Queiroz</h3>
              <span><img src="../../../assets/icone-horario.svg" alt="Calendário"> 11/06/2023 | 16:00 | Zoom</span>
              <span>Finalizada</span>
            </div>
            <div class="container_conteudo_historico_consulta_profissional_botao">
              <span>R$ 75,00</span>
              <a href="#">Reagendar</a>
            </div>
          </div>
        </div>
        <div class="container_conteudo_historico_consulta_rodape">
          <p>Ver histórico de consultas</p>
        </div>
      </div>
    </div>
  </main>

</body>
</html>