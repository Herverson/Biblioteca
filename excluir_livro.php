<?php
include "conexao.php";

$cod_livro = $_GET['cod_livro'];
	  
$query = "DELETE FROM livros WHERE cod_livro = '$cod_livro';";
$resultaao = mysqli_query($dbc, $query)
      or die ("erro");
        //falta colocar a rota 
	if($resultado)
	{
		header("location:listar_livros.php");
	}
	else
	{
		echo '<div class="alert alert-danger" role="alert">Erro ao excluir.</div>';
		header("location:listar_livros.php");
	}
	 mysqli_close($dbc); 
?>
