<?php 
include('conexao.php');

$login = $_POST['Matricula'];
$senha = $_POST['Senha'];

$sql = "SELECT * FROM usuarios WHERE id = " .$login ." AND senha = ".$senha;

$verifica = mysqli_query($dbc,$sql) or die("<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/login.php'>
	<script type=\"text/javascript\">
	alert(\"Ocorreu um problema.\");
       </script>");
if (mysqli_num_rows($verifica)<=0){
    echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/login.php'>
    <script type=\"text/javascript\">
    alert(\"Login ou senhas incorretos.\");
    </script>";
}else{
	session_start();
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
    echo"<META HTTP-EQUIV=REFRESH CONTENT='0; URL=http://localhost/biblioteca/index.php'>
    <script type=\"text/javascript\">
    alert(\"Bem vindo.\");
    </script>";
	}
								 
?>
