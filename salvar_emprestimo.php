<?php
include('conexao.php');
<<<<<<< HEAD

$codigo = $_POST['codigo'];
$data_reserva = $_POST['data'];
$prazo = $_POST['prazo'];
$matricula = $_POST['matricula'];

$query1 = " SELECT * FROM usuarios WHERE id = " .$matricula;
$query2 = " SELECT * FROM livros WHERE cod_livro = " .$codigo;
=======
include('menu.php');

$codigo = $_POST['codigo'];
$data_reserva = date('d/m/y');
$prazo = strtotime($data_reserva. ' + 30 days');
$matricula = $_POST['matricula'];

$query1 = " SELECT * FROM usuarios WHERE id = " .$matricula;
$query2 = " SELECT * FROM exemplares WHERE id = " .$codigo ." AND disponibilidade = 1";
>>>>>>> c90c8bf8cfc62d9b6a4087816d141ea8320d68d5


$verificaUsuario = mysqli_query($dbc,$query1) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
	<script type=\"text/javascript\">
	alert(\"Ocorreu um problema.\");
       </script>");
<<<<<<< HEAD
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
=======
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
>>>>>>> c90c8bf8cfc62d9b6a4087816d141ea8320d68d5
            </script>";
        }
        mysqli_close($dbc); 
    }else{
<<<<<<< HEAD
        echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
        <script type=\"text/javascript\">
        alert(\" esse livros não faz parte do acervo\");
        </script>"; 
    }
}else{
    echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/reserva.html'>
        <script type=\"text/javascript\">
        alert(\"esse usuario nao existe \");
=======
        echo"
        <script type=\"text/javascript\">
        alert(\" Esse exemplar não esta disponivel\");
        </script>"; 
    }
}else{
    echo"
        <script type=\"text/javascript\">
        alert(\"Usuario nao existe \");
>>>>>>> c90c8bf8cfc62d9b6a4087816d141ea8320d68d5
        </script>";
}      
?>