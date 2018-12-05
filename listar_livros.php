<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel=stylesheet>
<title>Lista Livros</title>
</head>

<body>
<?php require_once "conexao.php" ?>
<div class="container">
	<div class="row">
    	<div class="col-lg-10">

			<table class="table table-bordered table-hover">
			  <tr>
				<td>Codigo</td>
				<td>Nome</td>
				<td>Autor</td>
				<td>Editora</td>
        <td>Edição</td>
        <td>Capa</td>
			  </tr>

	       <?php
     
			$query = "SELECT * FROM livros ORDER BY nome";
			
			$result = mysqli_query($dbc, $query);
			while ($livro = mysqli_fetch_array($result)) 
			{
				
     		?>
			  <tr>
				<td><?php  $Codigo = $livro["cod_livro"]; echo "$Codigo<br>"; ?> </td>
				<td><?php  $nome = $livro["nome"]; echo "$nome<br>"; ?> </td>
				<td><?php  $autor = $livro["autor"]; echo "$autor<br>"; ?> </td>
				<td><?php  $editora = $livro["editora"]; echo "$editora<br>"; ?> </td>
        <td><?php  $edicao = $livro["edicao"]; echo "$edicao<br>"; ?> </td>
       
			</tr>
    <?php
    }
    ?>
    </table>
</div>
</div>
	  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
