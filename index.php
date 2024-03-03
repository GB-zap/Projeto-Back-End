<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br"> 

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/img/faviconCV.png" type="image/x-icon"/>
  <link rel="stylesheet" media="screen and (min-width: 900px)" href="css/Index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="http://localhost/ProjetoAtualizado/css/index.css">

  <title>CIVIC</title>
</head>

<body>
  <header id="topo">
    <img src="assets/img/logos/logocvbranco.png" alt="logotelecall" class="logotelecall" />
    <nav>
      <ul>
        <li><a href="#plan" class="#">Planos</a></li>
        <li><a href="#tel" class="#">Telefonia</a></li>
        <li><a href="#benef" class="#">Benefícios</a></li>
        <li><a href="#quem" class="#">Quem somos</a></li>
        <button id="button-index"> <a href="usuario.html" class="urltext"><?php
        //se não tiver logado, ele aparece "Área do cliente", se tiver logado aparece o nome do cliente.
        if(isset($_SESSION["nomee"])==false){
          echo "Área do cliente";
        }
        else{
          echo $_SESSION['nomee'];
        }    
        ?></button></a>
        <button id="consultar-usuarios" onclick="window.location.href='consultar.php'"><img src="assets/img/Logos/lupa.png" alt="Logo Lupa" srcset=""></button>
        <button id="sairbutton"><a href="sair.php"
        class="urltext">Sair</a><!--aqui ele vai pro arquivo sair--></button>
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
          <img src="assets/img/Logos/lua.png" alt="Tema Escuro " class="fa-moon"></img>
          <img src="assets/img/Logos/sol.png" alt="Tema Claro" class="fa-sun"></img>
          <section class="ball"></section>
        </label>
      </ul>
      

      <section class="menu-icon">
        <img src="assets/img/Logos/icone-menu.png">
      </section>
    </nav>  


  </header>
  <main>
    <section id="carrossel">
      <section id="imagens">
        <img src="assets/img/carossel/banner1.png">
        <img src="assets/img/carossel/img1.png">
        <img src="assets/img/carossel/banner2.png">
        <img src="assets/img/carossel/img3.png">
      </section>
    </section>
    <section>
      <h2 id="plan"> Planos</a></h2>
    </section>
    <h2 class="titulo">Escolha o plano Ideal para sua Empresa: </h2>
    <section class="planos-conteiner">

      <article class="banda">
        <h2> Banda Larga</h2>
        <h3>100MB</h3>
        <span>R$ 99,90 */mês</span>
        <button class="btn">Contrate</button>
      </article>
      <article class="banda">
        <h2>Banda Larga</h2>
        <h3>300MB</h3>
        <span>R$119,90 */mês</span>
        <button class="btn">Contrate</button>
      </article>

      <article class="banda">
        <h2>Banda Larga</h2>
        <h3>600MB</h3>
        <span>R$300,00 */mês</span>
        <button class="btn">Contrate</button>
      </article>

      <article class="banda">
        <h2>Banda Larga</h2>
        <h3>100MB</h3>
        <h4>+ Fixo ilimitado para todo Brasil</h4>
        <span>R$169,90 */mês</span>
        <button class="btn">Contrate</button>
      </article>

      <article class="banda">
        <h2>Banda Larga</h2>
        <h3>300MB</h3>
        <h4>+ Fixo ilimitado para todo Brasil</h4>
        <span>R$189,90 */mês</span>
        <button class="btn">Contrate</button>
      </article>

      <article class="banda">
        <h2>Banda Larga</h2>
        <h3>600MB</h3>
        <h4>+ Fixo ilimitado para todo Brasil</h4>
        <span>R$369,90 */mês</span>
        <button class="btn">Contrate</button>
      </article>

    </section>


    <h2 id="tel">Telefonia</h2>
    <section class="telefonia-conteiner">

      <article class="telefonia">
        <h2>SOFTPHONE</h2>
        <span>R$69,90 mês/ramal</span>
        <h3>Ligações ilimitadas dentro do Brasil destinos Fixo e Móvel
          SoftPhone PC ou Celular
          URA, chamada em espera, siga-me, conferecia
          1 Canal
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>

      <article class="telefonia">
        <h2>APARELHO IP</h2>
        <span>R$79,90 mês/ramal</span>
        <h3>Ligações ilimitadas dentro do Brasil destinos Fixo e Móvel
          SoftPhone PC ou Celular
          URA, chamada em espera, siga-me, conferecia
          1 Canal
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>

      <article class="telefonia">
        <h2>CALL CENTER SOFTPHONE</h2>
        <span>R$119,90 mês/ramal</span>
        <h3>
          Licença Agente
          Softphone PC ou Celular
          URA, chamada em espera, siga-me, conferencia
          Gravação
          Pacotes de ligaçôes contratado a parte
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>

      <article class="telefonia">
        <h2>CALL CENTER APARELHO IP</h2>
        <span>R$129,90 mês/ramal</span>
        <h3>
          Licença Agente
          Softphone PC ou Celular
          URA, chamada em espera, siga-me, conferencia
          Gravação
          Pacotes de ligaçôes contratado a parte
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>

      <article class="telefonia">
        <h2>CALL CENTER SOFTPHONE</h2>
        <span>R$229,90 mês/ramal</span>
        <h3>
          Licença Supervisor
          Softphone PC ou Celular
          URA, chamada em espera, siga-me, conferencia
          Gravação
          Pacotes de ligaçôes contratado a parte
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>

      <article class="telefonia">
        <h2>CALL CENTER APARELHO IP</h2>
        <span>R$129,90 mês/ramal</span>
        <h3>
          Licença Agente
          Softphone PC ou Celular
          URA, chamada em espera, siga-me, conferencia
          Gravação
          Pacotes de ligaçôes contratado a parte
        </h3>
        <button class="btn-tel">CONTRATAR</button>
      </article>
    </section>
   <h2 class="titulo" id="benef">Benefícios</h2>
    <section class="beneficios-conteiner"> 
      <article class="beneficios">
        <h2>Redução de custos</h2>
        <span>Elimine o custo de investimento em equipamentos e manuntenção.</span>
      </article>

      <article class="beneficios">
        <h2>Pronto pra usar</h2>
        <span>Receba os aparelhos já formatados, com tudo instalado e configurado conforme sua necessidade.</span>
      </article>

      <article class="beneficios">
        <h2>Modernização</h2>
        <span>O parque de TI da sua empresa sempre atualizado com os equipamentos mais modernos do mercado.</span>
      </article>

      <article class="beneficios">
        <h2>Manutenção</h2>
        <span>Realizadas de forma ágil e sem custo adicional.</span>
      </article>

      <article class="beneficios">
        <h2>Logística Completa</h2>
        <span>Entrega e retirada em todo o Brasil.</span>
      </article>

      <article class="beneficios">
        <h2>Suporte</h2>
        <span>Time de especialistas disponível 24x7.</span>
      </article>
     
      <section class="about-us">
      <article class="resumo">
        <h2 class="titulo" id="quem">Quem Somos</h2>
        <h2 class="textbox">A Civic Telecom é uma operadora de telecomunicações brasileira que oferece a seus clientes o mais
          alto padrão de
          qualidade,
          velocidade e acessibilidade em soluções de comunicação.
          Serviços que incluem uma ampla gama de valores agregados, oferecendo aos clientes operações mais produtivas,
          inovadoras e eficazes.
          Com anos de experiência na indústria global, a Civic hoje é sinônimo de qualidade e eficiência.
        </h2>
        <img class="cartao" src="assets/img/Logos/logocvbranco.png" alt="Cartão">
      </section>
    </article>
  </main>
  <footer>
    <section data-scroll="suave" class="show-button" data-anima="scroll">
      <a href="#topo">
        <article class="backtopo">
          <img src="assets/img/Logos/circle-up.png" alt="Voltar ao Topo">
        </article>
      </a>
    </section>
    <section class="boxs">
      <h2>Início</h2>
      <ul>
        <li><a href="#">Planos</a></li>
        <li><a href="#">Telefonia</a></li>
        <li><a href="#">Beneficios</a></li>
      </ul>
    </section>
    <section class="boxs">
      <h2>Networks and Infraestructure</h2>
      <ul>
        <li><a href="#">Ponto-a-Ponto</a></li>
        <li><a href="#">MPLS</a></li>
        <li><a href="#">Fibra Apagada e Dutos</a></li>
      </ul>
    </section>
    <section class="boxs">
      <h2>Telephony</h2>
      <ul>
        <li><a href="#">PABX IP Virtul</a></li>
        <li><a href="#">E1</a></li>
        <li><a href="#">Números 0800 e 40XX</a></li>
      </ul>
    </section>
    <section class="boxs">
      <h2> Civic Telecom </h2>
      <p> Copyright &#169 2023 civic Telecom. <strong>Todos os direitos reservados.</strong>
      </p>
    </section>
    <section class="footer">
      <img src="assets/img/Logos/logocvbranco.png" alt="logo" class="logotelecall">
    </section>
  </section>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/carrossel.js"></script>
  <script src="js/buttonUp.js"></script>
  <script src="js/tema.js"></script>
  <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</body>


</html>