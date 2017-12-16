<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco ="aeta";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Autenticando Usuario</title>
	<script type="text/javascript">
	function loginsucessfullyGerente(){
		setTimeout("window.location='mainGerente.html'",1000);
	}
	function loginsucessfullyAssociado(){
		setTimeout("window.location='mainAssociado.html'",1000);
	}
	function loginsucessfullyAdministrativo(){
		setTimeout("window.location='mainAdministrativo.html'",1000);
	}
	function loginsucessfullyConsulta(){
		setTimeout("window.location='mainConsulta.html'",1000);
	}
	function loginfailed(){
		setTimeout("window.location='main.html'",1000);
	}
	</script>
</head>
<body>



<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM associado WHERE email = '$email' and senha = '$senha' ") or die(mysql_error());
$row = mysql_num_rows($sql);
//$linha=mysql_fetch_array($sql);
//print_r($linha['nivelacesso']);

if($row >0){
    $linha=mysql_fetch_array($sql);
	$nivelacesso = $linha['nivelacesso'];
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSIOn['senha']=$_POST['senha'];
	echo"Você foi autenticado com Sucesso!";
	if($nivelacesso == "Gerente"){
	echo"<script>loginsucessfullyGerente()</script>";
	}else if($nivelacesso == "Associado"){
		echo"<script>loginsucessfullyAssociado()</script>";
	}else if($nivelacesso == "Administrativo"){
		echo"<script>loginsucessfullyAdministrativo()</script>";
	}else if($nivelacesso == "Consulta"){
		echo"<script>loginsucessfullyConsulta()</script>";
	}
}else{
	echo "<center>Nome de usuario ou senha invalido.. Aguarde um instante para tentar novamente</center>";
	echo"<script>loginfailed()</script>";
}
?>

</body>
</html>
