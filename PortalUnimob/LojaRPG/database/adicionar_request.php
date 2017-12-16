<?php 
	require_once('connection.php');
	require_once('dao.php');

	// INSERT & UPDATE - TABELA PRODUTOS //
	if(isset($_POST['add_produtos'])){
		$user = $_POST['userS'];
		$nome = $_POST['name_prod'];
		$descricao = $_POST['desc_prod'];
		$valor = $_POST['valor_prod'];
		$categoriaID = $_POST['categoria'];
		$sistema = $_POST['sistema_rpg'];
		$pathImg = $_POST['path_img'];
		$fornecID = $_POST['id_fornec'];

		session_start();
		if($nome != ""){
			if($descricao != ""){
				if($valor != ""){
					if($categoriaID != ""){
						if($sistema != ""){
							if($pathImg != ""){
								if($fornecID != ""){
									if(isset($_POST['id_produto']) && $_POST['id_produto'] != "") {
										$id = $_POST['id_produto'];
										$query = "UPDATE produtos SET name_prod = '$nome', desc_prod = '$descricao', valor_prod = $valor, categoria = $categoriaID, sistema_rpg = '$sistema', path_img = '$pathImg', id_fornec = $fornecID WHERE id_produto = " . $id;
									} else {
										$query = "INSERT INTO produtos (name_prod, desc_prod, valor_prod, categoria, sistema_rpg, path_img, id_fornec) VALUES ('$nome', '$descricao', $valor, $categoriaID, '$sistema', '$pathImg', $fornecID);";
									}


									$_SESSION['user'] = $user;
									if(adicionar($link, $query)) {
										$var = "Inseriu";

										$redirect = "../admin.php#produtos";
										var_dump($var);
									} else {
										$var = "Não Inseriu";

										$redirect = "../admin.php#produtos";
										var_dump($var);
									}
									header("Location: " . $redirect);
									die();
								}
							}
						}
					}
				}
			}
		}
	}

	if(isset($_POST['add_estoque'])){
		$user = $_POST['userS'];
		$qtde = $_POST['qtde_estoque'];

		session_start();
		if($qtde != ""){
			if(isset($_POST['id_prod']) && $_POST['id_prod'] != "") {
				$id = $_POST['id_prod'];
				$query = "UPDATE estoque SET qtde_estoque = $qtde WHERE id_prod = " . $id;
			} else {
				$query = "INSERT INTO estoque (id_prod, qtde_estoque) VALUES ($id, $qtde);";
			}


			$_SESSION['user'] = $user;
			if(adicionar($link, $query)) {
				$var = "Inseriu";

				$redirect = "../admin.php#estoque";
				var_dump($var);
			} else {
				$var = "Não Inseriu";

				$redirect = "../admin.php#estoque";
				var_dump($var);
			}
			header("Location: " . $redirect);
			die();
		}
	}

	if(isset($_POST['add_categoria'])){
		$user = $_POST['userS'];
		$nome = $_POST['nome_categoria'];

		session_start();
		if($nome != ""){
			if(isset($_POST['id_categoria']) && $_POST['id_categoria'] != "") {
				$id = $_POST['id_categoria'];
				$query = "UPDATE categorias SET nome_categoria = '$nome' WHERE id_categoria = " . $id;
			} else {
				$query = "INSERT INTO categorias (nome_categoria) VALUES ('$nome');";
			}


			$_SESSION['user'] = $user;
			if(adicionar($link, $query)) {
				$var = "Inseriu";

				$redirect = "../admin.php#categorias";
				var_dump($var);
			} else {
				$var = "Não Inseriu";

				$redirect = "../admin.php#categorias";
				var_dump($var);
			}
			header("Location: " . $redirect);
			die();
		}
	}

	if(isset($_POST['add_fornecedor'])){
		$user = $_POST['userS'];
		$name = $_POST['name'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cnpj = $_POST['cnpj'];

		session_start();
		if($name != ""){
			if($cidade != ""){
				if($estado != ""){
					if($cnpj != ""){
						if(isset($_POST['id_fornec']) && $_POST['id_fornec'] != "") {
							$id = $_POST['id_fornec'];
							$query = "UPDATE fornecedor SET name = '$name', cidade = '$cidade', estado = '$estado', cnpj = '$cnpj'  WHERE id_fornec = " . $id;
						} else {
							$query = "INSERT INTO fornecedor (name, cidade, estado, cnpj) VALUES ('$name', '$cidade', '$estado', '$cnpj');";
						}


						$_SESSION['user'] = $user;
						if(adicionar($link, $query)) {
							$var = "Inseriu";

							$redirect = "../admin.php#fornecedores";
							var_dump($var);
						} else {
							$var = "Não Inseriu";

							$redirect = "../admin.php#fornecedores";
							var_dump($var);
						}
						header("Location: " . $redirect);
						die();
					}
				}
			}
		}
	}

	if(isset($_POST['add_avaliacao'])){
		$id = $_POST['id_produto'];
		$user = $_POST['userS'];
		$avalia_med = $_POST['avalia_med'];
		$num_avalia = $_POST['num_avalia'];
		$avalia = $_POST['avalia'];

		session_start();
		if($avalia_med != ""){
			if($num_avalia != ""){
				if($avalia != ""){
					if($id != "") {
						$query = "INSERT INTO avalia_produto (avalia_med, num_avalia, avalia) VALUES ($avalia_med, $num_avalia, $avalia);";

						$_SESSION['user'] = $user;
						if(adicionar($link, $query)) {
							$var = "Inseriu";

							$redirect = "../admin.php#avalia";
							var_dump($var);
						} else {
							$var = "Não Inseriu";

							$redirect = "../admin.php#avalia";
							var_dump($var);
						}
						header("Location: " . $redirect);
						die();
					}
				}
			}
		}
	}

	if(isset($_POST['add_login'])){
		$query = "";
		$user = $_POST['userS'];
		$id = $_POST['id_user'];
		$name_user = $_POST['name_user'];
		$pass_user = $_POST['pass_user'];
		$perm_stats = $_POST['perm_stats'];

		session_start();
		if($perm_stats != ""){
			if($name_user != ""){
				if($pass_user != ""){
					if($id){
						$id = $_POST['id_user'];
						$query = "INSERT INTO login (id_user, name_user, pass_user, perm_stats) VALUES ($id, '$name_user', '$pass_user', '$perm_stats');";

						$_SESSION['user'] = $user;
						if(adicionar($link, $query)) {
							$var = "Inseriu";

							$redirect = "../admin.php#login";
							var_dump($var);
						} else {
							$var = "Não Inseriu";

							$redirect = "../admin.php#login";
							var_dump($var);
						}
						header("Location: " . $redirect);
						die();
					}
					
				}
			}
		}
	}

	if(isset($_POST['add_user'])){
		$user = $_POST['userS'];
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$idade = $_POST['idade'];
		$doc_ident = $_POST['doc_ident'];
		$cpf = $_POST['cpf'];
		$id_local = $_POST['id_local'];
		$telefone = $_POST['telefone'];

		session_start();
		if($nome != ""){
			if($sobrenome != ""){
				if($idade != ""){
					if($doc_ident != ""){
						if($cpf != ""){
							if($id_local != ""){
								if($telefone != ""){
									if(isset($_POST['id_user']) && $_POST['id_user'] != "") {
										$id = $_POST['id_user'];
										$query = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', idade = $idade, doc_ident = '$doc_ident', cpf = '$cpf', id_local = $id_local, telefone = '$telefone' WHERE id_user = " . $id;
									} else {
										$query = "INSERT INTO usuario (nome, sobrenome, idade, doc_ident, cpf, id_local, telefone) VALUES ('$nome', '$sobrenome', $idade, '$doc_ident', '$cpf', $id_local, '$telefone');";
									}


									$_SESSION['user'] = $user;
									if(adicionar($link, $query)) {
										$var = "Inseriu";

										$redirect = "../admin.php#usuario";
										var_dump($var);
									} else {
										$var = "Não Inseriu";

										$redirect = "../admin.php#usuario";
										var_dump($var);
									}
									header("Location: " . $redirect);
									die();
								}
							}
						}
					}
				}
			}
		}
	}

	if(isset($_POST['add_local'])){
		$user = $_POST['userS'];
		$cep = $_POST['cep'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$rua = $_POST['rua'];
		$num_casa = $_POST['num_casa'];
		$bairro = $_POST['bairro'];

		session_start();
		if($cep != ""){
			if($cidade != ""){
				if($estado != ""){
					if($rua != ""){
						if($num_casa != ""){
							if($bairro != ""){
								if(isset($_POST['id_local']) && $_POST['id_local'] != "") {
									$id = $_POST['id_local'];
									$query = "UPDATE local_entrega SET cep = '$cep', cidade = '$cidade', estado = '$estado', rua = '$rua', num_casa = $num_casa, bairro = '$bairro' WHERE id_local = " . $id;
								} else {
									$query = "INSERT INTO local_entrega (cep, cidade, estado, rua, num_casa, bairro) VALUES ('$cep', '$cidade', '$estado', '$rua', $num_casa, '$bairro');";
								}


								$_SESSION['user'] = $user;
								if(adicionar($link, $query)) {
									$var = "Inseriu";

									$redirect = "../admin.php#local";
									var_dump($var);
								} else {
									$var = "Não Inseriu";

									$redirect = "../admin.php#local";
									var_dump($var);
								}
								header("Location: " . $redirect);
								die();
							}
						}
					}
				}
			}
		}
	}

?>