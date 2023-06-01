<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petopia | Tudo para seu amigo animal</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css"
    />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&family=Righteous&display=swap"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <!-- JS -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"
    ></script>
    <script defer src="./js/slider.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <a href="/">
          <img src="./img/logo.svg" alt="Logo Petopia" height="80" />
        </a>
        <div class="links">
          <a href="./login.php">Login</a>
          <a href="./cadastro.php">Cadastro</a>
        </div>
      </div>
    </header>
    <div class="hero">
      <!-- CARROSSEL -->
      <div id="my-keen-slider" class="keen-slider">
        <div class="keen-slider__slide slide">
          <img src="./img/pets-1.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-2.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-3.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-4.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-5.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-6.jpg" alt="Imagem de pets" />
        </div>
        <div class="keen-slider__slide slide">
          <img src="./img/pets-7.jpg" alt="Imagem de pets" />
        </div>
      </div>
    </div>
    <div class="line"></div>
    <main class="container">
      <h1>Bem-vindo(a) à Petopia!</h1>
      <h2>Encontre tudo para seu amigo pet bem aqui!</h2>
      <div class="products">
        <div class="card">
          <img src="./img/pets-5.jpg" alt="Passarinho" />
          <h3>R$120,00</h3>
          <h4>Passarinho</h4>
          <p>
            descrição Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Fugiat a esse hic et, repellendus.
          </p>
          <button>Detalhes</button>
        </div>
        <div class="card">
          <img src="./img/pets-5.jpg" alt="Passarinho" />
          <h3>R$120,00</h3>
          <h4>Passarinho</h4>
          <p>
            descrição Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Fugiat a esse hic et, repellendus.
          </p>
          <button>Detalhes</button>
        </div>
        <div class="card">
          <img src="./img/pets-5.jpg" alt="Passarinho" />
          <h3>R$120,00</h3>
          <h4>Passarinho</h4>
          <p>
            descrição Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Fugiat a esse hic et, repellendus.
          </p>
          <button>Detalhes</button>
        </div>
      </div>
    </main>
    <footer>
      <a href="/">
        <img src="./img/logo.svg" alt="Logo Petopia" />
      </a>
    </footer>
  </body>
</html>
