<!-- header -->
<?php
require_once "../Constructs/header.php";


?>
<html>
<link rel="stylesheet" type="text/css" href="../CSS/navbar_dashboard.css">

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
            <a class="item navitens item_font" href="../Requisicoes/requisicoes_CRUD.php">Requisições</a>

        <!-- Menu estoque -->          
            <a class="item navitens item_font click" href="../Estoque/estoque_CRUD.php">Estoque</a>

        <!-- Menu sair -->
            <a class="item navitens item_font" href="../Sair/sair.php">Sair</a>
          
      </div>
  </div>
</div>

<title>Adicionar produto</title>
<link rel="stylesheet" type="text/css" href="../CSS/estoque_criar.css">
<body>


<div id="title" class="title">
<h1>Adicionar produto</h1>
</div> <!--fim title-->

<section>
    <div class="form-group">

        <form action="validar_cadastro.php" method="POST" enctype="multipart/form-data">
        <?php if (!(empty($_SESSION['dbug']))) {
            echo'<h3>'.$_SESSION['dbug'].'</h3>';
            unset($_SESSION['dbug']);
            }
        ?>
            <label class="label-nome">Nome do item</label>
            <?php if (!(empty($_SESSION['nome-e']))) {
                echo'<a>'.$_SESSION['nome-e'].'</a>';
                unset($_SESSION['nome-e']);
            }?>
            
            <input required type="text" name="nome" class="form-control" placeholder="Nome do item">
            <label class="label-nome">Categoria</label>
                <select class="form-control" name="cat">
                    <option value="hortfruit">Horti-Fruti</option>
                    <option value="congelados">Congelados</option>
                </select>

            <label class="label-nome">Email do administrador</label>
            <?php if (!(empty($_SESSION['adm-mail-e']))) {
            echo'<a>'.$_SESSION['adm-mail-e'].'</a>';
            unset($_SESSION['adm-mail-e']);
            }?>
            <input required type="text" name="adm-mail" class="form-control" placeholder="E-mail">
        
            <label class="label-nome">Senha do administrador</label>
            <?php if (!(empty($_SESSION['adm-pass-e']))) {
                echo'<a>'.$_SESSION['adm-pass-e'].'</a>';
                unset($_SESSION['adm-pass-e']);
            }?>
            <input required type="password" name="adm-pass" class="form-control" placeholder="Senha">
            
            
            <label class="label-file">Selecionar Imagen</label>
                    <input type="file" name="file-img" class=" form-control form-img">
            
                    <label class="label-preco">Preço</label>
            <?php if (!(empty($_SESSION['preco-e']))) {
            echo '<a>'.$_SESSION['preco-e'].'</a>';
            unset($_SESSION['preco-e']);
            }
            ?>
            <input type="text" name="preco" class="form-control imput-debit" placeholder="Ex 00,00 (R$)">
            <button type="submit" class="btn btn-primary bt-valid">Validar</button>
            <input type="button" value="Sair" class="btn btn-primary" onclick="window.location.href='estoque_CRUD.php'" >
            <button type="reset" class="btn btn-primary bt-valid">Limpar</button>
        </form>
    </div>
</section>

