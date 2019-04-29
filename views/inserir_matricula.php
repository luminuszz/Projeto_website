<h1>Insrir nova matricula</h1>


	<div class="form-group">
		<form action="processa_matricula.php" method="POST">
			<select class="form-control" name="Escolha curso">

				<?php 
					   while($linha = mysqli_fetch_array($consulta_alunos)){
					    
					   echo '<tr>';
					   echo '<td>'.$linha['nome_aluno'].'</td>';

					   echo "<td>".$linha['data_nascimento'].'</td>
					   </tr>';

					    } 
				
				?>
				
			</select>				
					  
		</form>
	</div>



    <?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
		
    	echo '<option value="'.$linha['id_aluno'].'">'.$linha[
    		'nome_aluno'].'</option>';
		
		}	
	?>