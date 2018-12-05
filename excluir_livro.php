<?php
include('conexao.php');

$cod_livro = $_POST['cod_livro'];
	  
$query = "DELETE FROM livros WHERE cod_livro = '$cod_livro'";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/#'>
		<script type=\"text/javascript\">
		alert(\"Ocorreu um problema.\");
        </script>");
        //falta colocar a rota 
	if($query)
	{
        //falta colocar a rota de redirecionamento
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/#'><script type=\"text/javascript\">
		alert(\"Livro excluido com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>