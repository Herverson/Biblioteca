<?php
include('conexao.php');
$cod_livro = $_POST['cod_livro'];
$ano = $_POST['ano'];
$estado = $_POST['estado'];
$disponibilidade = $_POST['disponibilidade'];

$query = "INSERT INTO exemplares (cod_livro, ano, estado, disponibilidade)  VALUES ('$cod_livro', '$ano', '$estado', '$disponibilidade')";
    mysqli_query($dbc, $query)
      or die ();
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/listar_devolucao.html'>
		<script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>