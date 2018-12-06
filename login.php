<?php include("menu.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
	<div class="container">
		<form id="form1" name="form1" method="post" action="realizar_login.php">
			<div class="form-group">
				<label for="Matricula">Matricula</label>
				<input type="text" class="form-control" id="Matricula" name="Matricula" placeholder="Matricula">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" id="senha" name="Senha" placeholder="Senha">
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/bootstrap.js">
	
</script>
</html>
