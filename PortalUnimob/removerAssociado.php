<?php
$codigo_associado = trim($_REQUEST['codigo_associado']);
	$conexao = mysql_connect("localhost","root","");
	if(!$conexao){
		echo "Erro ao ser Conectado ao MySql <br/>";
		exit;
	}
	$banco = mysql_select_db("aeta");
	if(!$banco){
		echo "Erro ao se conectar ao banco de dados aeta";
		exit;
	}
	$rs = mysql_query("SELECT * from associado where codigo_associado=".$codigo_associado);
	$row = mysql_fetch_array($rs);
	$codigo_associado = $row['codigo_associado'];
	$nome = $row['nome'];
	$sexo = $row['sexo'];
	$data_nascimento = $row['data_nascimento'];
	$rg = $row['rg'];
	$cpf = $row['cpf'];
	$email = $row['email'];
	$n_titulo = $row['n_titulo'];
	$zona = $row['zona'];
	$secao = $row['secao'];
	$tipo_socio = $row['tipo_socio'];
	$estado_civil = $row['estado_civil'];
	$endereco = $row['endereco'];
	$telefone = $row['telefone'];
	$nome_pai = $row['nome_pai'];
	$nome_mae = $row['nome_mae'];
	$primeira_faculdade = $row['primeira_faculdade'];
	$bolsista = $row['bolsista'];
	$renda_familiar_sm = $row['renda_familiar_sm'];
	$tipo_moradia = $row['tipo_moradia'];
	$data_cadastro_atualizacao = $row['data_cadastro_atualizacao'];
	$status = $row['status'];
	$mini_curriculo = $row['mini_curriculo'];
?>

<html>
<head>
	<title>Remover Alunos</title>
	 <meta charset="UTF-8" />
	<!--incluindo o css no sistema-->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
   	<link href="css/Custom-Cs.css" rel="stylesheet" />
   	<!--incluindo o java do bootstrap no projeto-->
   	<script src="js/bootstrap.min.js"></script>
 <!-- jQuery (necessária para plugins JavaScript do Bootstrap)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- incluir todos os plugins compilados (abaixo), ou incluir arquivos individuais, conforme necessário -->
    <script src="js/bootstrap.min.js"></script>
    <!--Inclui no projeto caracteres especiais -->

</head>
</head>
<body>
<!--Navbar 1 DE CIMA CABEÇALHO-->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navegar</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../main.html" > <span> </span>Associação de Estudantes de Tarumã</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <a class="navbar-brand" href="esqueceusenha.php" > <span> </span>Esqueceu sua Senha?</a>
                        <!-----um dropdown de cadastro".---->
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Cadastro</li>
                                <li><a href="Inserir/inserirAssociado.html">Cadastro Associado</a></li>
                                <li><a href="Inserir/inserirInstituicao.html">Cadastro Instituição</a></li>
                                <li><a href="Inserir/inserirCurso.html">Cadastro Cursos</a></li>
                                <li><a href="Inserir/inserirAssociadoCurso.html">Cadastro Associado_Curso</a></li>
                                <li><a href="Inserir/inserirTransporte.html">Cadastro Transporte</a></li>
                                <li><a href="Inserir/inserirTransporteAssociado.html">Cadastro Transporte Associado</a></li>
                                <li><a href="Inserir/inserirTransporteEtinerario.html">Cadastro Transporte Etinerario</a></li>
                                <li><a href="Inserir/inserirTransporteUniversidade.html">Cadastro Transporte Universidade</a></li>
                                <li><a href="Inserir/inserirAtividadeEvento.html">Cadastro Atividade Evento</a></li>
                                <li><a href="Inserir/inserirAtividadeAssociado.html">Cadastro Atividade Associado</a></li>
                                 <li><a href="Inserir/inserirRequerimentos.html">Cadastro Requerimentos</a></li>
                                 <li><a href="Inserir/InserirAdvertencia.html">Cadastro Advertencia</a></li>

                         </ul>
                         </a>
                         </li>
                          <!-----um dropdown de editar".---->
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Editar<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Editar</li>
                                <li><a href="Editar/editarAssociado.html">Editar Associado</a></li>
                                <li><a href="Editar/editarInstituicao.html">Editar Instituição</a></li>
                                <li><a href="Editar/editarCurso.html">Editar Cursos</a></li>
                                <li><a href="Editar/editarAssociadoCurso.html">Editar Associado_Curso</a></li>
                                <li><a href="Editar/editarTransporte.html">Editar Transporte</a></li>
                                <li><a href="Editar/editarTransporteAssociado.html">Editar Transporte Associado</a></li>
                                <li><a href="Editar/editarTransporteEtinerario.html">Editar Transporte Etinerario</a></li>
                                <li><a href="Editar/editarTransporteUniversidade.html">Editar Transporte Universidade</a></li>
                                <li><a href="Editar/editarAtividadeEvento.html">Editar Atividade Evento</a></li>
                                <li><a href="Editar/editarAtividadeAssociado.html">Editar Atividade Associado</a></li>
                                 <li><a href="Editar/editarRequerimentos.html">Editar Requerimentos</a></li>
                                 <li><a href="Editar/editarAdvertencia.html">Editar Advertencia</a></li>

                         </ul>
                         </a>
                         </li>

                          <!-----um dropdown de remover".---->
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Remover<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Remover</li>
                                <li><a href="Remover/removerAssociado.html">Remover Associado</a></li>
                                <li><a href="Remover/removerInstituicao.html">Remover Instituição</a></li>
                                <li><a href="Remover/removerCurso.html">Remover Cursos</a></li>
                                <li><a href="Remover/removerAssociadoCurso.html">Remover Associado_Curso</a></li>
                                <li><a href="Remover/removerTransporte.html">Remover Transporte</a></li>
                                <li><a href="Remover/removerTransporteAssociado.html">Remover Transporte Associado</a></li>
                                <li><a href="Remover/removerTransporteEtinerario.html">Remover Transporte Etinerario</a></li>
                                <li><a href="Remover/removerTransporteUniversidade.html">Remover Transporte Universidade</a></li>
                                <li><a href="Remover/removerAtividadeEvento.html">Remover Atividade Evento</a></li>
                                <li><a href="Remover/removerAtividadeAssociado.html">Remover Atividade Associado</a></li>
                                 <li><a href="Remover/removerRequerimentos.html">Remover Requerimentos</a></li>
                                 <li><a href="Remover/removerAdvertencia.html">Remover Advertencia</a></li>

                         </ul>
                         </a>
                         </li>
            <form name="loginform" method="post" action="autenticadordeusuario.php" class="navbar-form navbar-left">
                <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Account">
                <input type="password" name="senha" class="form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-default" value="Entrar"></input>
            </form>
                </div>
            </div>
        </div>
