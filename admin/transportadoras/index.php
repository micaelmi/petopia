<!DOCTYPE html>

<?php
include_once '../../functions/database.php';

$nome = filter_input(INPUT_GET, "nome");
$cpf_cnpj = filter_input(INPUT_GET, "cpf_cnpj");
$cep = filter_input(INPUT_GET, "cep");
$estado = filter_input(INPUT_GET, "estado");
$cidade = filter_input(INPUT_GET, "cidade");
$bairro = filter_input(INPUT_GET, "bairro");
$rua = filter_input(INPUT_GET, "rua");
$numero = filter_input(INPUT_GET, "numero");


$banco = connection();
$sql = "SELECT * FROM transportadoras ORDER BY nm_transportadora";
$resultado = $banco->query($sql);
?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Petopia | Admin</title>
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&family=Righteous&display=swap" rel="stylesheet" />

  <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon" />
  <!-- CSS -->
  <link rel="stylesheet" href="../../css/styles.css" />
  <link rel="stylesheet" href="../../css/admin.css" />
  <!-- JS -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script defer src="../../js/masks.js"></script>
  <script defer src="../../js/viacep.js"></script>
</head>

<body>
  <?php include_once '../header.php'; ?>
  <nav class="container box">
    <a href="../produtos">
      Produtos
    </a>
    <a href="../categorias">
      Categorias & Unidades de medida
    </a>
    <a href="../vendedores">
      Vendedores
    </a>
    <a class="active" href="../transportadoras">
      Transportadoras
    </a>
  </nav>
  <main class="container box">
    <div class="form">
      <h1>Cadastro de transportadora</h1>
      <fieldset>
          <legend>Cadastrar</legend>
          <form class="transportadora" action="insert.php" method="POST">
              <div class="fields">
                <div>
                  <input type="text" value="<?= $cpf_cnpj ?>" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF ou CNPJ">
                  <input type="text" value="<?= $nome ?>" name="nome" id="nome" placeholder="Nome">
                  <input type="text" value="<?= $cep ?>" name="cep" id="cep" onblur="pesquisacep(this.value)" placeholder="CEP">
                  <input type="text" value="<?= $estado ?>" name="estado" id="uf" placeholder="Estado">
                </div>
                <div>
                  <input type="text" value="<?= $cidade ?>" name="cidade" id="cidade" placeholder="Cidade">
                  <input type="text" value="<?= $bairro ?>" name="bairro" id="bairro" placeholder="Bairro">
                  <input type="text" value="<?= $rua ?>" name="rua" id="rua" placeholder="Rua">
                  <input type="text" value="<?= $numero ?>" name="numero" id="numero" placeholder="Número">
                </div>
              </div>
              <button type="submit">Salvar</button>
          </form>
      </fieldset>
      <h2>
        Transportadoras cadastradas
      </h2>
      <div class="transportadora_list">
      <?php
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <div class="registro_transportadora">
              <p><strong>CPF/CNPJ:</strong> <?= $registro["cpf_cnpj_transportadora"] ?></p>
              <p><strong>Nome:</strong> <?= $registro["nm_transportadora"] ?></p>
              <p><strong>CEP:</strong> <?= $registro["cep_transportadora"] ?></p>
              <p><strong>Estado:</strong> <?= $registro["estado_transportadora"] ?></p>
              <p><strong>Cidade:</strong> <?= $registro["cidade_transportadora"] ?></p>
              <p><strong>Bairro:</strong> <?= $registro["bairro_transportadora"] ?></p>
              <p><strong>Rua:</strong> <?= $registro["logradouro_transportadora"] ?></p>
              <p><strong>Número:</strong> <?= $registro["nr_transportadora"] ?></p>
              <div class="actions">
                  <button href="edit.php?codigo=<?= $registro["id_transportadora"] ?>" title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                  <button href="delete.php?codigo=<?= $registro["id_transportadora"] ?>" title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
              </div>
          </div>
      <?php
      }
      $resultado = null;
      $banco = null;
      ?>
    </div>
  </main>
  <?php include_once '../footer.php'; ?>
</body>

</html>