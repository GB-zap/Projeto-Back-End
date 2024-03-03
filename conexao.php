<?php

//conexão ao banco de dados
$servername = "localhost:3306";
$database = "projeto";
$username = "root";
$password = "vinicius23";
$usertable = "dados";
$statustable = "status";
$connect = mysqli_connect($servername, $username, $password, $database);
//

if($connect=== false){
    die("Deu ruim meno." . mysqli_connect_error());
}