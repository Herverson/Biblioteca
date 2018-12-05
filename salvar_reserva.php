<?php
include('conexao.php');
$matricula = $_POST['matricula'];
$codigo = $_POST['codigo'];
$data_reserva = $_POST['data'];
$prazo = $_POST['prazo'];

$query1 = " SELECT * FROM usuarios WHERE id = " .$matricula;
$query2 = " SELECT * FROM livros WHERE cod_livro = " .$codigo;


$verificaUsuario = mysqli_query($dbc,$query1) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
	<script type=\"text/javascript\">
	alert(\"Ocorreu um problema.\");
       </script>");
 $verificaLivro = mysqli_query($dbc,$query1) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
 <script type=\"text/javascript\">
 alert(\"Ocorreu um problema.\");
</script>");

if (mysqli_num_rows($verificaUsuario)>0){
    if(mysqli_num_rows($verificaLivro)>0){
        $query3 = " INSERT INTO reservas(id_usuario,cod_livro,data_reserva,prazo) VALUES ('$matricula','$codigo','$data_reserva','$prazo')";
            mysqli_query($dbc, $query3)
            or die ("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
            <script type=\"text/javascript\">
            alert(\"problema na reserva\");
            </script>");
        if($query3)
        {
            echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'><script type=\"text/javascript\">
            alert(\"Reserva realizada com sucesso.\");
            </script>";
        }
        mysqli_close($dbc); 
    }else{
        echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
        <script type=\"text/javascript\">
        alert(\" esse livros não faz parte do acervo\");
        </script>"; 
    }
}else{
    echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
        <script type=\"text/javascript\">
        alert(\"esse usuario nao existe \");
        </script>";
}      
?>