<!DOCTYPE html>

<?php
include_once '../../functions/database.php';

$nome = filter_input(INPUT_GET, "nome");
$cpf_cnpj = filter_input(INPUT_GET, "cpf_cnpj");

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
          <form action="insert.php" method="POST">
              <input type="text" value="<?= $cpf_cnpj ?>" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF ou CNPJ">
              <input type="text" value="<?= $nome ?>" name="nome" id="nome" placeholder="Nome">
              <input type="text" value="<?= $cep ?>" name="cep" id="cep" placeholder="CEP">
              <input type="text" value="<?= $estado ?>" name="estado" id="estado" placeholder="Estado">
              <input type="text" value="<?= $cidade ?>" name="cidade" id="cidade" placeholder="Cidade">
              <input type="text" value="<?= $bairro ?>" name="bairro" id="bairro" placeholder="Bairro">
              <input type="text" value="<?= $rua ?>" name="rua" id="rua" placeholder="Rua">
              <input type="text" value="<?= $numero ?>" name="numero" id="numero" placeholder="Número">
              <button type="submit">Salvar</button>
          </form>
      </fieldset>
      <h2>
        Transportadoras cadastradas
      </h2>
      <div class="registro_categoria bold">
          <p>CPF/CNPJ</p>
          <p>Nome</p>
          <p>CEP</p>
          <p>Estado</p>
          <p>Cidade</p>
          <p>Bairro</p>
          <p>Rua</p>
          <p>Número</p>
          <p>Ações</p>
      </div>
      <?php
      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <div class="registro_categoria">
              <p><?= $registro["cpf_cnpj_transportadora"] ?></p>
              <p><?= $registro["nm_transportadora"] ?></p>
              <p><?= $registro["cep_transportadora"] ?></p>
              <p><?= $registro["cidade_transportadora"] ?></p>
              <p><?= $registro["estado_transportadora"] ?></p>
              <p><?= $registro["bairro_transportadora"] ?></p>
              <p><?= $registro["logradouro_transportadora"] ?></p>
              <p><?= $registro["nr_transportadora"] ?></p>
              <div class="actions">
                  <a href="edit.php?codigo=<?= $registro["id_transportadora"] ?>" title="Editar"><img src="../../img/edit.svg" alt="Editar"></a>
                  <a href="delete.php?codigo=<?= $registro["id_transportadora"] ?>" title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></a>
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