<?php
    include 'class/connection.php';
    include 'class/funciones.php';

    $res = distribucionConexionesDia();
?>

<html>
  <head>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Organizatio', 'Sessions'],
          <?php  
            
            while ($fila = $res->fetch_assoc()) {
              
              echo "['".$fila['organization']."', ".$fila['sesiones']."],";

            }
            
            // while ($filas = $conn->mysql_fetch_array()) {
            //   echo $filas;
            //   echo "['".$filas['organization']."', ".$filas['sesiones']."],";
            // }

          // ?>
        ]);

        var options = {
          title: 'Conexiones-Por-Dia',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>