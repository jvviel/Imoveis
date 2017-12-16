
<?php
    require_once('header.php');
?>



    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/logo.png" alt="" width="20%" height="auto">
                    <div class="intro-text">

                        <span class="skills">O maior portal de imóveis do Brasil.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/Imagem1.jpg');"></div>
                <a href="produtos.php">
                    <div class="carousel-caption">
                        <h1 class="text-label-bordered">Loki invadiu nosso sistema!</h2>
                        Todos os produtos relacionados a super-herói com desconto.<br>Confira!
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Imagem2.jpg');"></div>
                <a href="produtos.php">
                    <div class="carousel-caption">
                        <h1 class="text-label-bordered">Novidades 3D&T!!!</h2>
                        Novas campanhas disponíveis para você.
                    </div>
                </a>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Imagem3.jpg');"></div>
                <a href="produtos.php">
                    <div class="carousel-caption">
                        <h1 class="text-label-bordered">Em Breve...</h2>
                        Calçados nerds.
                    </div>
                </a>
            </div>
        </div>

        <!-- Controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
    </header>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header-inverse" style="color: white;">Imóveis à venda no Brasil </small>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php?categoria=1'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Apartamento<br>
                                Imobiliária Rio Branco<br>
                                Presidente Prudente - SP <br>
                                R$ 550,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/L7gnl-zoo_-Pp37y9_qjNeSWrrE=/crop/360x240/vr.images.sp/0d59e8b11b8ae351d4e0c1b1f160c443.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php?categoria=2'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Residência<br>
                                Imobiliária Luka<br>
                                Presidente Prudente - SP <br>
                                R$ 750,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/DqgoxJmsYjO_0oi5n8jDUqP_lJo=/crop/360x240/vr.images.sp/62f3429df09d52f1ec87566f592814b2.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php?categoria=3'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Residência<br>
                                Imobiliária Samburá<br>
                                Presidente Prudente - SP <br>
                                R$ 250,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/5k3Nqqxxno5_M4yi7aK8irhqtI4=/crop/360x240/vr.images.sp/63aaa17acc7ab118e3f9cd992d010b94.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php?categoria=4'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Residência<br>
                                Imobiliária Willy Macedo<br>
                                Presidente Prudente - SP <br>
                                R$ 875,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/rmtuzTeP9YxegqsGl2dFthZRbsc=/crop/360x240/vr.images.sp/12989ad719c1291c468e601bcbcea8f7.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php?categoria=5'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Residência<br>
                                Imobiliária Rio Branco<br>
                                Presidente Prudente - SP <br>
                                R$ 600,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/nDxdTeNXFTFk8VlxNGYQYNwj1lY=/crop/360x240/vr.images.sp/a83bed7d7d7ea2d68ffecfda2a459f51.jpg"  class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a onclick="window.location.href = 'produtos.php'" href="produtos.php" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                Residência<br>
                                Imobiliária Rio Branco<br>
                                Presidente Prudente - SP <br>
                                R$ 950,00<br>
                                Clique para mais informações
                            </div>
                        </div>
                        <img src="https://resizedimgs.vivareal.com/3ZFKVZ_bef0GOaRwcvvuG8ttp7s=/crop/360x240/vr.images.sp/675c94564b92db8ba4814613e607e362.jpg"  class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once('footer.php');
?>
