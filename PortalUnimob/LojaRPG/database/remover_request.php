<?php
	require_once('connection.php');
	require_once('dao.php');
	session_start();

	if(isset($_GET['produtos'])){
		$id = $_GET['produtos'];
		$query = "DELETE FROM produtos WHERE id_produto = " . $id . ";";

		if(delete($link, $query)){
			header("Location: ../admin.php#produtos");
			die();	
		} else {
			header("Location: ../admin.php#produtos");
			die();	
		}
	}

	if(isset($_GET['estoque'])){
		$id = $_GET['estoque'];
		$query = "DELETE FROM estoque WHERE id_produto = " . $id . ";";

		if(delete($link, $query)){
			header("Location: ../admin.php#estoque");
			die();	
		} else {
			header("Location: ../admin.php#estoque");
			die();	
		}
	}

	if(isset($_GET['categoria'])){
		$id = $_GET['categoria'];
		$query = "DELETE FROM categorias WHERE id_categoria = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#categorias");
			die();	
		} else {
			header("Location: ../admin.php#categorias");
			die();	
		}
	}

	if(isset($_GET['fornecedor'])){
		$id = $_GET['fornecedor'];
		$query = "DELETE FROM fornecedor WHERE id_fornec = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#fornecedores");
			die();	
		} else {
			header("Location: ../admin.php#fornecedores");
			die();	
		}
	}

	if(isset($_GET['avaliacao'])){
		$id = $_GET['avaliacao'];
		$query = "DELETE FROM avalia_produto WHERE id_produto = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#avalia");
			die();	
		} else {
			header("Location: ../admin.php#avalia");
			die();	
		}
	}

	if(isset($_GET['login'])){
		$id = $_GET['login'];
		$query = "DELETE FROM login WHERE id_user = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#login");
			die();	
		} else {
			header("Location: ../admin.php#login");
			die();	
		}
	}

	if(isset($_GET['user'])){
		$id = $_GET['user'];
		$query = "DELETE FROM usuario WHERE id_user = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#usuario");
			die();	
		} else {
			header("Location: ../admin.php#usuario");
			die();	
		}
	}

	if(isset($_GET['local'])){
		$id = $_GET['local'];
		$query = "DELETE FROM local_entrega WHERE id_local = " . $id;

		if(delete($link, $query)){
			header("Location: ../admin.php#local");
			die();	
		} else {
			header("Location: ../admin.php#local");
			die();	
		}
	}
?>