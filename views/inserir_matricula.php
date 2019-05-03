	<h1><center>Inserir nova matricula</center></h1>

 		<div class="container fixed">
			<form action="processa_matricula.php" method="POST">

				<div class="form-group">

					<label for="escolha_aluno">Nome do aluno</label>

					<select class="form-control" name="escolha_aluno" id="escolha_aluno">
						<option>Aluno</option>

						<?php 
							while($linha = mysqli_fetch_array($consulta_alunos)){
							
							echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
							}	
						?>
					</select>

				</div>


				<div class="form-group">

					<label for="escolha_curso">Escolha o curso</label>

					<select class="form-control" name="escolha_curso" id="escolha_curso">
						<option>Curso</option>

						<?php 
							while($linha = mysqli_fetch_array($consulta_cursos)){

							
							echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
							}	
						?>
					</select>

				</div>


				<div class="form-group">
					<button type="submit" onclick="valida()" class="btn btn-success " id="btn3" >	Enviar
					</button>
				</div>

			</form>

		</div>

