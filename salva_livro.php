<?php
include('conexao.php');
$cod_livro = $_POST['cod_livro'];
$nome = $_POST['nome'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$capa = "teste";

	  
$query = "INSERT INTO livros (cod_livro, nome, autor, editora, edicao, capa)  VALUES ('$cod_livro', '$nome', '$autor', '$editora', '$edicao', '$capa')";
    mysqli_query($dbc, $query)
      or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_livro.php'>
		<script type=\"text/javascript\">
		alert(\"problema na remoção\");
		</script>");
	if($query)
	{
		echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/cad_exemplar.html'><script type=\"text/javascript\">
		alert(\"Cadastro realizado com sucesso.\");
		</script>";
	}
	 mysqli_close($dbc); 
?>
