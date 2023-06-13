<!DOCTYPE html>
<?php
include_once '../../functions/database.php';

$nome = filter_input(INPUT_GET, "nome");
$cpf_cnpj = filter_input(INPUT_GET, "cpf_cnpj");

$banco = connection();
$sql = "SELECT id_vendedor, nm_vendedor, cpf_cnpj_vendedor FROM vendedores ORDER BY nm_vendedor";
$resultado = $banco->query($sql);
?>
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
                <form class="insert" action="insert.php" method="POST">
                    <input type="text" value="<?= $cpf_cnpj ?>" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF ou CNPJ">
                    <input type="text" value="<?= $nome ?>" name="nome" id="nome" placeholder="Nome">
                    <button type="submit">Salvar</button>
                </form>
            </fieldset>
            <fieldset class="show">
                <legend>
                    Vendedores cadastrados
                </legend>
                <div class="registro_categoria bold">
                    <p>CPF_CNPJ</p>
                    <p>Nome</p>
                    <p>Ações</p>
                </div>
                <?php
                while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="registro_categoria">
                        <p><?= $registro["cpf_cnpj_vendedor"] ?></p>
                        <p><?= $registro["nm_vendedor"] ?></p>
                        <div class="actions">
                            <a href="edit.php?codigo=<?= $registro["id_vendedor"] ?>" title="Editar"><img src="../../img/edit.svg" alt="Editar"></a>
                            <a href="delete.php?codigo=<?= $registro["id_vendedor"] ?>" title="Apagar"><img src="../../img/delete.svg" alt="Deletar"></a>
                        </div>
                    </div>
                <?php
                }
                $resultado = null;
                $banco = null;
                ?>
            </fieldset>
        </div>
    </main>
    <?php include_once '../footer.php'; ?>
</body>

</html>