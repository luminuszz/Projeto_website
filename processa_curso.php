<?php

include 'db.php';


$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];
$descricao_curso = $_POST['descricao_curso'];

$query =  "INSERT INTO  CURSOS(nome_curso,carga_horaria,descricao_curso) VALUES('$nome_curso',$carga_horaria,'$descricao_curso')";


mysqli_query($conectar, $query);

header('location:index.php?pagina=cursos');