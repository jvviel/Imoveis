<?php
session_start();

include_once("conexao.php");

$nome = $_POST['nome_completo_cadastro'];
$email = $_POST['email_cadastro'];
$senha  = $_POST['senha_cadastro'];

$sql = "INSERT INTO IMOB_User ( User_Perfil,  User_Nome, User_Password, User_Email) VALUES ( '3' , '$nome' , '$senha' , '$email');";
$execute = mysql_query($sql);

if (mysql_affected_rows() != 0 ){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PortalUnimob/index.html'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com Sucesso.\");
				</script>
			";
		}
		 else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/PortalUnimob/index.html'>
				<script type=\"text/javascript\">
					alert(\"Usuário não foi cadastrado com Sucesso.\");
				</script>
			";
}

?>
