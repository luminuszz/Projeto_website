<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];

$data_nascimento = $_POST['data_nascimento'];

$email_aluno = $_POST['email_aluno'];

$query2 = "INSERT INTO ALUNOS(nome_aluno,data_nascimento,email_aluno) VALUES('$nome_aluno','$data_nascimento','$email_aluno')";

mysqli_query($conectar,$query2);

header('location:index.php?pagina=alunos');





