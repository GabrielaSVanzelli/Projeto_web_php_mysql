<?php

//Script para conexão no phpmyadmin
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "formCadastro";

//Cria uma conexão com o banco de dados
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//Verifica se a conexão foi estabelecida
/*
    if($conn -> connect_errno){
        echo "erro";
    }
    else{
        echo "conexao efetuada";
        print_r('<br>');
    }
*/
?>
