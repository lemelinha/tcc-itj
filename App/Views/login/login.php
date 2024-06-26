<!DOCTYPE html>
<html id="main" lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script type="text/javascript" src="assets/js/login/login.js" defer></script>

    <meta charset="UTF-8" />
    <meta name="color-scheme" content="dark light" />

    <title>Login - eBhaskara</title>
    <link rel="icon" href="assets/images/login/light.png" />
  </head>

  <body class="" id="login">
    <!-- <img class="bg-login" src="..\src\images\blurry-gradient-haikei.svg"> -->
    <button class="theme">
      <img class="theme" src="assets/images/login/dark.png" />
    </button>

    <p class="logo-cima anta-regular">eBhaskara</p>
    <img class="mesa-login shadow" src="assets/images/login/mesa.svg" />

    <div class="column shadow">
      <form class="form-login">
        <h1>Boas-vindas!</h1>
        <p>E-mail / Usuário / CGM</p>
        <input type="text" placeholder="exemplo@aluno.g12.br" />
        <br />
        <br />
        <p>Senha</p>
        <input type="password" placeholder="Digite sua senha" />
        <br />
        <a href="recuperacao.html">
          <p class="esqueceu">Esqueceu a senha?</p>
        </a>
        <br />
        <button class="shadow hyperlink" type="submit">Entrar</button>
      </form>
      <div class="container-contato hyperlink">
        <a href="suporte.html">
          <img class="contato" src="assets/images/login/contato.png" alt="contato" />
        </a>
      </div>
    </div>
  </body>
</html>
