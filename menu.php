<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" class="active" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cad_livro.php">Livro</a></li>
            <li><a href="cad_bibliotecario.php">Bibliotecário</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="listar_livros.php">Livros</a></li>
            <li><a href="listar_resevas.php">Reservas</a></li>
          </ul>
        </li>
        <li><a href="reserva.php">Reserva</a></li>
        <?php 
			if((isset($_SESSION['usuario'])) && (isset($_SESSION['senha'])))
		  		echo "<li><a href=login.php>Login</a></li>";
		  ?>
        
      </ul>
</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>