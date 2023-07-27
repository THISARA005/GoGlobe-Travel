<!-- Show the chart of last 3 months revenue generated. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Revenue Line Chart</title>
  <!-- Include the Google Charts library -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
  <!-- The combined chart will be displayed inside this div -->
  <div id="combined_chart" style="width: 900px; height: 500px;"></div>

  <!-- PHP code to fetch and format data for the combined chart -->
  <?php
  include_once 'db_connection.php';

  $query = "SELECT * FROM daily_revenue ORDER BY month, day";
  $result = mysqli_query($conn, $query);

  $data = array();

  if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $day = $row['day'];
      $month = $row['month'];
      $totalRevenue = $row['total_revenue'];

      // Format the data as an array of arrays
      $data[] = array('Day' => (int)$day, 'Month' => (int)$month, 'Total Revenue' => (float)$totalRevenue);
    }
  }

  // Convert the data to JSON format
  $dataJson = json_encode($data);
  ?>

  <!-- JavaScript to draw the combined line chart -->
  <script type="text/javascript">
    google.charts.load('current', {'packages': ['line']});
    google.charts.setOnLoadCallback(drawCombinedChart);

    function drawCombinedChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Total Revenue (May)');
      data.addColumn('number', 'Total Revenue (June)');
      data.addColumn('number', 'Total Revenue (July)');

      var jsonData = <?php echo $dataJson; ?>;
      var mayData = [];
      var juneData = [];
      var julyData = [];

      // Separate the data into different arrays based on the month
      jsonData.forEach(function(row) {
        var day = row.Day;
        var revenue = row['Total Revenue'];

        if (row.Month === 7) {
          mayData.push([day, revenue, null, null]);
        } else if (row.Month === 8) {
          juneData.push([day, null, revenue, null]);
        } else if (row.Month === 9) {
          julyData.push([day, null, null, revenue]);
        }
      });

      // Combine the data arrays for all three months
      data.addRows(mayData.concat(juneData).concat(julyData));

      var options = {
        chart: {
          title: 'Daily Revenue for May, June, and July',
          subtitle: 'Total revenue in USD',
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'},
          },
        },
      };

      var chart = new google.charts.Line(document.getElementById('combined_chart'));
      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</body>
</html>
