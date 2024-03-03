<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon" />>
    <title>Verificar login</title>
</head>
<body>
    <header>
        <section class="menu-content">
            <a href="usuario.html"><img src="assets/img/logos/logocvbranco.png" alt="civc" class="civic"></a>
        </header>
<?php              //Autênticação de dois fatores: nome materno.
//conexão
require_once "conexao.php";
//

//variável do formulário
$nomeMat = $_POST["nomeMaterno"];
//

session_start();

//query para buscar se o nome inserido está correto
$twofaMat = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['usertable']} WHERE id = $_SESSION[id] AND nomeMat = '$nomeMat'");
//

if(mysqli_num_rows($twofaMat) > 0){
    //se buscar e encontrar uma linha significa que o nome da mãe está certo. 
    while($row = mysqli_fetch_array($twofaMat)){
    mysqli_close($connect);
    //fecha a conexão e vai para o index
    header("location: index.php");
    }
}
else{?>

<script type="text/javascript">window.alert("Dado incorreto")</script>
<a href="usuario.html"><h1 class="twfa">Tente novamente</h1></a>
<?php
}
?>