<?php
include('conexao.php');

$matricula = $_POST['matricula']
	  
$query = "DELETE FROM usuarios WHERE matricula = '$matricula'";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cadastro_usuario.php'>
		<script type=\"text/javascript\">
		alert(\"Ocoreu um erro.\");
        </script>");
        //falta colocar a rota 
	if($query)
	{
        //falta colocar a rota de redirecionamento
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cadastro_usuario.php'><script type=\"text/javascript\">
		alert(\"Usuario excluido com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>