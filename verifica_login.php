<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon" />
    <title>Verificar login</title>
</head>
<body>
    <header>
        <section class="menu-content">
            <a href="usuario.html"><img src="assets/img/logos/logocvbranco.png" alt="civc" class="civic"></a>
        </header>
<section class="form-verf">



<?php

//conexão
require_once "conexao.php";
//

//posts do formulario de login
$cpf = $_POST["CPF"];
$senha = $_POST["senha"];
//


//verifica se  existe no banco de dados
$verifica = mysqli_query($GLOBALS['connect'],
"SELECT * FROM {$GLOBALS['usertable']} WHERE cpf = '$cpf' AND senha = '$senha'");
//



//variável para o 2FA 
$pergunta= rand(1,2);
//

if(mysqli_num_rows($verifica) > 0){
    //se buscar e encontrar uma linha pelo menos ele salva os dados de nome, cpf, id e nome materno.
    while($row = mysqli_fetch_array($verifica)){
        session_start();
        $_SESSION['nomee'] = $row["nome"];
        $_SESSION['cpff'] = $row["cpf"];
        $_SESSION['id'] = $row["id"];
        $_SESSION['nomeMat'] = $row["nomeMat"];
    }
    //

    //aqui crio uma variável com a query para verificar se o usuário ainda está ativo ou ja foi excluído.
    $verificaStatus = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['statustable']} WHERE id = '{$_SESSION['id']}' AND statusAtual = 'Ativo'");
    //

    //se ele não encontrar nenhuma linha, mostra que ja foi deletado.
    if(mysqli_num_rows($verificaStatus) == 0){
        echo  "<h1 class='text'> usuário já foi apagado, tente criar outro </h1>";
    }
    //

    //se ele encontra, vai para o 2fa, com uma pergunta aleatória.
    else{
        mysqli_close($connect);
        if($pergunta==1){?><form class="autentica" action="twofaCEL.php" method="POST">
            <h1>Autênticação de dois fatores necessária</h1>
            <label for="tel">Telefone Celular</label>
            <input class="entradas" type="text" id="telcel" name="tel" placeholder="Telefone Celular"/>
            <input class="submit" type="submit" value="Enviar">
        </form> <?php //crio um formulário com a pergunta
        }
        else if($pergunta==2){?>
            <form class="autentica" action="twofaMat.php" method="POST">
            <h1>Autênticação de dois fatores necessária</h1>
            <label for="nomeMaterno">Qual o nome da sua mãe?</label>
            <input class="entradas" type="text" id="nmat" name="nomeMaterno" placeholder="Digite o nome da sua mãe"/>
            <input class="submit" type="submit" value="Enviar">
        </form> <?php //crio um formulário com a pergunta
        }        
    }
    //
    
}
//caso não exista ele da erro. vou mudar a tela depois
else{
    echo"<h1 class='text'> Confira seus dados e tente novamente.
    <a href='usuario.html' class='textvr'>Voltar</a>";
}
//
?>
</section>
   
</body>
</html>
