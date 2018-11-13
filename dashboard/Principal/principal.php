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
            <a class="item navitens item_font click" href="../Principal/principal.php">Principal</a>

        <!-- Menu usuarios -->          
            <a class="item navitens item_font" href="../Usuarios/usuarios.php">Usuários</a>

        <!-- Menu requisições -->
            <a class="item navitens item_font" href="../Requisicoes/requisicoes_CRUD.php">Requisições</a>

        <!-- Menu estoque -->          
            <a class="item navitens item_font" href="../Estoque/estoque_CRUD.php">Estoque</a>

        <!-- Menu sair -->
            <a class="item navitens item_font" href="../Sair/sair.php">Sair</a>
          
      </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="../CSS/principal.css">


<title>Administrativo</title>
<body>

    <div id="title" class="title">
<h1>Administrativo</h1>
</div> <!--fim title-->
    <section id="cards">

        <div class="row justify-content-md-center">
        
        <div class="col col-lg-2">
            <a href="../admin/graph.php"><div class=" card text-center border-lowblue mb-3" style="max-width: 20rem;">
                <div class="card-body text-success">
                    <div class="mt-5 col-12 col-md-4">
                        <img class="d-flex justify-content-center card-img-top plus-card-img" src="../Images/debitos.png" alt="Card image cap">  
                    </div>
                    <div id="card-foot" class="card-foot" >
                        mais vendidos
                    </div>    
                    </div> <!--fim card col-->
                </div><!--fim card body-->
            </div></a> <!--Fim card-->
        <div> <!--fim coluna-->

        <div class="col col-lg-2">
            <a href = "../admin/graph2.php  "><div class=" card text-center border-lowblue " style="max-width: 20rem;">
                <div class="card-body">
                    <div class="mt-5 col-12 col-md-4">
                        <img class="d-flex justify-content-center card-img-top plus-card-img" src="../Images/graph.png" alt="Card image cap">  
                    </div>
                    <div id="card-foot" class="card-foot">
                        Gráficos de débito
                    </div>    
                    </div> <!--fim card col-->
                </div><!--fim card body-->
            </div></a> <!--Fim card-->
        </div> <!--fim coluna-->
        
        </div> <!--fim Linha-->

         <div class="row justify-content-md-center">
        
        <div class="col col-lg-2">
            <a href="../admin/admin_criar.php"><div class=" card text-center border-lowblue mb-3" style="max-width: 20rem;">
                <div class="card-body text-success">
                    <div class="mt-5 col-12 col-md-4">
                        <img class="d-flex justify-content-center card-img-top plus-card-img" src="../Images/card-plus.png" alt="Card image cap">  
                    </div>
                    <div id="card-foot" class="card-foot" >
                        Criar Administrador
                    </div>    
                    </div> <!--fim card col-->
                </div><!--fim card body-->
            </div></a> <!--Fim card-->
        <div> <!--fim coluna-->

        <div class="col col-lg-2">
            <a href="../admin/admin_CRUD.php"><div class=" card text-center border-lowblue " style="max-width: 20rem;">
                <div class="card-body">
                    <div class="mt-5 col-12 col-md-4">
                        <img class="d-flex justify-content-center card-img-top plus-card-img" src="../Images/card-edit.png" alt="Card image cap">  
                    </div>
                    <div id="card-foot" class="card-foot">
                        Editar Administrador
                    </div>    
                    </div> <!--fim card col-->
                </div><!--fim card body-->
            </div></a> <!--Fim card-->
        </div> <!--fim coluna-->
        
        </div> <!--fim Linha-->

        
    </section>
    
</body>