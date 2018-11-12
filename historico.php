<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" type="text/css" href="css/responsiveContato.css">
    <link rel="stylesheet" type="text/css" href="css/styleNavbar.css">
    <link rel="stylesheet" type="text/css" href="css/styleHistorico.css">
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
                            <a class="nav-link hvr-underline-from-center" href="QuemSomos.php">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-center" href="usuarios.php">Usuários</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contato-nos -->
    <?php
        require_once "Templates/contate-nos.php"
    ?>
    <!-- Fim de Contate-nos -->

    <!-- Tabela Histórico -->
    <div class="historico">
        <div class="container">
            <div class="row text-center justify-content-center">
                <h1 class="mb-5">HISTÓRICO DE COMPRAS</h1>
            </div>
            <div class="tabela">
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Pedido</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Repetir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="submit" class="btn-login" value="Comprar">
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="submit" class="btn-login" value="Comprar">
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="submit" class="btn-login" value="Comprar">
                                    </form>
                                </td>
                            </tr>                        
                        </tbody>
                    </table>
                    <div class="row justify-content-around">
                        <div class=" op-info col-sm-6 text-center col-6 col-md-6">
                            <a href="alterarInfo.php">Alterar Cadastro</a>
                        </div>
                        <div class="op-info col-sm-6 text-center col-6 col-md-6">
                            <a href="">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer>
        <?php
            require_once "Templates/footer.php";
        ?>
        </footer>
        <!-- Fim do Footer -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>