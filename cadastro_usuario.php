<?php include"menu.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<title>Cadastro usuario</title>
</head>

<body>
	<div class="container">
	<h1
	>teste</h1>
		<form id="form1" name="form1" method="post" action="salva_usuario.php">
			<div class="form-group">
				<label for="matricula">Matricula</label>
				<input type="text" class="form-control" id="matricula" name="matricula" placeholder="Matricula">
			</div>
		  <div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
			</div>
			<div class="form-group">
				<label for="contato">Contato</label>
				<input type="text" class="form-control" id="contato" name="contato" placeholder="Contato">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
			</div>
			<div class="form-group">
				<label for="senha_confirmacao">Confirmar Senha</label>
				<input type="password" class="form-control" id="senha_confirmacao" name="senha_confirmacao" placeholder="Confirmar Senha">
			</div>
		  <div class="form-group">
    			<label for="avatar">Avatar</label>
    			<input type="file" id="avatar" name="avatar">
    			<p class="help-block">Imagem do usuário</p>
			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>