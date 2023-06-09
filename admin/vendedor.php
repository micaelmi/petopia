<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro vendedor</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<?php include_once 'header.php'; ?>
    <nav class="container box">
        <a href="#">
        Produto
        </a>
        <a href="#">
        Categoria & Unidade de medida
        </a>
        <a href="#">
        Vendedor
        </a>
        <a href="#">
        Transportadora
        </a>
    </nav>

    <main class="container box">
        <div class="form">
            <h1>Cadastro de vendedor</h1>
            <fieldset>
                <legend>
                    <span class="legendaUm">Vendedores cadastrados</span>
                    <span class="legendaDois">Adicionando</span>
                </legend>
                <table>
                <tr>
                    <td>Racaotopia</td>
                    <td>cm</td>
                    <td>icon editar</td>
                    <td>icon apagar</td>
                </tr>
                <tr>
                    <td>Aquariopia</td>
                    <td>m</td>
                    <td>icon editar</td>
                    <td>icon apagar</td>
                </tr>
                <tr>
                    <td>Gatopia</td>
                    <td>kg</td>
                    <td>icon editar</td>
                    <td>icon apagar</td>
                </tr>
            </table>
            </fieldset>
        </div>
    </main>
    <?php include_once 'footer.php'; ?>
</body>
</html>