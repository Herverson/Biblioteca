<!doctype html>
<html>
<head>
<link href="css/bootstrap.css" rel=stylesheet>
<meta charset="utf-8">
<title>Listar Devoluçoes</title>
</head>
<body>
    <?php require_once "conexao.php" 
    ?>
    <div class="container">
      <div class="row">
          <div class="col-lg-10">
    
          <table class="table table-bordered table-hover">
            <tr>
            <td>Identificado Emprestimo</td>
            <td>Data</td>
            <td>Identicação bibliotecario</td>
            </tr>
    
             <?php
         
          $query = "SELECT * FROM devolucoes ORDER BY data";
          
          $result = mysqli_query($dbc, $query);
          while ($devolucao = mysqli_fetch_array($result)) 
          {
            
             ?>
            <tr>
            <td><?php  $Identificacao = $devolucao["id_emprestimo"]; echo "$Identificacao<br>"; ?> </td>
            <td><?php  $Data = $devolucao["data"]; echo "$Data<br>"; ?> </td>
            <td><?php  $Identificacao_bibli = $devolucao["id_bibliotecario"];
            $query2 = "SELECT * FROM bibliotecario id = " .$Identificacao_bibli;
            $result2 = mysqli_query($dbc, $query2);
             echo "$result2<br>"; ?> </td>
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