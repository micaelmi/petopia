<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Petopia | Tudo para seu amigo animal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css" />
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&family=Righteous&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon" />
  <!-- CSS -->
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/cadastro.css" />
  <!-- JS -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script defer src="./js/masks.js"></script>
  <script defer src="./js/viacep.js"></script>
</head>

<body>
  <a href="./" class="back">
    <img src="./img/back.png" alt="Voltar" />
  </a>
  <form action="cadastrar.php">
    <img src="./img/logo.svg" alt="Logo Petopia" />
    <h1>Cadastre-se!</h1>
    <input required type="text" placeholder="Nome" />
    <input required type="email" placeholder="E-mail" />
    <input required type="text" id="cpf-cnpj" placeholder="CPF/CNPJ" />
    <input required id="cep" onblur="pesquisacep(this.value);" type="text" placeholder="CEP" />
    <input required id="uf" type="text" placeholder="Estado" />
    <input required id="cidade" type="text" placeholder="Cidade" />
    <input required id="bairro" type="text" placeholder="Bairro" />
    <input required id="rua" type="text" placeholder="Logradouro" />
    <input required type="number" placeholder="Número" />
    <input required type="password" placeholder="Senha" />
    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>