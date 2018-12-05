<?php
include('conexao.php');
include('menu.php');
$cod_livro = $_POST['cod_livro'];
$ano = $_POST['ano'];
$estado = $_POST['estado'];
$disponibilidade = $_POST['disponibilidade'];

$query = "INSERT INTO exemplares (cod_livro, ano, estado, disponibilidade)  VALUES ('$cod_livro', '$ano', '$estado', '$disponibilidade')";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_exemplar.php'>
	  <script type=\"text/javascript\">
	  alert(\"Problema na solicitação\");
	  </script>");
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_exemplar.html'><script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>