<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // PHP code to retrieve data from the database and format it as required
      <?php
      // Replace 'your_db_connection' with the actual variable name of your database connection
   // Assuming you have established a database connection ($mysqli)

        // Database connection configuration
        $host = 'localhost';     // MySQL server hostname
        $username = 'root';  // MySQL username
        $password = '';  // MySQL password
        $database = 'goglobetravel';  // MySQL database name

        // Create a new MySQLi object
        $connection = new mysqli($host, $username, $password, $database);
        if ($connection->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        // You can handle the connection error gracefully based on your requirements
        exit();
        } 

      // Retrieve distinct cities from the packages table
      $cityQuery = "SELECT DISTINCT city FROM packages";
      $cityResult = mysqli_query($connection, $cityQuery);

      // Retrieve distinct countries (years) from the users table
      $countryQuery = "SELECT DISTINCT country FROM users";
      $countryResult = mysqli_query($connection, $countryQuery);

      // Prepare the data array
      $data = array(array('Genre'));
      while ($cityRow = mysqli_fetch_assoc($cityResult)) {
        $data[0][] = $cityRow['city'];
        echo"111";
      }

      // Populate the data array with counts for each city in each country
      while ($countryRow = mysqli_fetch_assoc($countryResult)) {
        $country = $countryRow['country'];
        $data[] = array($country);

        $cityQuery = "SELECT city, COUNT(*) AS count FROM packages WHERE country = '$country' GROUP BY city";
        $cityResult = mysqli_query($connection, $cityQuery);

        $cityCounts = array();
        while ($cityRow = mysqli_fetch_assoc($cityResult)) {
          $cityCounts[$cityRow['city']] = (int)$cityRow['count'];
        }

        foreach ($data[0] as $city) {
          $data[count($data) - 1][] = isset($cityCounts[$city]) ? $cityCounts[$city] : 0;
        }
      }
      ?>

      // Convert PHP array to JavaScript array
      var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

      var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="columnchart" style="width: 600px; height: 400px;"></div>
</body>
</html>
