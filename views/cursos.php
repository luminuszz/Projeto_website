


    <div class="container">

    <a href="?pagina=inserir_curso"><button class="btn btn-primary">Inserir cursos</button></a> 

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
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Deletar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php 
    while($linha = mysqli_fetch_array($consulta_cursos)){
    
      echo '<tr>';
    echo '<td>'.$linha['nome_curso'].'</td>';

    echo "<td>".$linha['descricao_curso'].'</td>
    ';

    
  ?>

  <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>"><button class="btn btn-danger btn-sm">deletar</button></a></td>

  <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>"><button class="btn btn-info btn-sm">Editar</button></a></td></tr>


  
  <?php



     }


  ?>




   
  </tbody>
</table>
</div>


   