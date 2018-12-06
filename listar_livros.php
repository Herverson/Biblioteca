<?php include("menu.php");
include "verificar.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Lista Livros</title>
</head>

<body>
<div class="container">
	<table class="table">
	  <thead>
		<tr>
		  <th>Código do livro</th>
		  <th>Nome</th>
		  <th>Autor</th>
		  <th>Editora</th>
		  <th>Edição</th>
		  <th>Capa</th>
		  <th>Ação</th>
		</tr>
	  </thead>
  	  <tbody>


	       <?php
			require_once('appvars.php');
     		require_once "conexao.php";
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
        		<?php echo '<td><img src="' . BI_UPLOADPATH . $livro['capa'] . '" class="img-fluid" alt="capa livro" height=100 width=auto/></td>'; ?>
        		<td>
        			<?php echo "<a class=btn btn-primary href=editar_livro.php?cod_livro=".$livro['cod_livro']."><i
					class=material-icons>edit</i></a>"; ?>
        			<?php echo "<a class=btn btn-danger href=excluir_livro.php?cod_livro=".$livro['cod_livro']."><i class=material-icons>remove</i></a>"; ?>
        		</td>       
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
