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
		<form id="form1" name="form1" method="post" action="salva_categoria.php">
			<div class="form-group">
				<label for="nome">Nome Categoria</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome categoria">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição da categoria</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da categoria">
			</div>
			<div class="form-group">
				<label for="cod_livro">Código do livro</label>
				<input type="text" class="form-control" id="cod_livro" name="cod_livro" placeholder="Código do livro">
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/bootstrap.js">
	
</script>
</html>