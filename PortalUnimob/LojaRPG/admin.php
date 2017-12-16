<?php
	require_once('header.php');
	/* BD */
	require_once('database/connection.php');
	require_once('database/dao.php');

	session_start();
?>
	<script type="text/javascript">
		function editarProdutos(id){
			window.location.href = "admin.php?produtos=" + id + "#produtos";
		}

		function removerProdutos(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?produtos=" + id;
			}
		}

		function editarEstoque(id){
			window.location.href = "admin.php?estoque=" + id + "#estoque";
		}

		function removerEstoque(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?estoque=" + id;
			}
		}

		function editarCategorias(id){
			window.location.href = "admin.php?categoria=" + id + "#categorias";
		}

		function removerCategorias(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?categoria=" + id;
			}
		}

		function editarFornecedor(id){
			window.location.href = "admin.php?fornecedor=" + id + "#fornecedores";
		}

		function removerFornecedor(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?fornecedor=" + id;
			}
		}

		function editarAvalia(id){
			window.location.href = "admin.php?avaliacao=" + id + "#avalia";
		}

		function removerAvalia(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?avaliacao=" + id;
			}
		}

		function editarLogin(id){
			window.location.href = "admin.php?login=" + id + "#login";
		}

		function removerLogin(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?login=" + id;
			}
		}

		function editarUser(id){
			window.location.href = "admin.php?usuario=" + id + "#usuario";
		}

		function removerUser(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?usuario=" + id;
			}
		}

		function editarLocal(id){
			window.location.href = "admin.php?local=" + id + "#local";
		}

		function removerLocal(id){
			if(confirm("Deseja Remover?")){
				window.location.href = "database/remover_request.php?local=" + id;
			}
		}
	</script>

	<hr>
	<!-- HEADER -->
    <div class="container" style="font-family: 'Franklin Gothic'; color: white;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Área do Administrador
                    <small>
                        Seja Bem-vindo <a href="login.php" style="font-family: 'Phoenixians'; color: #1E90FF;"><?php getAdmin(); ?></a>
                    </small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>
    </div>

	<!-- TABELA DE PRODUTOS -->
	<div id="produtos" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Produtos
                    <small>Table_name: produtos</small>
                </h1>
            </div>
        </div>
	 	<table id="table1" class="table table-bordered table-striped text-center">
		 	<thead>
		 		<tr>
		 			<th>Foto</th>
		 			<th>ID:</th>
		 			<th>Nome do Produto:</th>
		 			<th>Descrição:</th>
		 			<th>Valor:</th>
		 			<th>Categoria [id_categoria]:</th>
		 			<th>Sistema de RPG:</th>
		 			<th>Caminho da Imagem:</th>
		 			<th>Fornecedor [id_fornec]:</th>
		 			<th>Editar:</th>
		 			<th>Excluir:</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM produtos;";
				$produtos = selectAll($link, $query);

				for($i = 0; $i < count($produtos); $i++){
					$produto = $produtos[$i];
					echo "<tr>";
					echo "<td><img src='" . $produto['path_img'] . "' width=100px/></td>";
					echo "<td>" . $produto['id_produto'] . "</td>";
					echo "<td>" . $produto['name_prod'] . "</td>";
					echo "<td>" . substr($produto['desc_prod'], 0, 50) . "...</td>";
					echo "<td>" . $produto['valor_prod'] . "</td>";
					echo "<td>" . $produto['categoria'] . "</td>";
					echo "<td>" . $produto['sistema_rpg'] . "</td>";
					echo "<td>" . $produto['path_img'] . "</td>";
					echo "<td>" . $produto['id_fornec'] . "</td>";
					echo "<td><button onclick='editarProdutos(" . $produto['id_produto'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerProdutos(" . $produto['id_produto'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>		 	
			</tbody>
	 	</table>
	 	<br>	
			 	<?php
					$id = "";
					$nome  = "";
					$descricao = "";
					$valor = "";
					$categoriaID = "";
					$sistema = "";
					$pathImg = "";
					$fornecID  = "";

					if(isset($_GET['produtos'])){
						$id = $_GET['produtos'];

						$query = "SELECT * FROM produtos WHERE id_produto = " . $id;

						$edit = selectById($link, $query);

						$nome = $edit['name_prod'];
						$descricao = $edit['desc_prod'];
						$valor = $edit['valor_prod'];
						$categoriaID = $edit['categoria'];
						$sistema = $edit['sistema_rpg'];
						$pathImg = $edit['path_img'];
						$fornecID = $edit['id_fornec'];

					}
				?>
				<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="text" name="id_produto" value="<?=$id?>" class="form-control" placeholder="ID" aria-describedby="basic-addon1">
			 		<input type="text" name="name_prod" value="<?=$nome?>" class="form-control" placeholder="Nome do Produto" aria-describedby="basic-addon1">
			 		<input type="text" name="desc_prod" value="<?=$descricao?>" class="form-control" placeholder="Descrição do Produto" aria-describedby="basic-addon1">
			 		<input type="number" step="any" name="valor_prod" value="<?=$valor?>" class="form-control" placeholder="Valor em R$" aria-describedby="basic-addon1">
			 		<input type="number" name="categoria" value="<?=$categoriaID?>" class="form-control" placeholder="Categoria [id_categoria]" aria-describedby="basic-addon1">
			 		<input type="text" name="sistema_rpg" value="<?=$sistema?>" class="form-control" placeholder="Sistema de RPG" aria-describedby="basic-addon1">
			 		<input type="text" name="path_img" value="<?=$pathImg?>" class="form-control" placeholder="Caminho da Imagem" aria-describedby="basic-addon1">
			 		<input type="number" name="id_fornec" value="<?=$fornecID?>" class="form-control" placeholder="Fornecedor [id_fornec]" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success pull-right" name="add_produtos">Adicionar</button>
			 	</form>
			 	</div>
	</div>

	<hr>
	
	<!-- TABELA DE ESTOQUE -->
	<div id="estoque" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Estoque
                    <small>Table_name: estoque</small>
                </h1>
            </div>
        </div>
	 	<table id="table2" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Produto:</th>
	 			<th>Quantidade:</th>
	 			<th>Editar:</th>
	 			<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM estoque;";
				$estoques = selectAll($link, $query);

				for($i = 0; $i < count($estoques); $i++){
					$estoque = $estoques[$i];
					echo "<tr>";
					echo "<td>" . $estoque['id_prod'] . "</td>";
					echo "<td>" . $estoque['qtde_estoque'] . "</td>";
					echo "<td><button onclick='editarEstoque(" . $estoque['id_prod'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerEstoque(" . $estoque['id_prod'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
	 	<br>
			 	<?php
					$id = "";
					$qtde  = "";

					if(isset($_GET['estoque'])){
						$id = $_GET['estoque'];

						$query = "SELECT * FROM estoque WHERE id_prod = " . $id;

						$edit = selectById($link, $query);

						$id = $edit['id_prod'];
						$qtde = $edit['qtde_estoque'];

					}
				?>
				<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_prod" value="<?=$id?>" class="form-control" placeholder="ID do Produto" aria-describedby="basic-addon1">
			 		<input type="number" name="qtde_estoque" value="<?=$qtde?>" class="form-control" placeholder="Quantidade" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_estoque">Adicionar</button>
			 	</form>
			 	</div>
	</div>

	<hr>
	
	<!-- TABELA DE HISTÓRICO DE VENDAS -->
	<div id="vendas" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Histórico de Vendas
                    <small>Table_name: vendas_history</small>
                </h1>
            </div>
        </div>
	 	<table id="table3" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Usuário: </th>
	 			<th>ID do Produto:</th>
	 			<th>Total:</th>
	 			<th>Quantidade do Produto:</th>
			</tr>
			</thead>
			<?php
				$query = "SELECT * FROM vendas_history;";
				$vendas = selectAll($link, $query);

				for($i = 0; $i < count($vendas); $i++){
					$venda = $vendas[$i];
					echo "<tr>";
					echo "<td>" . $venda['id_user'] . "</td>";
					echo "<td>" . $venda['id_prod'] . "</td>";
					echo "<td>" . $venda['total'] . "</td>";
					echo "<td>" . $venda['qtde_prod'] . "</td>";
				}
			?>
	 	</table>
	</div>

	<hr>
	
	<!-- TABELA DE CATEGORIAS -->
	<div id="categorias" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Categorias
                    <small>Table_name: categorias</small>
                </h1>
            </div>
        </div>
	 	<table id="table4" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID:</th>
	 			<th>Nome do Categoria:</th>
	 			<th>Editar:</th>
	 			<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM categorias;";
				$categorias = selectAll($link, $query);

				for($i = 0; $i < count($categorias); $i++){
					$categoria = $categorias[$i];
					echo "<tr>";
					echo "<td>" . $categoria['id_categoria'] . "</td>";
					echo "<td>" . $categoria['nome_categoria'] . "</td>";
					echo "<td><button onclick='editarCategorias(" . $categoria['id_categoria'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerCategorias(" . $categoria['id_categoria'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
			<div class="col-md-6 col-md-offset-3">
			 	<?php
					$id = "";
					$nome_categoria  = "";

					if(isset($_GET['categoria'])){
						$id = $_GET['categoria'];

						$query = "SELECT * FROM categorias WHERE id_categoria = " . $id;

						$edit = selectById($link, $query);

						$id = $edit['id_categoria'];
						$nome_categoria = $edit['nome_categoria'];

					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_categoria" value="<?=$id?>" class="form-control" placeholder="ID da Categoria" aria-describedby="basic-addon1">
			 		<input type="text" name="nome_categoria" value="<?=$nome_categoria?>" class="form-control" placeholder="Nome da Categoria" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_categoria">Adicionar</button>
			 	</form>
			</div>
	</div>

	<hr>
	
	<!-- TABELA DE FORNECEDORES -->
	<div id="fornecedores" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Fornecedores
                    <small>Table_name: fornecedor</small>
                </h1>
            </div>
        </div>
	 	<table id="table5" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID:</th>
	 			<th>Nome:</th>
	 			<th>Cidade:</th>
	 			<th>Estado:</th>
	 			<th>CNPJ:</th>
	 			<th>Editar:</th>
				<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM fornecedor;";
				$fornecedores = selectAll($link, $query);

				for($i = 0; $i < count($fornecedores); $i++){
					$fornecedor = $fornecedores[$i];
					echo "<tr>";
					echo "<td>" . $fornecedor['id_fornec'] . "</td>";
					echo "<td>" . $fornecedor['name'] . "</td>";
					echo "<td>" . $fornecedor['cidade'] . "</td>";
					echo "<td>" . $fornecedor['estado'] . "</td>";
					echo "<td>" . $fornecedor['cnpj'] . "</td>";
					echo "<td><button onclick='editarFornecedor(" . $fornecedor['id_fornec'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerFornecedor(" . $fornecedor['id_fornec'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
	 	<br>
			 	<?php 
					$id = "";
					$name = "";
					$cidade = "";
					$estado = "";
					$cnpj = "";

					if(isset($_GET['fornecedor'])){
						$id = $_GET['fornecedor'];

						$query = "SELECT * FROM fornecedor WHERE id_fornec = " . $id;

						$edit = selectById($link, $query);

						$id = $edit['id_fornec'];
						$name = $edit['name'];
						$cidade = $edit['cidade'];
						$estado = $edit['estado'];
						$cnpj = $edit['cnpj'];
					}
				?>
				<div class="col-md-6 col-md-offset-3">
					<form method="POST" action="database/adicionar_request.php">
						<input type='hidden' name='userS' value='$user'>
				 		<input type="number" name="id_fornec" value="<?=$id?>" class="form-control" placeholder="ID do Fornecedor" aria-describedby="basic-addon1">
				 		<input type="text" name="name" value="<?=$name?>" class="form-control" placeholder="Nome do Fornecedor" aria-describedby="basic-addon1">
				 		<input type="text" name="cidade" value="<?=$cidade?>" class="form-control" placeholder="Cidade" aria-describedby="basic-addon1">
				 		<input type="text" name="estado" value="<?=$estado?>" class="form-control" placeholder="Estado" aria-describedby="basic-addon1">
				 		<input type="text" name="cnpj" value="<?=$cnpj?>" class="form-control" placeholder="CNPJ" aria-describedby="basic-addon1">
				 		<button type="submit" class="btn btn-success name="add_fornecedor">Adicionar</button>
				 	</form>
				</div>
	</div>

	<hr>
	
	<!-- TABELA DE AVALIAÇÃO DE PRODUTOS -->
	<div id="avalia" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Avaliação de Produtos
                    <small>Table_name: avalia_produto</small>
                </h1>
            </div>
        </div>
	 	<table id="table6" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Produto</th>
	 			<th>Média de Avaliações:</th>
	 			<th>Número de Avaliações:</th>
	 			<th>Avaliação:</th>
	 			<th>Editar:</th>
				<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM avalia_produto;";
				$avaliacao = selectAll($link, $query);

				for($i = 0; $i < count($avaliacao); $i++){
					$avalia = $avaliacao[$i];
					echo "<tr>";
					echo "<td>" . $avalia['id_produto'] . "</td>";
					echo "<td>" . $avalia['avalia_med'] . "</td>";
					echo "<td>" . $avalia['num_avalia'] . "</td>";
					echo "<td>" . $avalia['avalia'] . "</td>";
					echo "<td><button onclick='editarAvalia(" . $avalia['id_produto'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerAvalia(" . $avalia['id_produto'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
		 	<div class="col-md-6 col-md-offset-3">
			 	<?php 
					$id = "";
					$avalia_med = "";
					$num_avalia = "";
					$avalia = "";

					if(isset($_GET['avaliacao'])){
						$id = $_GET['avaliacao'];

						$query = "SELECT * FROM avalia_produto WHERE id_produto = " . $id;

						$edit = selectById($link, $query);

						$id = $edit['id_produto'];
						$avalia_med = $edit['avalia_med'];
						$num_avalia = $edit['num_avalia'];
						$avalia = $edit['avalia'];
					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_produto" value="<?=$id?>" class="form-control" placeholder="ID do Produto" aria-describedby="basic-addon1">
			 		<input type="number" name="avalia_med" value="<?=$avalia_med?>" class="form-control" placeholder="Avaliação Média" aria-describedby="basic-addon1">
			 		<input type="number" name="num_avalia" value="<?=$num_avalia?>" class="form-control" placeholder="Número de Avaliações" aria-describedby="basic-addon1">
			 		<input type="number" name="avalia" value="<?=$avalia?>" class="form-control" placeholder="Avaliações" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_avaliacao">Adicionar</button>
			 	</form>
			</div>
	</div>

	<hr>
	
	<!-- TABELA DE HISTÓRICO DE AVALIAÇÕES -->
	<div id="his-avalia" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Histórico de Avaliações
                    <small>Table_name: avalia_history</small>
                </h1>
            </div>
        </div>
	 	<table id="table7" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Usuário:</th>
	 			<th>ID de Produto:</th>
	 			<th>Descrição da Avaliação:</th>
	 			<th>Avaliação:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM avalia_history;";
				$avaliaHistory = selectAll($link, $query);

				for($i = 0; $i < count($avaliaHistory); $i++){
					$hisAvalia = $avaliaHistory[$i];
					echo "<tr>";
					echo "<td>" . $hisAvalia['id_user'] . "</td>";
					echo "<td>" . $hisAvalia['id_produto'] . "</td>";
					echo "<td>" . $hisAvalia['desc_avalia'] . "</td>";
					echo "<td>" . $hisAvalia['avalia'] . "</td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
		 	<div class="col-md-6 col-md-offset-3">
			 	<?php 
					$id_user = "";
					$id_produto = "";
					$desc_avalia = "";
					$avalia = "";

					if(isset($_GET['history'])){
						$id = $_GET['history'];

						$query = "SELECT * FROM avalia_history WHERE id_produto = " . $id;

						$edit = selectById($link, $query);

						$id_user = $edit['id_user'];
						$id_produto = $edit['id_produto'];
						$desc_avalia = $edit['desc_avalia'];
						$avalia = $edit['avalia'];
					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_user" value="<?=$id_user?>" class="form-control" placeholder="ID do Usuário" aria-describedby="basic-addon1">
			 		<input type="number" name="id_produto" value="<?=$id_produto?>" class="form-control" placeholder="ID do Produto" aria-describedby="basic-addon1">
			 		<input type="text" name="desc_avalia" value="<?=$desc_avalia?>" class="form-control" placeholder="Descrição" aria-describedby="basic-addon1">
			 		<input type="number" name="avalia" value="<?=$avalia?>" class="form-control" placeholder="Avaliação" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_history">Adicionar</button>
			 	</form>
			</div>
	</div>

	<hr>
	
	<!-- TABELA DE LOGIN -->
	<div id="login" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Login
                    <small>Table_name: login</small>
                </h1>
            </div>
        </div>
	 	<table id="table8" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID de Usuário:</th>
	 			<th>Username:</th>
	 			<th>Senha:</th>
	 			<th>Permissão:</th>
	 			<th>Editar:</th>
				<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM login;";
				$login = selectAll($link, $query);

				for($i = 0; $i < count($login); $i++){
					$log = $login[$i];
					echo "<tr>";
					echo "<td>" . $log['id_user'] . "</td>";
					echo "<td>" . $log['name_user'] . "</td>";
					echo "<td>" . $log['pass_user'] . "</td>";
					echo "<td>" . $log['perm_stats'] . "</td>";
					echo "<td><button onclick='editarLogin(" . $log['id_user'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerLogin(" . $log['id_user'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
		 	<div class="col-md-6 col-md-offset-3">
			 	<?php 
					$id_user = "";
					$name_user = "";
					$pass_user = "";
					$perm_stats = "";

					if(isset($_GET['login'])){
						$id_user = $_GET['login'];

						$query = "SELECT * FROM login WHERE id_user = " . $id_user;

						$edit = selectById($link, $query);

						$id_user = $edit['id_user'];
						$name_user = $edit['name_user'];
						$pass_user = $edit['pass_user'];
						$perm_stats = $edit['perm_stats'];
					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_user" value="<?=$id_user?>" class="form-control" placeholder="ID do Usuário" aria-describedby="basic-addon1">
			 		<input type="text" name="name_user" value="<?=$name_user?>" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			 		<input type="text" name="pass_user" value="<?=$pass_user?>" class="form-control" placeholder="Senha" aria-describedby="basic-addon1">
			 		<input type="text" name="perm_stats" value="<?=$perm_stats?>" class="form-control" placeholder="Permissão" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_login">Adicionar</button>
			 	</form>
			</div>
	</div>

	<hr>
	
	<!-- TABELA DE USUÁRIOS -->
	<div id="usuario" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Usuários
                    <small>Table_name: usuario</small>
                </h1>
            </div>
        </div>
	 	<table id="table9" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Usuário:</th>
	 			<th>Nome:</th>
	 			<th>Sobrenome:</th>
	 			<th>Idade:</th>
	 			<th>Documento de Identidade:</th>
	 			<th>CPF:</th>
	 			<th>ID do Local:</th>
	 			<th>Telefone:</th>
	 			<th>Editar:</th>
				<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM usuario;";
				$usuarios = selectAll($link, $query);

				for($i = 0; $i < count($usuarios); $i++){
					$usuario = $usuarios[$i];
					echo "<tr>";
					echo "<td>" . $usuario['id_user'] . "</td>";
					echo "<td>" . $usuario['nome'] . "</td>";
					echo "<td>" . $usuario['sobrenome'] . "</td>";
					echo "<td>" . $usuario['idade'] . "</td>";
					echo "<td>" . $usuario['doc_ident'] . "</td>";
					echo "<td>" . $usuario['cpf'] . "</td>";
					echo "<td>" . $usuario['id_local'] . "</td>";
					echo "<td>" . $usuario['telefone'] . "</td>";
					echo "<td><button onclick='editarUser(" . $usuario['id_user'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerUser(" . $usuario['id_user'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
		 	<div class="col-md-6 col-md-offset-3">
			 	<?php 
					$id_user = "";
					$nome = "";
					$sobrenome = "";
					$idade = "";
					$doc_ident = "";
					$cpf = "";
					$id_local = "";
					$telefone = "";

					if(isset($_GET['usuario'])){
						$id_user = $_GET['usuario'];

						$query = "SELECT * FROM usuario WHERE id_user = " . $id_user;

						$edit = selectById($link, $query);

						$id_user = $edit['id_user'];
						$nome = $edit['nome'];
						$sobrenome = $edit['sobrenome'];
						$idade = $edit['idade'];
						$doc_ident = $edit['doc_ident'];
						$cpf = $edit['cpf'];
						$id_local = $edit['id_local'];
						$telefone = $edit['telefone'];
					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_user" value="<?=$id_user?>" class="form-control" placeholder="ID do Usuário" aria-describedby="basic-addon1">
			 		<input type="text" name="nome" value="<?=$nome?>" class="form-control" placeholder="Nome" aria-describedby="basic-addon1">
			 		<input type="text" name="sobrenome" value="<?=$sobrenome?>" class="form-control" placeholder="Sobrenome" aria-describedby="basic-addon1">
			 		<input type="text" name="idade" value="<?=$idade?>" class="form-control" placeholder="Idade" aria-describedby="basic-addon1">
			 		<input type="text" name="doc_ident" value="<?=$doc_ident?>" class="form-control" placeholder="Identidade" aria-describedby="basic-addon1">
			 		<input type="text" name="cpf" value="<?=$cpf?>" class="form-control" placeholder="CPF" aria-describedby="basic-addon1">
			 		<input type="text" name="id_local" value="<?=$id_local?>" class="form-control" placeholder="ID do Local" aria-describedby="basic-addon1">
			 		<input type="text" name="telefone" value="<?=$telefone?>" class="form-control" placeholder="Telefone" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_user">Adicionar</button>
			 	</form>
			</div>
	</div>

	<hr>
	
	<!-- TABELA DE LOCAIS DE ENTREGA -->
	<div id="local" class="container thumbnail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tabela de Locais de Entrga
                    <small>Table_name: local_entrega</small>
                </h1>
            </div>
        </div>
	 	<table id="table10" class="table table-bordered table-striped text-center">
		 	<thead>
	 		<tr>
	 			<th>ID do Local:</th>
	 			<th>CEP:</th>
	 			<th>Cidade:</th>
	 			<th>Estado:</th>
	 			<th>Rua:</th>
	 			<th>Número da Casa:</th>
	 			<th>Bairro:</th>
	 			<th>Editar:</th>
	 			<th>Excluir:</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$query = "SELECT * FROM local_entrega;";
				$locais = selectAll($link, $query);

				for($i = 0; $i < count($locais); $i++){
					$local = $locais[$i];
					echo "<tr>";
					echo "<td>" . $local['id_local'] . "</td>";
					echo "<td>" . $local['cep'] . "</td>";
					echo "<td>" . $local['cidade'] . "</td>";
					echo "<td>" . $local['estado'] . "</td>";
					echo "<td>" . $local['rua'] . "</td>";
					echo "<td>" . $local['num_casa'] . "</td>";
					echo "<td>" . $local['bairro'] . "</td>";
					echo "<td><button onclick='editarLocal(" . $local['id_local'] . ")'><i class='fa fa-pencil-square' aria-hidden='true'></i></button></td>";
					echo "<td><button onclick='removerLocal(" . $local['id_local'] . ")'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
					echo "</tr>";
				}
			?>
			</tbody>
	 	</table>
	 	<div class="col-md-6 col-md-offset-3">
			 	<?php 
					$id_local = "";
					$cep = "";
					$cidade = "";
					$estado = "";
					$rua = "";
					$num_casa = "";
					$bairro = "";

					if(isset($_GET['local'])){
						$id_local = $_GET['local'];

						$query = "SELECT * FROM local_entrega WHERE id_local = " . $id_local;

						$edit = selectById($link, $query);

						$id_local = $edit['id_local'];
						$cep = $edit['cep'];
						$cidade = $edit['cidade'];
						$estado = $edit['estado'];
						$rua = $edit['rua'];
						$num_casa = $edit['num_casa'];
						$bairro = $edit['bairro'];
					}
				?>
				<form method="POST" action="database/adicionar_request.php">
					<input type='hidden' name='userS' value='$user'>
			 		<input type="number" name="id_local" value="<?=$id_local?>" class="form-control" placeholder="ID do Local" aria-describedby="basic-addon1">
			 		<input type="text" name="cep" value="<?=$cep?>" class="form-control" placeholder="CEP" aria-describedby="basic-addon1">
			 		<input type="text" name="cidade" value="<?=$cidade?>" class="form-control" placeholder="Cidade" aria-describedby="basic-addon1">
			 		<input type="text" name="estado" value="<?=$estado?>" class="form-control" placeholder="Estado" aria-describedby="basic-addon1">
			 		<input type="text" name="rua" value="<?=$rua?>" class="form-control" placeholder="Rua" aria-describedby="basic-addon1">
			 		<input type="text" name="num_casa" value="<?=$num_casa?>" class="form-control" placeholder="Nº da Casa" aria-describedby="basic-addon1">
			 		<input type="text" name="bairro" value="<?=$bairro?>" class="form-control" placeholder="Bairro" aria-describedby="basic-addon1">
			 		<button type="submit" class="btn btn-success name="add_local">Adicionar</button>
			 	</form>
		</div>
	</div>

<?php
	require_once('footer.php');

    function getAdmin(){
		if(isset($_SESSION['user']) && isset($_SESSION['stats'])){
			if($_SESSION['stats'] == "A") {
		 		$user = $_SESSION['user'];
		 		echo $user;
			} else {
				redirecionarUser();
			}
		}
	} 
?>