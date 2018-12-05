<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel=stylesheet>
<title>Untitled Document</title>
</head>

<body>
	<div class="container">
		<form id="form1" name="form1" method="post" action="salva_devolucao.php">
			<div class="form-group">
				<label for="matricula">Matricula</label>
				<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula">
			</div>
			<div class="form-group">
				<label for="cod_exemplar">Codigo do exemplar</label>
				<input type="text" class="form-control" id="cod_exemplar" name="cod_exemplar" placeholder="codigo do exemplar">
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/bootstrap.js">
	
</script>
</html>