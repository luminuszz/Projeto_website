<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conectar = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conectar,$query);

$query="SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conectar,$query);

$query="SELECT alunos.nome_aluno, cursos.nome_curso 
FROM alunos,cursos,alunos_cursos 
WHERE alunos_cursos.id_aluno = alunos.id_aluno
AND alunos_cursos.id_curso = cursos.id_curso
 ";

$consulta_matricula = mysqli_query($conectar,$query);







