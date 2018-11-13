<!-- header -->
<?php
require_once "../Constructs/header.php";
require_once "listar_estoque.php";
unset($_SESSION['user-edit']);
?>
<html>
    <link rel="stylesheet" type="text/css" href="../CSS/navbar_dashboard.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estoque_CRUD.css">
    <title>Lista de Estoque</title>
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
                    <a class="item navitens item_font" href="../Requisicoes/requisicoes_CRUD.php">Requisções</a>

                <!-- Menu estoque -->          
                    <a class="item navitens item_font click" href="../Estoque/estoque_CRUD.php">Estoque</a>

                <!-- Menu sair -->
                    <a class="item navitens item_font" href="../Sair/sair.php">Sair</a>
                
            </div>
        </div>
    </div>

    <body>
        <div id="title" class="title">
            <h1>Lista de Estoque</h1>
        </div> <!--fim title-->
        <section>
            <div class="form-group">
                <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
                        <!-- NA DIV DE BAIXO EU DEIXEI col-4 NO CASO DE TU AJEITAR A NAVBAR, SE NÃO CONSEGUIR MUDA PARA col-6 -->
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4"> 
                            <label class="ml-2 label-select">Buscar por</label>
                            <select name="tipo" class="form-control imput-select">
                                <option value ="1">Categoria</option>
                                <option value = "2">Nome</option>
                                <option value = "3">ID</option>
                            </select>
                        </div>
                        <!-- NA DIV DE BAIXO EU DEIXEI col-4 NO CASO DE TU AJEITAR A NAVBAR, SE NÃO CONSEGUIR MUDA PARA col-6 -->
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4"> 
                            <label class="ml-2 label-serach">Item:</label>
                            <input name="busca" type="text" class="form-control imput-serach" placeholder="Nome do item">
                        </div>
                        <!-- NA DIV DE BAIXO EU DEIXEI col-4 NO CASO DE TU AJEITAR A NAVBAR, SE NÃO CONSEGUIR MUDA PARA col-6 -->
                        <div class="mt-3 col-4 col-sm-4 col-md-4 col-lg-4"> 
                            <label class="mx-2 label-order">Ordenar por:</label>
                            <select name="order" class="form-control imput-order">
                                <option value= "1">Mais antigos</option>
                                <option value = "2">Mais novos</option>
                                <option value = "3">Ordem alfabética</option>
                                <option value = "4">Maior dívida</option>
                                <option value = "5">Menor dívida</option>
                            </select>
                        </div>
                    </div> 
                </form>      

                <!--Fim da linha-->

                <form method= "GET" action = "delete_multi.php">  
                    <button type="submit" class="btn btn-primary ">Buscar</button>
                    <input type=submit  class="btn btn-primary"onclick="window.location.href='delete_multi.php'" value="Deletar multiplos">
                    <button type="submit" class="btn btn-primary">Exportar</button>
                    <input type="button" value="Adicionar" class="btn btn-primary" onclick="window.location.href='estoque_criar.php'" >
                </form>
            </div>
        </section>

        <section>
            <div class="table-control table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="table-id">ID</th>
                        <th scope="col" class="table-nome">Nome - Categoria</th>
                        <th scope="col" class="table-date">Data de criação</th>
                        <th scope="col" class="table-preco">Preço (R$)</th>
                        <th scope="col" class="table-edit">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php   while ($list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)):?>
                        <td class="table-id"><?php echo($list_1['id']);?></td>
                        <td class="table-nome"><?php echo ''.$list_1['nome'].' - '.$list_1['catg'];?></td>
                        <td class="table-date"><?php echo($list_1['dadd']);?></td>
                        <td class="table-preco"><?php echo($list_1['preco']);?></td>
                        <td>
                            <a class="table-edit-icon" href="estoque_editar.php?id=<?php echo $list_1['id'];?>">
                                <img class="form-icon" alt="edit-icon" src="../Images/edit.png" >
                                Editar
                            </a>
                            <a class="table-edit-icon" href="delete.php?id=<?php echo $list_1['id'];?>">
                                <img class="form-icon" alt="edit-icon" src="../Images/delete.png" >
                                Deletar
                            </a>
                            <input type="checkbox" value ="<?php echo($list_1['id']);?>" name='box[]'>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </body>
</html>
