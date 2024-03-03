<?php
//conexão
require_once "conexao.php";
//

//crio a variável de exclusão
$excluir = "UPDATE {$GLOBALS['statustable']} SET statusAtual = 'Inativo' WHERE id = ?";
//
if($stmt = mysqli_prepare($connect, $excluir)){
    mysqli_stmt_bind_param($stmt,"i", $param_id); 
    $param_id = $_GET["id"];
    if(mysqli_stmt_execute($stmt)){
        $exclusaototal = 
        mysqli_stmt_close($stmt);
        header("location: consultar.php");
}
}
?>