<?php
include('conexao.php');
$matricula = $_POST['matricula'];
$cod_exemplar = $_POST['cod_exemplar'];

$query = "INSERT INTO devolucoes (matricula, cod_exemplar)  VALUES ('$matricula', '$cod_exemplar')";
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