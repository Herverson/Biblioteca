<?php include("menu.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Cadastro do livro</title>
</head>

<body>
	<div class="container">
		<form id="form1" name="form1" method="post" action="salva_livro.php">
			<div class="form-group">
				<label for="cod_livro">Codigo do livro</label>
				<input type="text" class="form-control" name="cod_livro" id="cod_livro" placeholder="codigo do livro">
			</div>
			<div class="form-group">
				<label for="nome">Nome do livro</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Codigo do livro">
			</div>
			<div class="form-group">
				<label for="autor">Nome do autor</label>
				<input type="text" class="form-control"  name="autor" id="autor" placeholder="Nome do autor">
			</div>
			<div class="form-group">
				<label for="editora">Nome editora</label>
				<input type="text" class="form-control" name="editora" id="editora" placeholder="Nome da editora">
			</div>
			<div class="form-group">
				<label for="edicao">Edição</label>
				<input type="text" class="form-control"  name="edicao" id="edicao" placeholder="Edição">
			</div>
			<div class="form-group">
    			<label for="capa">Capa do livro</label>
    			<input type="file" id="capa"  name="capa">
    			<p class="help-block">Imagem do livro</p>
  			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
