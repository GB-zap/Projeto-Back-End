<?php
//conexão ao banco de dados
require_once "conexao.php";
//
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon" />
    <link rel="stylesheet" media="screen and (min-width: 900px)" href="css/pages.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/Pages.css">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <section class="menu-content">
            <a href="index.php"><img src="assets/img/logos/logocvbranco.png" alt="civc" class="civic"></a> 
            <nav class="header-menu">
                <ul class="list-itens">
                </header>
                    <section class="container-total">
                        <section class="container-erro">
                            <form method="post">
                                <label for="cpf">CPF</label><br>
                                <input class="entradas" type="text" name="cpf" id="cpf"
                                    placeholder="Digite seu cpf completo"><br>
                                <label for="senha">Nova senha</label><br>
                                <input class="entradas" type="text" name="senha" id="senha"
                                    placeholder="Digite uma nova senha"><br>
                                <input id="botao-altera" type="submit" value="Alerar senha" name="alterar">
                            </form>

                            <?php
            if (isset($_POST['alterar'])) {
                if (!empty($_POST['cpf']) and !empty($_POST['senha'])) {
                    $cpf = $_POST["cpf"];
                    $senha = $_POST["senha"];
                    $verifica = mysqli_query(
                        $GLOBALS['connect'],
                        "SELECT * FROM {$GLOBALS['usertable']} WHERE cpf = '$cpf'"
                    );

                    if (mysqli_num_rows($verifica) == 0) {
                        echo "Usuário não existe, tente criar um novo.";
                    } else {
                        while ($row = mysqli_fetch_array($verifica)) {
                            session_start();
                            $_SESSION['nomee'] = $row["nome"];
                            $_SESSION['cpff'] = $row["cpf"];
                            $_SESSION['id'] = $row["id"];
                        }
                        $verificaStatus = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['statustable']} WHERE id = '{$_SESSION['id']}' AND statusAtual = 'Ativo'");
                        if (mysqli_num_rows($verificaStatus) == 0) {
                            echo "usuário já foi apagado, tente criar outro";
                        } else {
                            $altera = mysqli_query($GLOBALS['connect'], "UPDATE {$GLOBALS['usertable']} SET senha = '$senha' WHERE cpf = '$cpf'");
                            if ($altera === false) {
                                die("Deu erro meno" . mysqli_connect_error());
                            } else {
                                mysqli_close($connect);
                                //fecha a conexão e vai para tela de usuário
                                header("location: usuario.html");
                            }
                        }
                    }


                } else {
                    echo "Digite todos os dados";
                }

            }



            ?>
                        </section>
                    </section>

</body>