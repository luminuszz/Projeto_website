
<div class="container">
	
	<form  action="processa_curso.php" method="POST">

		<div class="form-group">
			<label for="nome_curso">Nome do Curso</label>
			<input type="text" name="nome_curso" placeholder="Insira o nome do curso" id="nome_curso" class="form-control">
		</div>

		
		<div class="form-group">
			<label for="carga_horaria">Carga horária</label>
			<input type="number" name="carga_horaria" id="carga_horaria" placeholder="Insira a carga horaria do curso" class="form-control">
		</div>

		

		<div class="form-group">
			<label for="descricao">Descrição</label>
			<textarea class="form-control" name="descricao_curso" id="descricao" placeholder="Descrição do cruso" rows="4">
			</textarea>
		<br>

		<div class="form-group">
			<button type="input" class="btn btn-primary " id="btn1" onclick="valida()">Enviar</button>
		</div>
		


			

		</div>

	</form>


</div>