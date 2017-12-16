<?php
  require("conexao.php");

  $tipo_operacao = $_POST['operacao'];
  $caracter = $_POST['tipo'];
  $cidade = $_POST['cidade'];
  $imobiliaria = $_POST['imob'];


    if($caracter == null && $cidade==null && $imobiliaria==null){
            $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' ");
    }else if($cidade == null && $caracter==null){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_mob='$imobiliaria' ");
    }else if($imobiliaria == null && $cidade==null){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_Caracter='$caracter' ");
    }else if($caracter == null && $imobiliaria==null ){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_Cidade='$cidade' ");
    }else if($cidade == null){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_Caracter='$caracter' AND Imov_mob='$imobiliaria' ");
    }else if($caracter == null){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' 
        AND Imov_Cidade='$cidade' AND Imov_mob='$imobiliaria' ");
    }else if($imobiliaria == null){
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_Caracter='$caracter' AND Imov_Cidade='$cidade' ");
    }else{
      $sql = mysql_query("SELECT * FROM imob_imov WHERE Imov_Tipo='$tipo_operacao' AND Imov_Caracter='$caracter' AND Imov_Cidade='$cidade' AND Imov_mob='$imobiliaria' ");
    }
    
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Unimob</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a href="index.html"><img src="img/unimob.png"></a>
        <label>Grupo Unimob</label>
        <a class="btn btn-primary" href="#">Entrar</a>
      </div>
    </nav>


    <br/>
    <!-- Page Content -->
    <div class="container">


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form>
          <div class="form-group">
                  <!-- Pesquisar -->
                    <b>
                    <font color="#1e88e5" size="5">
                    <label> Busca personalizada</label></font><br>

                    <br>

                    <font color="black" size="3">
                    <label>Tipo: </label><br>
                    <select class="form-control text-uppercase font-size-sm">
                      <option value="aluguel">Aluguel</option>
                      <option value="compra">Compra</option>
                    </select><br>
                    <label>Finalidade: </label><br>
                    <select class="form-control text-uppercase font-size-sm" name="finalidade"
                    required="">

                      <option value="Apartamento">Apartamento</option>
                      <option value="Casa">Casa</option>
                      <option value="Casa em condominio">Casa em condominio</option>
                      <option value="Comercial">Comercial</option>
                      <option value="Chacara">Chacara</option>
                      <option value="Terreno">Terreno</option>

                  </select>
                    <br/>

                    <label>Cidade: </label>
                    <select class="form-control text-uppercase font-size-sm" name="cidade">
                      <option value="assis">Assis</option>
                      <option value="prudente">Presidente Prudente</option>
                      <option value="marilia">Marília</option>
                      <option value="sao paulo">São Paulo</option>
                    </select><br>
                    <label>Quantidade de Quartos: </label>
                  <select class="form-control text-uppercase font-size-sm" name="quarto"
                   required="">

                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4 ou mais</option>

                  </select>
                    <br>
                    <label>Quantidade de Suítes: </label><br>
                    <select class="form-control text-uppercase font-size-sm" name="suite"
                    required="">

                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3 ou mais</option>

                  </select>
                    <br/>

                    <label>Vagas para carro: </label><br>
                    <select class="form-control text-uppercase font-size-sm" name="carro"
                   required="">

                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3 ou mais</option>


                  </select>
                    <br/>

                    <label>Mobiliado: </label><br>
                    <select class="form-control text-uppercase font-size-sm" name="mobilia"
                    required="">

                      <option value="sim">Sim</option>
                      <option value="nao">Não</option>


                  </select>
                    </font>
                    </b>
                    <br/>
                          </div>
        </form>
      <div class="modal-footer">
      <a href="vitrine.html"><button type="button" class="btn btn-primary" >Buscar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</div>

      <!-- Page Heading -->
      <h1 class="my-4">
        <small>Resultados da busca</small>
      </h1>
      <div class='row'>

      <?php
        while ($linhas = mysql_fetch_array($sql) ) { ?>

                  <?php    
                  $var = mysql_query("SELECT * FROM imob_imobi WHERE Imobi_ID=".$linhas['Imov_mob']);

                  $resultado = mysql_fetch_array( $var );


                  ?>

                 <div class='col-lg-4 col-sm-6 portfolio-item'>
                 <div class='card h-100'>
                 <a href='#'><img class='card-img-top' src='img/<?php echo $linhas['Imov_img']; ?>.jpg' alt=""></a>
                 <div class='card-body'>
                 <h4 class='card-title'>
                 <a href='#'><?php echo $linhas['Imov_Caracter']; ?></a>
                 </h4>
                 <p class='card-text'>Imobiliária: <?php echo $resultado['Imobi_Nome'] ?> </p>
                 <p class='card-text'><?php echo $linhas['Imov_Tipo']; ?> - apenas R$ <?php echo $linhas['Imov_Preco']; ?></p>
                 <a href='detalhes.php'><button type='button' class='btn btn-primary btn-df'>+Detalhes</button></a>
                 </div>
                 </div>
                 </div>
          <?php
       }
        ?>

      <div class="container">
      </div>
    <!-- /.row -->
    <!-- Pagination -->
    

  </div>
  <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Portal Unimob 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
