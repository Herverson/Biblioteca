<?php
 include("menu.php");
include "verificar.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Cadastro do livro</title>
</head>

<body>
	<div class="container">
<?php
require_once('appvars.php');
 require_once('conexao.php');
  if (isset($_POST['submit'])) 
  {
	$cod_livro = $_POST['cod_livro'];
	$nome = $_POST['nome'];
	$autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $edicao = $_POST['edicao'];
    $capa = $_FILES['capa']['name'];
	$screenshot_type = $_FILES['capa']['type'];
    $screenshot_size = $_FILES['capa']['size'];  

    if (!empty($cod_livro) && !empty($nome) && !empty($autor))
	{
      if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') || ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png'))
        && ($screenshot_size > 0) && ($screenshot_size <= BI_MAXFILESIZE)) 
	  {
        if ($_FILES['capa']['error'] == 0) 
		{
          // move o arquivo para target pasta upload
          $target = BI_UPLOADPATH . $capa;
          if (move_uploaded_file($_FILES['capa']['tmp_name'], $target)) 
		  {
            
            // escreve no banco
			$query = "INSERT INTO livros VALUES ('$cod_livro', '$nome', '$autor', '$editora', '$edicao', '$capa')";
            mysqli_query($dbc, $query);

            // Confirma sucesso com o usuário
            echo '<div class="alert alert-success" role="alert">
  					Livro cadastrado com sucesso.
				  </div>';
            echo '<p><strong>Nome:</strong> ' . $nome . '<br />';
            echo '<strong>Autor:</strong> ' . $autor . '<br />';
            echo '<img src="' . BI_UPLOADPATH . $capa . '" alt="Livro imagem" alt="capa livro" height=100 width=auto/></p>';

            // limpa o form
            $cod_livro = "";
			$nome = "";
			$autor = "";
    		$editora = "";
    		$edicao = "";
    		$capa = "";

            mysqli_close($dbc);
          }
          else 
		  {
            echo '<div class="alert alert-danger" role="alert">
  Erro ao inserir a imagem.
</div>';
          }
        }
      }
      else 
	  {
        echo '<div class="alert alert-danger" role="alert"> Imagem com extensão GIF, JPEG, or PNG image e não superior a ' . (BI_MAXFILESIZE / 1024) . ' KB .</div>';
      }

      // Try to delete the temporary screen shot image file
      @unlink($_FILES['capa']['tmp_name']);
    }
    else 
	{
      echo '<div class="alert alert-danger" role="alert">Preencha todos os campos.</div>';
    }
  }
?>

		<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo BI_MAXFILESIZE; ?>" />
			<div class="form-group">
				<label for="cod_livro">Codigo do livro</label>
				<input type="text" class="form-control" name="cod_livro" id="cod_livro" placeholder="Código do livro" value="<?php if (!empty($cod_livro)) echo $cod_livro; ?>" >
			</div>
			<div class="form-group">
				<label for="nome">Nome do livro</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do livro" value="<?php if (!empty($nome)) echo $nome; ?>">
			</div>
			<div class="form-group">
				<label for="autor">Nome do autor</label>
				<input type="text" class="form-control"  name="autor" id="autor" placeholder="Nome do autor" value="<?php if (!empty($autor)) echo $autor; ?>">
			</div>
			<div class="form-group">
				<label for="editora">Nome editora</label>
				<input type="text" class="form-control" name="editora" id="editora" placeholder="Nome da editora" value="<?php if (!empty($editora)) echo $editora; ?>">
			</div>
			<div class="form-group">
				<label for="edicao">Edição</label>
				<input type="text" class="form-control"  name="edicao" id="edicao" placeholder="Edição" value="<?php if (!empty($edicao)) echo $edicao; ?>">
			</div>
			<div class="form-group">
    			<label for="capa">Capa</label>
    			<input type="file" id="capa" name="capa" />
  			</div>
			<input type="submit" value="Cadastrar" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
