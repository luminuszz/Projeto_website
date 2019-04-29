

<div class="container">
  <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search" id="myInput">
</div>
  <br>

<div class="container">
    <a href="?pagina=inserir_aluno"><button class="btn btn-primary">Inserir alunos</button></a> 
</div>




<br>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody id="myTable">
  	<?php 
		while($linha = mysqli_fetch_array($consulta_alunos)){
		
    	echo '<tr>';
		echo '<td>'.$linha['nome_aluno'].'</td>';

		echo "<td>".$linha['email_aluno'].'</td>
		</tr>';


		}	
	?>


   
  </tbody>
</table>
</div>