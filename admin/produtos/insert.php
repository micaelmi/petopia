<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
$dimensoes = filter_input(INPUT_POST, 'dimensao', FILTER_SANITIZE_SPECIAL_CHARS);
$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_SPECIAL_CHARS);
$medida = filter_input(INPUT_POST, 'medida', FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
$arquivo1 = $_FILES['img1'];
$arquivo2 = $_FILES['img2'];
$arquivo3 = $_FILES['img3'];
$arquivo4 = $_FILES['img4'];
$arquivo5 = $_FILES['img5'];

include_once '../../functions/database.php';
include_once '../../functions/loadFiles.php';
$bd = connection();
$sql = "INSERT INTO produtos (nm_produto, ds_produto, vl_produto, qt_estoque, dimensoes_produto, peso_produto, id_unidade_medida, id_categoria)
        VALUES ('$nome', '$descricao', '$valor', '$quantidade', '$dimensoes', '$peso', '$medida', '$categoria')";
try{
    $bd->beginTransaction();
    $linhas = $bd->exec($sql);
    if ($linhas == 1){
        $bd->commit();
    }
    else {
        $bd->rollBack();
    }
} catch (Exception $ex) {
    $params = "";
    $params = dbError($ex);

    $params .= "&nome=$nome";
    $params .= "&descricao=$descricao";
    $params .= "&valor=$valor";
    $params .= "&quantidade=$quantidade";
    $params .= "&dimensoes=$dimensoes";
    $params .= "&peso=$peso";
    $params .= "&medida=$medida";
    $params .= "&categoria=$categoria";
    
    $bd = null;

    header("location:index.php?$params");
    die();
}

if (loadFile($arquivo1)){
    moveFile($arquivo1,"../../img/produtos/".$nome.$valor."1.png");
}
if (loadFile($arquivo2)){
    moveFile($arquivo2,"../../img/produtos/".$nome.$valor."2.png");
}
if (loadFile($arquivo3)){
    moveFile($arquivo3,"../../img/produtos/".$nome.$valor."3.png");
}
if (loadFile($arquivo4)){
    moveFile($arquivo4,"../../img/produtos/".$nome.$valor."4.png");
}
if (loadFile($arquivo5)){
    moveFile($arquivo5,"../../img/produtos/".$nome.$valor."5.png");
}


$bd = null;

header("location:index.php");