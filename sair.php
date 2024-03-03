<?php
//chamo a sessão pra conseguir finalizar
session_start();
//fecho ela
session_destroy();
//volto pra tela de login
header("location: usuario.html");
?>