<?php
	require_once('header.php');
	session_start();
?>

	<div class="container-fluid" style="
	background-image: url('images/login-bg.png');
	background-size: 100% 100%;
	background-repeat: no-repeat;">

		<div class="row-fluid col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1" style="
			background-color: #404040;
			color: white;
			margin-top: 10%;
			margin-bottom: 10%;
			padding: 5%;">
			<h2 class="page-header text-center">— Login —</h2>
			<form  id="form_login" method="POST" action="database/login_request.php">
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">@</span>
					<input type="text" name="user" class="form-control" placeholder="Usuário" aria-describedby="basic-addon1">

				</div>
				<br>
				<input type="password" name="senha" class="form-control" placeholder="Senha" aria-describedby="basic-addon1">
				<br>
				<input type="checkbox" name="vehicle" value="">LEMBRAR-ME
	            <button type="submit" name="btn_logar" class="btn btn-primary pull-right">
	            	Logar <i class="fa fa-sign-in" aria-hidden="true"></i>
	            </button>            
            </form>
            <?php 
				/* Verificar Campos*/
				mostrarMensagem("success");
				mostrarMensagem("danger");
				mostrarMensagem("warning");
		 	?>
		</div>	
	</div>
	
<?php
	require_once('footer.php');

    function mostrarMensagem($chave){
		if(isset($_SESSION[$chave])){
	 		echo "<hr><p class='text-center text-$chave  bg-$chave'>" . $_SESSION[$chave] . "</p>";
			session_destroy();
		}
	} 
?>