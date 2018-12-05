<?php include("menu.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Usuario</title>
</head>
<div class="container">
		<form id="form1" name="form1" method="post" action="salva_usuario.php">
			<div class="form-group">
				<label for="matricula">matricula</label>
				<input type="text" class="form-control" id="matricula" name="matricula" placeholder="matricula">
			</div>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
			</div>
			<div class="form-group">
				<label for="contato">Contato</label>
				<input type="text" class="form-control" id="contato" name="contato" placeholder="contato">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="text" class="form-control" id="senha" name="senha" placeholder="senha">
			</div>
			<div class="form-group">
				<label for="senha confirmacao">Senha confirmacao</label>
				<input type="text" class="form-control" id="senha comfirmacao" name="senha_comfirmacao" placeholder="senha comfirmacao">
			</div>
			<!--<div class="form-group">
    			<label for="avatar">Avatar</label>
    			<input type="file" id="avatar">
    			<p class="help-block">Imagem do usuário</p>
			</div>-->
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
<body>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>