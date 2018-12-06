<?php
include('conexao.php');
include('menu.php');

$codigo = $_POST['codigo'];
$data_reserva = date('d/m/y');
$prazo = strtotime($data_reserva. ' + 30 days');
$matricula = $_POST['matricula'];

$query1 = " SELECT * FROM usuarios WHERE id = " .$matricula;
$query2 = " SELECT * FROM exemplares WHERE id = " .$codigo ." AND disponibilidade = 1";


$verificaUsuario = mysqli_query($dbc,$query1) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
	<script type=\"text/javascript\">
	alert(\"Ocorreu um problema.\");
       </script>");
 $verificaExemplar = mysqli_query($dbc,$query2) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
 <script type=\"text/javascript\">
 alert(\"Ocorreu um problema.\");
 </script>");

if (mysqli_num_rows($verificaUsuario)>0){
    if($query2){
        $query3 = " INSERT INTO emprestimos(cod_exemplar, data_emp, prazo, id_usuario, id_bibliotecario) VALUES ('$codigo','$data_reserva','$prazo','$matricula','1')";
            mysqli_query($dbc, $query3)
            or die ("<script type=\"text/javascript\">
            alert(\"deu erro\");
            </script>");
        if($query3)
        {
            echo"<script type=\"text/javascript\">
            alert(\"Emprestimo Realizado.\");
            </script>";
        }
        mysqli_close($dbc); 
    }else{
        echo"
        <script type=\"text/javascript\">
        alert(\" Esse exemplar não esta disponivel\");
        </script>"; 
    }
}else{
    echo"
        <script type=\"text/javascript\">
        alert(\"Usuario nao existe \");
        </script>";
}      
?>