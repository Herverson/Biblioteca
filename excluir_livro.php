<?php
include "conexao.php";

$cod_livro = $_GET['cod_livro'];
	  
$query1 = "DELETE FROM exemplares WHERE cod_livro = ".$cod_livro;
mysqli_query($dbc, $query1)
            or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/index.php'>
            <script type=\"text/javascript\">
            alert(\"problema na exclusão\");
            </script>");
        if($query1)
        {
			$query2 = "DELETE FROM livros WHERE cod_livro = ".$cod_livro;
			mysqli_query($dbc, $query2)
            or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/index.php'>
            <script type=\"text/javascript\">
            alert(\"problema na exclusão\");
			</script>");
			if($query2)
			{
				header("location:listar_livros.php");
			}
        }
		else
		{
			echo '<div class="alert alert-danger" role="alert">Erro ao excluir.</div>';
		     header("location:listar_livros.php");
		}
        mysqli_close($dbc);
?>
