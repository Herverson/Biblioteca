<?php
include('conexao.php');
$matricula = $_POST['matricula'];
$cod_exemplar = $_POST['cod_exemplar'];
$data_devolucao  = date('d/m/y');

$query = "INSERT INTO devolucoes (matricula, data, cod_exemplar)  VALUES ('$matricula','$data_devolucao','$cod_exemplar')";
    mysqli_query($dbc, $query)
      or die ();
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/devolucao.php'>
		<script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>