<!-- header -->
<?php
require_once "../Constructs/header.php";
if ($_SESSION['type-user'] != 'super') {
     header("Location: ../Principal/principal.php");
}
require_once "../../fun/_fixed.php";
$conect = db_connect();
$query_1 = "SELECT DISTINCT(catg) FROM estoque ORDER BY id ASC;";
$stmt_1 = $conect->prepare($query_1);
$stmt_1->execute();
$list_2 = $stmt_1->fetch(PDO::FETCH_ASSOC)

?>
<?php var_dump($list_2);      
      ?>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div>
  <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBarColors);
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBarColors);

function drawBarColors() {
      var data = google.visualization.arrayToDataTable([
        
        ['City', '2010 Population', '2000 Population'],
        <?php while($list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)):?>
        ['<?php echo($list_1['catg']);?>', 8175000, 8008000]
        <?php endwhile; ?>  
    ]);
    var options = {
        title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        colors: ['#b0120a', '#ffab91'],
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'City'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>