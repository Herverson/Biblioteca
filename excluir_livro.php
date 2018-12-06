<?php
include "conexao.php";

$cod_livro = '112';
	  
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
			if($query2){
				echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.php'><script type=\"text/javascript\">
            alert(\"livro excluido com sucesso.\");
            </script>";
			}
        }
        mysqli_close($dbc);
?>
