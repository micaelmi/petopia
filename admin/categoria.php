<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/categoria.css">
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
            <h1>Cadastro de informações</h1>
        <fieldset class="primeiro">
            <legend>
                <span class="legendaUm">Categorias de produtos cadastradas</span>
                <span class="legendaDois">+ Adicionar</span>
            </legend>
            <table>
                <p>Nenhuma categoria cadastrada até o momento</p>
            </table>
        </fieldset>
            <!-- HIERARQUIA DE TABELAS(simples)
                TABLE - tabela
                    TABLE ROW - linha de tabela
                        TABLE HEADER - cabeçalho de tabela
                            TABLE DATA - dado de tabela
            -->
            <fieldset class="segundo">
                <legend>
                    <span class="legendaUm">Unidades de medida cadastradas</span>
                    <span class="legendaDois">Adicionando</span>
                </legend>
                <table>
                <tr>
                    <td>Centímetro</td>
                    <td>cm</td>
                    <td>icon editar</td>
                    <td>icon apagar</td>
                </tr>
                <tr>
                    <td>Metro</td>
                    <td>m</td>
                    <td>icon editar</td>
                    <td>icon apagar</td>
                </tr>
                <tr>
                    <td>Kilograma</td>
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