<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mercadinho Gomes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="icones/online-shopping.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
        <!-- Hover.css -->
        <link rel="stylesheet" href="css/hover-min.css">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.min.css">
        
        <!-- CSS do Desenvolvedor -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/styleHome.css">
        <link rel="stylesheet" type="text/css" href="css/responsiveContato.css">
        <link rel="stylesheet" type="text/css" href="css/styleNavbar.css">
    </head>
    <body>
        <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top cor-navbar">  
                <div class="container">
                    <a class="navbar-brand" href=""><img src="icones/logo.png" width="150"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <img src="icones/menu.png" width="30">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="index.php">Início</a>
                                <div class="pg-atual"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="QuemSomos.html">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="produtos.html">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-center" href="usuarios.php">Usuários</a>
                            </li>
                        </ul>
                    </div>
                </div>    
            </nav>
        </header>

        <!-- Contato -->
        <div class="sidebar-contact animated fadeInLeft">
            <div class="toggle">
                <p class="img-toggle"></p>
            </div>
            <h2 >CONTATE-NOS</h2>
            <div class="formBox scroll">
                <form action="" method="post">
                    <div class="inputBox">
                        <div class="inputText">Nome</div>
                        <input type="text" name="" class="input">
                    </div>
                    <div class="inputBox">
                        <div class="inputText">Email</div>
                        <input type="email" name="" class="input">
                    </div>
                    <div class="inputBox">
                        <div class="inputText">Telefone</div>
                            <input type="rel" name="" class="input">
                    </div>
                    <div class="inputBox">
                        <div class="inputText">Mensagem</div>
                        <textarea name="" class="input"></textarea>
                    </div>
                    <div class="inputBox hvr-bob btn-contato">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        <!-- Slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!--  -->
            <ol class="carousel-indicators">
                <div class="mx-2 indicador" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></div>
                <div class="mx-2 indicador" data-target="#carouselExampleIndicators" data-slide-to="1"></div>
                <div class="mx-2 indicador" data-target="#carouselExampleIndicators" data-slide-to="2"></div>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" id="slide01"></div>
                <div class="carousel-item" id="slide02"></div>
                <div class="carousel-item" id="slide03"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <img src="icones/left-arrow.png" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <img src="icones/right-arrow.png" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Footer -->
        <footer>
            <div class="redes-cor">
                <div class="row justify-content-center ">
                    <div class="mg-redes text-center col-lg-1 col-md-1 justify-content-center">
                        <img src="icones/instagram-branco.png" width="25">
                    </div>
                    <div class="mg-redes text-center col-lg-1 col-md-1 justify-content-center">
                        <img src="icones/facebook-branco.png" width="25">
                    </div>
                    <div class="mg-redes text-center col-md-3 col-lg-2 justify-content-center">
                        <img src="icones/telephone-handle-silhouette.png" width="25">
                        <span class="ml-2">(71)9XXXX-XXXX</span><br>
                    </div>
                    <div class="mg-redes text-center col-lg-3 col-md-3 justify-content-center">
                        <img src="icones/message-closed-envelope.png" width="25">
                        <span class="ml-2">email@contato.com</span><br>
                    </div>
                    <div class="mg-redes text-center col-lg-4 col-md-12 justify-content-center">
                        <img src="icones/wall-clock.png" width="25">
                        <span class="ml-2 justify-content-center">Segunda a Sexta: 8h às 18h Sábados: 8h às 15h</span>
                    </div>
                </div>
            </div>    
            <div  class="ftr-cor">
                Desenvolvido por a Praxis - Empresa Jr. © 2018 Todos os direitos reservados.
            </div>
        </footer>
        <!-- Fim do Footer -->

        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>