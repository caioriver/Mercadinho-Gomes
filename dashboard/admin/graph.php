<!-- header -->
<?php
require_once "../../fun/_fixed.php";
$conect = db_connect();
$query_2 = "SELECT DISTINCT(catg) FROM estoque;";
$stmt_2 = $conect->prepare($query_2);
$stmt_2->execute();
?>
               <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
               <script type="text/javascript">
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawDualX);

                function drawDualX() {
                    
                    var data = google.visualization.arrayToDataTable([
                        
                        ['Usuarios', 'Debitos'],
                        <?php while ($list_2 = $stmt_2->fetch(PDO::FETCH_ASSOC)):

                         $query_1 = "SELECT COUNT(catg) FROM estoque WHERE catg = :catg;";
                         $stmt_1 = $conect->prepare($query_1);
                         $stmt_1->bindValue(':catg',$list_2['catg']);
                         $stmt_1->execute();
                         $list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC);
                         
                         ?>      
                        ['<?php echo($list_2['nome']); ?>',<?php echo $list_1['COUNT(catg)'];?>],
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
            <?php
            var_dump($list_1);
            var_dump($list_2);
