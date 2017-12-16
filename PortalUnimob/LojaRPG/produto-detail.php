<?php
	require_once('header.php');
    /* Banco de Dados */
    require_once('database/connection.php');
    require_once('database/dao.php');
?>
    <?php
        session_start();

        $id = "";
        $nome = "";
        $categoria = "";
        $descricao = "";
        $sistema = "";
        $fornec = "";
        $path_img = "";
        $preco = "";
        
        if (isset($_GET['id_produto'])) {
            $id = $_GET['id_produto'];

            $query = "select * from produtos where id_produto = " . $id;
            $produto = selectById($link, $query);

            $nome = $produto['name_prod'];
            $descricao = $produto['desc_prod'];
            $sistema = $produto['sistema_rpg'];
            $path_img = $produto['path_img'];
            $preco = $produto['valor_prod'];

            /* Fornecedor */
            $query = "select * from fornecedor where id_fornec = " . $produto['id_fornec'];
            $fornecedor = selectById($link, $query);
            $fornec = $fornecedor['name'];

            /* Categoria */
            $query = "select * from categorias where id_categoria = " . $produto['categoria'];
            $categorias = selectById($link, $query);
            $categoria = $categorias['nome_categoria'];
        }
    ?>
	<br>
	<div class="container-fluid" style="color: white">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $nome; ?>
                    <small><?php echo $categoria; ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src=<?php echo $path_img; ?> alt="">
                <div class="col-md-6">
                    <h3>Fornecedora: 
                        <p style="font-size: 16px"><?php echo $fornec ?></p>
                    </h3>
                    <h3>Sistema de Rolagem: 
                        <p style="font-size: 16px"><?php echo $sistema ?></p>
                    </h3>
                </div>

                <div class="col-md-6">
                <h3>Preço: <i class="pull-right">R$ <?php echo $preco ?></i></h3>
                <hr>
                <button type='submit' class='btn btn-primary' style='width: 100%'>
                    <h5> 
                        Comprar <i class='fa fa-shopping-cart' aria-hidden='true'></i>
                    </h5>
                </button>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Descrição...</h3>
                <p style="font-size: 16px"><?php echo $descricao; ?></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <br>
<?php
	require_once('footer.php');
?>