<?php
include('conexao.php');
<<<<<<< HEAD
=======
include('menu.php');
>>>>>>> c90c8bf8cfc62d9b6a4087816d141ea8320d68d5
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$senha = $_POST['senha'];
$senha_confirmacao = $_POST['senha_confirmacao'];
$avatar = "avatar";
$matricula = $_POST['matricula'];

if($senha == $senha_confirmacao)
{
	$query = "INSERT INTO usuarios (id, nome, contato, senha, foto)  VALUES ('$matricula','$nome', '$contato',	'$senha', '$avatar')";
   	mysqli_query($dbc, $query)
      or die ("erro");
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/listar_devolucao.html'>
		<script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
}
else
{
	echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cadastro_usuario.php'>
		<script type=\"text/javascript\">
		alert(\"Senhas não iguais.\");
		</script>";
}
?>