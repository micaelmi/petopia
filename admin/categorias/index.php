<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&family=Righteous&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/admin.css" />
</head>

<body>
    <?php include_once '../header.php'; ?>
    <nav class="container box">
        <a href="../produtos">
            Produtos
        </a>
        <a class="active" href="../categorias">
            Categorias & Unidades de medida
        </a>
        <a href="../vendedores">
            Vendedores
        </a>
        <a href="../transportadoras">
            Transportadoras
        </a>
    </nav>

    <main class="container box">
        <div class="form">
            <h1>Cadastro de informações</h1>
            <fieldset class="categorias">
                <legend>
                    Categorias de produtos cadastradas
                </legend>
                <p>Nenhuma categoria cadastrada até o momento</p>
                <!-- ou table -->
            </fieldset>
            <fieldset class="unidades">
                <legend>
                    Unidades de medida cadastradas
                </legend>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>Sigla</th>
                            <th>
                                <span id="save">Salvar</span>
                            </th>
                        </tr>
                        <tr>
                            <td>Centímetro</td>
                            <td>cm</td>
                            <td>
                                <div class="actions">
                                    <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                                    <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Centímetro</td>
                            <td>cm</td>
                            <td>
                                <div class="actions">
                                    <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                                    <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Centímetro</td>
                            <td>cm</td>
                            <td>
                                <div class="actions">
                                    <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                                    <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </fieldset>
        </div>
    </main>
    <?php include_once '../footer.php'; ?>
</body>

</html>