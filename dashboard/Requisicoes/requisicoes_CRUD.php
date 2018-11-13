<!-- header -->
<?php
require_once "../Constructs/header.php";
require_once "listar_requisicoes.php";
?>

<html>
    <link rel="stylesheet" type="text/css" href="../CSS/navbar_dashboard.css">
    <link rel="stylesheet" type="text/css" href="../CSS/requisicoes_CRUD.css">
    <title>Lista de Requisições</title>

    <!-- NAVBAR -->
    <div id="mySidenav" class="menu">
        <div id="icom" class = "icom">
            <img src = "../Images/user-icon.png" class="icom-img">
        </div>
        <div id="list" class="list">
            <div id="item" class="box">
            <!-- Menu principal -->
                <a class="item navitens item_font" href="../Principal/principal.php">Principal</a>
            <!-- Menu usuarios -->          
                <a class="item navitens item_font" href="../Usuarios/usuarios.php">Usuários</a>
            <!-- Menu requisições -->
                <a class="item navitens item_font click" href="../Requisicoes/requisicoes_CRUD.php">Requisições</a>
            <!-- Menu estoque -->          
                <a class="item navitens item_font " href="../Estoque/estoque_CRUD.php">Estoque</a>
            <!-- Menu sair -->
                <a class="item navitens item_font" href="../Sair/sair.php">Sair</a>
            </div>
        </div>
    </div>

    <body>
        <div id="title" class="row title">
            <h1 class="justify-content-center col-12">Lista de Requisições</h1>
        </div> <!--fim title-->
        <section>
            <div class="form-group">
                <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4">
                            <label class="ml-2 label-select">Buscar por</label>
                            <select name="tipo" class="form-control imput-select">
                                <option value ="1">Categoria</option>
                                <option value = "2">Nome</option>
                                <option value = "3">ID</option>
                            </select>
                        </div>
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4">
                            <label class="ml-2 label-serach">Item:</label>
                            <input name="busca" type="text" class="form-control imput-serach" placeholder="Nome do item">
                        </div>
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4">
                            <label class="mx-2 label-order">Ordenar por</label>
                            <select name="order" class="form-control imput-order">
                                <option value= "1">Mais antigos</option>
                                <option value = "2">Mais novos</option>
                                <option value = "3">Ordem alfabética</option>
                                <option value = "4">Maior Custo</option>
                                <option value = "5">Menor custo</option>
                            </select>
                        </div>
                    </div> <!--Fim da linha-->
                    <div class="row container">
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <button type="submit" class="btn btn-primary ">Buscar</button>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <button type="submit" class="btn btn-primary">Deletar múltiplos</button>
                        </div>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                            <button type="submit" class="btn btn-primary">Exportar</button>
                        </div>
                </form>
            </div>
        </section>
        <section>
            <div class="table-control table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="table-id">ID</th>
                            <th scope="col" class="table-nome">Nome - Produto</th>
                            <th scope="col" class="table-date">Data de criação</th>
                            <th scope="col" class="table-preco">Preço (R$)</th>
                            <th scope="col" class="table-edit">Validar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php   while ($list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)):?>
                            <td class="table-id"><?php echo($list_1['id']);?></td>
                            <td class="table-nome"><?php echo ''.$list_1['nomeprod'].' - '.$list_1['catg'].' - '.$list_1['nomeuser'];?></td>
                            <td class="table-date"><?php echo($list_1['dadd']);?></td>
                            <td class="table-preco"><?php echo($list_1['preco']);?></td>
                            <td>
                                <a class="table-edit-icon" href="requisicoes_validar.php">
                                <input type="checkbox" value ="<?php echo($list_1['id']);?>" name='box[]'>
                            </td>
                        </tr>
                            <?php endwhile; ?>
                    </tbody>
                </div>
        </section>
    </body>
</html>
