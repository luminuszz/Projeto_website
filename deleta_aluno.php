<?php

$id_aluno= $_GET['id_aluno'];

$query="DELETE FROM ALUNOS WHERE ID_ALUNO = $id_ALUNO";

mysqli_query($conectar,$query);


header('location:index.php?pagina=alunos');
