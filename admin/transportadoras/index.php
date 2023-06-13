<!DOCTYPE html>
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
      <h2>
        Transportadoras cadastradas
      </h2>
      <table>
        <tr>
          <th>CPF/CNPJ</th>
          <th>Nome</th>
          <th>CEP</th>
          <th>Estado</th>
          <th>Cidade</th>
          <th>Bairro</th>
          <th>Rua</th>
          <th>Número</th>
          <th>
            <span id="save">Salvar</span>
          </th>
        </tr>
        <tr>
          <td>399.678.332/0001</td>
          <td>Piracaiao Transportes LTDA</td>
          <td>12970-000</td>
          <td>SP</td>
          <td>Piracaia</td>
          <td>Centro</td>
          <th>Rua Alvorada</th>
          <th>45</th>
          <td>
            <div class="actions">
              <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
              <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
            </div>
          </td>
        </tr>
        <tr>
          <td>240.654.323-01</td>
          <td>Express Transportes rápidos BR</td>
          <td>04959-030</td>
          <td>SP</td>
          <td>São Caetano do Sul</td>
          <td>Formigueiros</td>
          <th>Rua Presidente Armando III</th>
          <th>4532</th>
          <td>
            <div class="actions">
              <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
              <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </main>
  <?php include_once '../footer.php'; ?>
</body>

</html>