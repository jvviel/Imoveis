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