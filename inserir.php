<?php
//conexão ao banco de dados
require_once "conexao.php";
//


//Variáveis do formulário no método post 
// os itens entre '[]' são o name no formulário

$telCell = $_POST["celular"];
$telFixo = $_POST["Fixo"];
$endereco = $_POST["endereco"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$sbname = $_POST["sobrenome"];
$dataNas = $_POST["data_nascimento"];
$genero = $_POST["genero"];
$nomeMat = $_POST["nome_materno"];
$cpf = $_POST["CPF"];

//

//INSERIR DADOS
function inserir(){
mysqli_query($GLOBALS['connect'],
"INSERT INTO {$GLOBALS['usertable']} (nome, sobrenome, dataNas, nomeMat, sexo, 
cpf, telCell, telFixo, endereco, login, senha)  
VALUES ('{$GLOBALS['nome']}', 
'{$GLOBALS['sbname']}', 
'{$GLOBALS['dataNas']}', 
'{$GLOBALS['nomeMat']}', 
'{$GLOBALS['genero']}', 
'{$GLOBALS['cpf']}', 
'{$GLOBALS['telCell']}',
'{$GLOBALS['telFixo']}', 
'{$GLOBALS['endereco']}', 
'{$GLOBALS['login']}', 
'{$GLOBALS['senha']}')");
}
function inserirStatus(){
    mysqli_query($GLOBALS['connect'],
"INSERT INTO {$GLOBALS['statustable']} (tipoUsuario, statusAtual)  
VALUES ('Comum', 'Ativo')");
}
  

//verificar se ja existe algum usuario com esse cpf e login
$verifica = mysqli_query($GLOBALS['connect'],
"SELECT * FROM {$GLOBALS['usertable']} WHERE cpf = '$cpf' AND login = '$login'");


//se ele voltar mais que uma linha, significa que ja existe
if(mysqli_num_rows($verifica) > 0){?>
<script type="text/javascript">window.alert("Mude o cpf ou o login.")</script>
<button onclick="window.history.back()">Voltar</button>
    <?php
    //pensar em algo pra por aqui
}

//se não voltar nada ele chama a funcão de cadastro e vai pra usuario.html
else{
    inserir();
    inserirStatus();
    mysqli_close($connect);
    session_start();
    $_SESSION['nomee'] = "$nome";
    header("location: usuario.html");
    //aqui ele vai pra usuario.html se conseguir inserir os dados no bd
    exit();
}


?>