<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "banco1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


$query = "SELECT * FROM USUARIO";
$consulta = mysqli_query($conexao,$query);

