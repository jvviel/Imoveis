<?php 
	require_once('header.php');

    /* Database - Frozen Store */
    

    session_start();
?>

    <script type="text/javascript">
        function comprar(id){
            window.location.href = "produto-detail.php?id_produto=" + id;
        }

        function categorizar(id){
            window.location.href = "produtos.php?categoria=". $id;
        }
    </script>

	<div class="container-fluid" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-3">
                <div class="categorias-menu">
                	<!-- Pesquisar -->
                    <h6 class="text-label-bordered">Busca personalizada</h6>
                        
                        <br>
                    <font color="white" size="3">
                    <label>Quantidade de Quartos: </label><br>
                    <input type="radio" name="quarto" value="1"/> 1
                    <input type="radio" name="quarto" value="2"/> 2
                    <input type="radio" name="quarto" value="3"/> 3
                    <input type="radio" name="quarto" value="4"/> 4 ou mais
                    <br/>
                    <br/>
                    <label>Quantidade de Suítes: </label><br>
                    <input type="radio" name="suite" value="1"/> 1
                    <input type="radio" name="suite" value="2"/> 2
                    <input type="radio" name="suite" value="3"/> 3 ou mais
                    <br/>
                    <br/>
                    <label>Vagas para carro: </label><br>
                    <input type="radio" name="carro" value="1"/> 1
                    <input type="radio" name="carro" value="2"/> 2
                    <input type="radio" name="carro" value="3"/> 3 ou mais
                    <br/>
                    <br/>
                    <label>Finalidade: </label><br>
                    <input type="radio" name="comercio" value="1"/> Comercial
                    <input type="radio" name="comercio" value="2"/> Residêncial
                    <br/>
                    <br/>
                    <label>Mobiliado: </label><br>
                    <input type="radio" name="mobil" value="1"/> Sim
                    <input type="radio" name="mobil" value="2"/> Não
                    </font>
                    <br/>
                   
                    

                	<!-- Categorias -->
                    
                    <br>
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        
                  
                </div>
                
            </div>

            <div class="col-md-9">
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
                                    <a href="#"><img class="slide-image" src="images/interior1.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="slide-image" src="images/interior2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img class="slide-image" src="images/interior3.jpg" alt=""></a>
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
                
                <font color="White"> <br> APARTAMENTO<br>
                                ENDEREÇO: DR. GURGEL 226 APTO 709<br>
                                BAIRRO: CENTRO<br>
                                CIDADE: PRESIDENTE PRUDENTE - SP<br>
                                QUARTOS: 2 <br>
                                GARAGEM PARA 1 CARRO <br>
                                CONTATO: (18) 3333-3333 <br>
                                </font>
                                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agende sua Visita</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agendamento</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Assunto:</label>
            <textarea class="form-control" id="message-text" rows="1"></textarea>
            <label for="message-text" class="control-label">Descrição:</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      <a href="produtos.php"><button type="button" class="btn btn-primary" >Enviar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
                              
                <hr>

                

<?php
	require_once('footer.php');

    function mostrarMensagem($chave){
        if(isset($_SESSION[$chave])){
            echo "<h3 class='text-center text-$chave  bg-$chave'>" . $_SESSION[$chave] . "</h3>";
            session_destroy();
        }
    }
?>