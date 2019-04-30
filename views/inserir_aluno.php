
<div class="container">
	
	<form  action="processa_aluno.php" method="POST">

		<div class="form-group">
			<label for="nome_aluno">Nome do aluno</label>
			<input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" id="nome_aluno" class="form-control">
		</div>

		
		<div class="form-group">
			<label for="data_nascimento">Carga horária</label>
			<input type="text" name="data_nascimento" id="data_nascimento" placeholder="Insira a data de nascimento" class="form-control">
		</div>

		

		<div class="form-group">
			<label for="email_aluno">Email</label>
			<input class="form-control" name="email_aluno" type="email" id="email_aluno" placeholder="Email do aluno">
		</div>
		<br>

		<div class="form-group">
			<button type="submit" class="btn btn-primary " id="btn1" onclick="valida()">Enviar</button>
		</div>
		


			

		</div>

	</form>


</div>