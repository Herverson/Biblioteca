<?php
include('conexao.php');
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$cod_livro = $_POST['cod_livro'];

$query = "INSERT INTO categorias (id, nome, descricao, cod_livro)  VALUES (NULL,'$nome', '$descricao', '$cod_livro')";
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
