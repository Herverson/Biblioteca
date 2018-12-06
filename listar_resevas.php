<?php include("menu.php"); 
include "verficar.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.css" rel=stylesheet>
<title>Listar reservas</title>
</head>

<body>
    <?php require_once "conexao.php" 
    ?>
    <div class="container">
      <div class="row">
          <div class="col-lg-10">
    
          <table class="table table-bordered table-hover">
            <tr>
            <td>Matricula</td>
            <td>Codigo livro</td>
            <td>Data reserva</td>
            <td>Prazo</td>
            </tr>
    
             <?php
         
          $query = "SELECT * FROM reservas ORDER BY data_reserva";
          
          $result = mysqli_query($dbc, $query);
          while ($reserva = mysqli_fetch_array($result)) 
          {
            
             ?>
            <tr>
            <td><?php  $Matricula = $reserva["id_usuario"]; echo "$Matricula<br>"; ?> </td>
            <td><?php  $codigo_livro = $reserva["cod_livro"]; 
            echo "$codigo_livro<br>"; ?> </td>
            <td><?php  $data = $reserva["data_reserva"]; echo "$data<br>"; ?> </td>
            <td><?php  $prazo = $reserva["prazo"]; echo "$prazo<br>"; ?> </td>

           
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