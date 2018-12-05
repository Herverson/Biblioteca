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
				<input type="text" class="form-control" id="matricula" placeholder="matricula">
			</div>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" placeholder="nome">
			</div>
			<div class="form-group">
				<label for="contato">Contato</label>
				<input type="text" class="form-control" id="contato" placeholder="contato">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="text" class="form-control" id="senha" placeholder="senha">
			</div>
			<!--<div class="form-group">
    			<label for="avatar">Avatar</label>
    			<input type="file" id="avatar">
    			<p class="help-block">Imagem do usuário</p>
			</div>-->
			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" id="cpf" placeholder="CPF">
			</div>
			<td><input type="hidden" name="acao" value="cadastra_usuario"></td>
			<td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
		</form>
	</div>
<body>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>