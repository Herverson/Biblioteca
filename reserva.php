<?php include "menu.php";include "verificar.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Reserva</title>
</head>

<body>
	<div class="container">
		<form id="form1" name="form1" method="post" action="salvar_reserva.php">
			<div class="form-group">
				<label for="matricula">Matricula</label>
				<input type="text" class="form-control" id="matricula" name ="matricula" placeholder="Matricula">
			</div>
			<div class="form-group">
				<label for="cod_livro">Código do livro</label>
				<input type="text" class="form-control" id="cod_livro" name="codigo" placeholder="Código do livro">
			</div>
			<div class="form-group">
				<label for="data">Data da reserva</label>
				<input type="date" class="form-control" id="data" name="data" placeholder="Data da reserva">
			</div>
			<div class="form-group">
				<label for="prazo">Prazo</label>
				<input type="text" class="form-control" id="prazo" name="prazo" placeholder="Prazo">
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>