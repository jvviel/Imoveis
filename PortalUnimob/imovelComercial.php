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

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <!-- bootstrap 3.0.2 -->
        <link href="datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    	<!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="asd/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="asd/css/freelancer.css">
    	<link rel="stylesheet" type="text/css" href="asd/css/style.css">
        <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.css"/>
        <script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>

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
            <div class="container">
            <div class="col-md-12">
             <font color="#1e88e5" size="5"> Imóvel Selecionado </font>
                <div class="row carousel-holder">
                    <div class="col-md-12" style="width: 100%; height: 100%;">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img class="slide-image" src="img/interior10.jpeg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="slide-image" src="img//interior11.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="slide-image" src="img//interior12.png" alt=""></a>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>

                            </a>

                        </div>
                    </div>

                </div>

        <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item">
            <div class="card-body">
            <font color="#1e88e5">
              <h3 class="card-title">
                Apartamento
              </h3>
              </font><br>
              <b>
              <font size="3" >
              <p class="card-text">Endereço: Rua Armando Sales, 525</p>
              <p class="card-text">Bairro: Vila Glória</p>
              <p class="card-text">Cidade: Presidente Prudente</p>
              <p class="card-text">Salas: 5</p>
              <p class="card-text">Garagem para 1 carro</p>
              <p class="card-text">Contato: (18) 1111-1111</p>
              </font>
              </b>
            </div>
        </div>
        </div> <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agende sua Visita</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="email" class="form-control" id="recipient-name" placeholder="email@email.com">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Assunto:</label>
            <input type="text" name="assunto" class="form-control" placeholder="Ex: Visita"><br>
            <label for="message-text" class="control-label">Descrição:</label>
            <textarea class="form-control" rows="3" placeholder="Descrição do assunto"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <a href="imoveis.php"><button type="button" class="btn btn-primary" >Enviar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Skyfall 2017</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
