

  <div class="container">
    <a href="?pagina=inserir_matricula"><button class="btn btn-primary">Inserir matricula</button></a> 
</div>

<br>

<div class="container">
  <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search" id="myInput">
</div>

<br>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Aluno</th>
      <th scope="col">Curso</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php 
    while($linha = mysqli_fetch_array($consulta_matricula)){
    
      echo '<tr>';
    echo '<td>'.$linha['nome_aluno'].'</td>';

    echo "<td>".$linha['nome_curso'].'</td>
    </tr>';


   
  ?>

   <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>"><button class="btn btn-danger btn-sm">deletar</button></a></td></tr>

    <td><a href="edita_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>"><button class="btn btn-danger btn-sm">editar</button></a></td></tr>
  <?php

  }
  
  ?>

   
  </tbody>
</table>
</div>


   