<!--REMOVER -->
<div style="margin:50px;margin-top:120px" class="panel panel-default">
<div class="panel-heading">
<h3>Remover Associado</h3>
</div>
<div class="panel-body">
<form  name="frmRmvAdvertencia" id="frmRmvAdvertencia" method="post" action="confRmvAssociado.php">
				<input type="hidden" id="codigo_associado" name="codigo_associado" value="<?php echo $codigo_associado?>" />
				<div class="col-md-2">
				<div class="form-group">
					<label width="90" align="right">Código Associado: </label>
					<input readonly class ="form-control" id="codigo_associado" value = "<?php echo $codigo_associado?>"/>
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Nome: </label>
					<input readonly class ="form-control" id="nome" value ="<?php echo $nome?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Sexo: </label>
					<input readonly class ="form-control" id="sexo" value = "<?php echo $sexo?>">
				</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					<label align="right">Data Nascimento: </label>
					<input readonly class ="form-control" id="data_nascimento" value = "<?php echo $data_nascimento?>">
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">RG: </label>
					<input readonly class ="form-control" id="rg" value = "<?php echo $rg?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">CPF: </label>
					<input readonly class ="form-control" id="cpf" value = "<?php echo $cpf?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Número Título: </label>
					<input readonly class ="form-control" id="n_titulo" value = "<?php echo $n_titulo?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Zona: </label>
					<input readonly class ="form-control" id="zona" value = "<?php echo $zona?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Seção: </label>
					<input readonly class ="form-control" id="secao" value = "<?php echo $secao?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Tipo Socio: </label>
					<input readonly class ="form-control" id="tipo_socio" value = "<?php echo $tipo_socio?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Estado Civil: </label>
					<input readonly class ="form-control" id="estado_civil" value = "<?php echo $estado_civil?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Primeira Faculdade: </label>
					<input readonly class ="form-control" id="primeira_faculdade" value = "<?php echo $primeira_faculdade?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Bolsista: </label>
					<input readonly class ="form-control" id="bolsista" value = "<?php echo $bolsista?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Tipo Moradia: </label>
					<input readonly class ="form-control" id="tipo_moradia" value = "<?php echo $tipo_moradia?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Data Cadastro Atualização: </label>
					<input readonly class ="form-control" id="data_cadastro_atualizacao" value = "<?php echo $data_cadastro_atualizacao?>">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Status: </label>
					<input readonly class ="form-control" id="status" value = "<?php echo $status?>">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Nome Pai: </label>
					<input readonly class ="form-control" id="nome_pai" value = "<?php echo $nome_pai?>">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Nome Mãe: </label>
					<input readonly class ="form-control" id="nome_mae" value = "<?php echo $nome_mae?>">
				</div>
				</div>

				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Endereço: </label>
					<input readonly class ="form-control" id="endereco" value = "<?php echo $endereco?>">
				</div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
					<label align="right">Telefone: </label>
					<input readonly class ="form-control" id="telefone" value = "<?php echo $telefone?>">
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
					<label align="right">Renda Familiar: </label>
					<input readonly class ="form-control" id="renda_familiar_sm" value = "<?php echo $renda_familiar_sm?>">

				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Email: </label>
					<input readonly class ="form-control" id="email" value = "<?php echo $email?>">
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
					<label align="right">Curriculo: </label>
					<input readonly class ="form-control" id="mini_curriculo" value = "<?php echo $mini_curriculo?>">
				</div>
				</div>
				<div class="col-md-6">
						<input class="btn btn-warning"type="submit" name="btRmvAln" id="btRmvAln" value="Remover"/>
						<input class="btn btn-primary" type="button" name="btCnl" id="btCnl" value="Cancelar" onclick="javascript: location.href='listarAlunos.php'"/>
				</div>
			</form>
			</div>
			</div>

</body>
</html>
