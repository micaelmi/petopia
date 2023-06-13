<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro vendedor</title>
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
        <a href="../categorias">
            Categorias & Unidades de medida
        </a>
        <a class="active" href="../vendedores">
            Vendedores
        </a>
        <a href="../transportadoras">
            Transportadoras
        </a>
    </nav>

    <main class="container box">
        <div class="form">
            <h1>Vendedores</h1>
            <fieldset>
                <legend>Cadastrar</legend>
                <form class="insert" action="inset.php" method="POST">
                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF ou CNPJ">
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <button type="submit">Salvar</button>
                </form>
            </fieldset>
            <fieldset>
                <legend>
                    Vendedores cadastrados
                </legend>
                <table>
                    <tr>
                        <th>CPF/CNPJ</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    <tr>
                        <td>399.640.332-10</td>
                        <td>Micael</td>
                        <td>
                            <div class="actions">
                                <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                                <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>399.640.332-10</td>
                        <td>Micael</td>
                        <td>
                            <div class="actions">
                                <button title="Editar"><img src="../../img/edit.svg" alt="Editar"></button>
                                <button title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </main>
    <?php include_once '../footer.php'; ?>
</body>

</html>