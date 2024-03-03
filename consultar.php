<?php
//conexão ao banco de dados
require_once "conexao.php";
//

//inicio sessão
session_start();
//
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon" />
    <link rel="stylesheet" href="Dash.css">
    <title>Consultar</title>
</head>

<body>
    <header>
        <section class="menu-content">
            <img src="assets/img/logos/logocvbranco.png" alt="civc" class="civic"/>
            <nav>
                <ul>
                    <li>
                        <?php
                        //se não tiver logado, ele aparece "Área do cliente", se tiver logado aparece o nome do cliente.
                        if (isset($_SESSION["nomee"]) == false) { ?>
                            <a href="usuario.html">
                                <?php echo "Área do cliente"; ?>
                            </a>
                            <?php
                        } else {
                            echo $_SESSION['nomee'];
                        }
                        ?>
                    </li>
                    <li><a href="usuario.html"><button id="sair"><img src="ppp/Logout.png" alt="a"
                                    class="logout" /></button></a></li>

                </ul>
            </nav>
        </section>
    </header>
    <main>




        <?php
        //verifica se está logado com alguma conta
        if (isset($_SESSION["id"]) == true) {
            //crio variável para verificar se o usuário ainda está ativo ou se já foi excluído.
            $verificaUsuario = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['statustable']} WHERE id = '{$_SESSION['id']}' AND statusAtual = 'Ativo'");
            //
        
            //crio variável para verificar se o usuário é master ou comum.
            $verificaTipoUsuario = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['statustable']} WHERE id = '{$_SESSION['id']}' AND tipoUsuario = 'Comum'");
            //
        

            //se voltar mais de uma linha, significa que o usuário ainda está ativo, seguindo para o próximo if
            if (mysqli_num_rows($verificaUsuario) == 1) {

                //se voltar mais de uma linha significa que o usuário é comum, dando erro.
                if (mysqli_num_rows($verificaTipoUsuario) == 1) { ?>

                    <body>
                        <section class="container-total">
                            <section class="container-erro">
                                <p class="textocons">
                                    Apenas usuários com permissões de 'master' podem acessar esse recurso. <br>
                                    <a href="index.php">Voltar</a>
                                </p>
                            </section>
                        </section>

                    </body>
                    <?php
                }
                //
        
                //caso não volte, significa que o usuário é master e segue para a consulta.
                else { ?>

                    <body>
                        <section class="container-total">
                            <h1>Lista de usuários</h1>
                            <section class="container-erro">
                                <form method="post">
                                    <label for="pesquisa">Nome</label>
                                    <input class="entradas" type="text" name="pesquisa" placeholder=" Digite o nome do usuário">
                                    <input id="botao-pesquisa" type="submit" value="Pesquisar" name="pesquisar">
                                </form>
                                <?php
                               $verificaTudo = mysqli_query($GLOBALS['connect'], "SELECT * FROM {$GLOBALS['usertable']}");
                

                               $verificaStatus = mysqli_query($GLOBALS['connect'], "SELECT s.id, d.nome, d.sobrenome, d.cpf, d.nomeMat, d.endereco, d.telCell, d.login, s.statusAtual FROM {$GLOBALS['usertable']} AS d, {$GLOBALS['statustable']} AS s WHERE d.id = s.id AND s.statusAtual = 'Ativo';");
               
                               if(isset($_POST['pesquisar'])){
                                   if(!empty($_POST['pesquisa'])){
                                       $pesquisa = $_POST['pesquisa'];
                                       
                                       $consulta = mysqli_query($GLOBALS['connect'], "SELECT s.id, d.nome, d.sobrenome, d.cpf, d.nomeMat, d.endereco, d.telCell, d.login, s.statusAtual FROM {$GLOBALS['usertable']} AS d, {$GLOBALS['statustable']} AS s WHERE d.id = s.id AND s.statusAtual = 'Ativo' AND d.nome LIKE '%$pesquisa%';");
               
                                       while($dado = mysqli_fetch_array($consulta)){
                                           echo '<table border="1" id="tabelaUsuarios">';
                                               echo "<tr>";
                                                   echo "<th>Nome</th>";
                                                   echo "<th>Sobrenome</th>";
                                                   echo "<th>CPF</th>";
                                                   echo "<th>Nome Materno</th>";
                                                   echo "<th>Endereço</th>";
                                                   echo "<th>Telefone Celular</th>";
                                                   echo "<th>Login</th>";
                                                   echo "<th>Status</th>";
                                                   echo "<th>Ações</th>";
                                               echo "</tr>";
                                               echo "<tr>";
                                                   echo "<td>" . $dado['nome'] . "</td>";
                                                   echo "<td>" . $dado['sobrenome'] . "</td>";
                                                   echo "<td>" . $dado['cpf'] . "</td>";
                                                   echo "<td>" . $dado['nomeMat'] . "</td>";
                                                   echo "<td>" . $dado['endereco'] . "</td>";
                                                   echo "<td>" . $dado['telCell'] . "</td>";
                                                   echo "<td>" . $dado['login'] . "</td>";
                                                   echo "<td>" . $dado['statusAtual'] . "</td>";
                                                   echo "<td>";
                                                       echo '<a href="excluir.php?id='. $dado['id'] .'">Excluir2</a>';
                                                   echo "</td>";
                                               echo "</tr>";
                                           echo "</table>";  ?>
                                           <a href="index.php">Voltar para a tela principal.</a>  <?php
                                       }
                                       
                                   }
                                   else {
                                       echo "Digite algum nome.";?>
                                       <a href="consultar.php">Voltar</a>
                                       <?php
                                   }
                               }
                               else{
                                   if(mysqli_num_rows($verificaStatus)>0){
                                           echo '<table border="1" id="tabelaUsuarios">';
                                               echo "<tr>";
                                                   echo "<th>Nome</th>";
                                                   echo "<th>Sobrenome</th>";
                                                   echo "<th>CPF</th>";
                                                   echo "<th>Nome Materno</th>";
                                                   echo "<th>Endereço</th>";
                                                   echo "<th>Telefone Celular</th>";
                                                   echo "<th>Login</th>";
                                                   echo "<th>Status</th>";
                                                   echo "<th>Ações</th>";
               
                                               echo "</tr>";
                                               while($dado = mysqli_fetch_array($verificaStatus)){
                                                   echo "<tr>";
                                                       echo "<td>" . $dado['nome'] . "</td>";
                                                       echo "<td>" . $dado['sobrenome'] . "</td>";
                                                       echo "<td>" . $dado['cpf'] . "</td>";
                                                       echo "<td>" . $dado['nomeMat'] . "</td>";
                                                       echo "<td>" . $dado['endereco'] . "</td>";
                                                       echo "<td>" . $dado['telCell'] . "</td>";
                                                       echo "<td>" . $dado['login'] . "</td>";
                                                       echo "<td>" . $dado['statusAtual'] . "</td>";
                                                       echo "<td>";
                                                           echo '<a href="excluir.php?id='. $dado['id'] .'">Excluir</a>';
                                                       echo "</td>";
                                                   echo "</tr>";
                                               }
                                           echo "</table>";
                                        // A lista de resultados aparece em um resultset
                                        mysqli_free_result($verificaTudo);
                                    }
                                    ?>
                                    <a href="index.php">Voltar para a tela principal.</a>
                                    <?php

                                }
                }

                ?>

                        </section>

                    </section>
                </body>
                <?php
            }
            //
            else {
                echo "usuário já foi apagado, tente criar outro";
            }
            //
        }
        ?>

    </main>
</body>

</html>