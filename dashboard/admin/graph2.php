<?php
require_once "../Constructs/header.php";
if ($_SESSION['type-user'] != 'super') {
     header("Location: ../Principal/principal.php");
}
require_once "../../fun/_fixed.php";
$conect = db_connect();
$query_1 = "SELECT nome,debit FROM usuarios ORDER BY debit ASC LIMIT 5;";
$stmt_1 = $conect->prepare($query_1);
$stmt_1->execute();
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
<link rel="stylesheet" type="text/css" href="../CSS/graph.css">

<title>Grafico - Débitos</title>
<body>

    <div id="title" class="title">
<h1>Débitos</h1>
</div> <!--fim title-->
    <section id="cards">
        <div id="chart_div"></div> <!-- Grafico -->
    </section>
    
</body>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawDualX);

function drawDualX() {
      
    var data = google.visualization.arrayToDataTable([
        
        ['Usuarios', 'Debitos'],
        <?php while($list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)): ?>
        ['<?php echo($list_1['nome']); ?>',<?php echo $var = ($list_1['debit']*(-1)); echo($var);?>],
        <?php endwhile; ?>
        ]);

      var materialOptions = {
        chart: {
          title: 'Usuários - Lista - maiores débitos'
        },
        hAxis: {
          title: 'Total Population'
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal',
        series: {
          1: {axis: '20'}
        },
        axes: {
          x: {
            20: {label: '2000 Population'}
          }
        }
      };


      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }
</script>
