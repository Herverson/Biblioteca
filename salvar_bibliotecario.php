<?php
include('conexao.php');
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$senha = $_POST['senha'];
$senha_confirmacao = $_POST['senha_confirmacao'];
$foto = "teste";

if($senha == $senha_confirmacao)
{
$query = "INSERT INTO bibliotecarios (nome, contato, senha, foto)  VALUES ('$nome', '$contato', '$senha', '$foto')";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_bibliotecario.php'>
		<script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>");
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/login.php'>
		<script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
}
else
{
	echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_bibliotecario.php'>
		<script type=\"text/javascript\">
		alert(\"Senhas não iguais.\");
		</script>";
}
?>