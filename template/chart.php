<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        <?php
				foreach($listeEvenements as $Evenement){
			?>
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          [<?php echo $Evenement['nomEvenement']; ?>,<?php echo $Evenement['nmbrParticipants']; ?>]
        ]);
        <?php } ?>

        var options = {
          title: 'Taux de participation aux événements',
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