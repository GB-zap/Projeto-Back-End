<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon" />
    <link rel="stylesheet" href="Dash.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <section class="menu-content">
            <img src="assets/img/logos/logocvbranco.png" alt="civc" class="civic" />
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="menu.php">Home</a></li>
                    <li><a href="cad.php">Cadastro</a></li>
                    <li><a href="password.php">Alterar Senha</a></li>
                    <li><a href="databasecomom.php">Data Base</a></li>
                    <li><a href="#"><button id="button-dash">Usuario</button></a></li>
                    <li><a href="index.html"><button id="sair"><img src="ppp/Logout.png" alt="a" class="logout" /></button></a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>
        <section class="form-cad">
        <form class="form-colum">
            <label for="celular">Telefone Celular:</label>
            <input class="entradas" type="text" id="celular" name="celular" placeholder="Telefone Celular:" />
            <label for="email">E-mail:</label>
            <input class="entradas" type="text" id="email" name="email" placeholder="E-mail:" />
            <label for="Fixo">Telefone Fixo:</label>
            <input class="entradas" type="text" id="fixo" name="Fixo" placeholder="Telefone Fixo" />
            <label for="Endereço">Endereço Completo:</label>
            <input class="entradas" type="text" id="endereco" name="Endereço" placeholder="Endereço Completo:" />
              <label for="genero">Genero</label>
              <select class="entradas" name="genero" id="genero">
                <option value="" disabled selected>Selecione o sexo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outros">Outros</option>
              </select>
              <input id="botao-enviar" class="button-form" type="submit" value="Enviar" />
          </form>
        </section>
    
    </main>
</body>

</html>