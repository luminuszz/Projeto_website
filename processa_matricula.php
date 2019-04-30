<?php

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];

$id_curso = $_POST['escolha_curso'];



$query2 = "INSERT INTO ALUNOS_CURSOS(id_aluno,id_curso) VALUES($id_aluno, $id_curso)";

mysqli_query($conectar,$query2);

header('location:index.php?pagina=matriculas');
