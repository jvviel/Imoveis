<?php 
	require_once('connection.php');
	require_once('dao.php');

	if(isset($_POST['btn_logar'])){
		$user = $_POST['user'];
		$senha = $_POST['senha'];

		session_start();
		if($user == ""){
			$redirect = "../login.php";
			$_SESSION['danger'] = "Campo username vazio!";
		} else if($senha == "") {
			$redirect = "../login.php";
			$_SESSION['danger'] = "Campo senha vazio!";
		} else {
			$query = "SELECT * FROM login WHERE name_user = '" . $user . "'";
			$userQuery = selectById($link, $query);

			if($userQuery != null) {
				if($userQuery['name_user'] == $user && $userQuery['pass_user'] == $senha) {
					if($userQuery['perm_stats'] == "A") {
						$redirect = "../admin.php";
						$_SESSION['user'] = $userQuery['name_user'];
						$_SESSION['stats'] = $userQuery['perm_stats'];
					} else {
						$redirect = "../login.php";
						$_SESSION['stats'] = "C";
					}
				} else {
					$redirect = "../login.php";
					$_SESSION['warning'] = "Username ou Senha inválido!";
				}
			} else {
				$redirect = "../login.php";
				$_SESSION['danger'] = "Usuário não existe!";
			}
		}

		header("Location: " . $redirect);
		die();
	}
?>