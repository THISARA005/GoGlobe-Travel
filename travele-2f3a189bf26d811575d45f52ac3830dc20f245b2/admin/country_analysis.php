<?php
// Assuming you have established a database connection ($mysqli)

// Database connection configuration
$host = 'localhost';     // MySQL server hostname
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'goglobetravel';  // MySQL database name

// Create a new MySQLi object
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  // You can handle the connection error gracefully based on your requirements
  exit();
}

// Fetch data from the database
$sql = "SELECT country, COUNT(*) AS count FROM users GROUP BY country";
$result = mysqli_query($conn, $sql);

// Prepare data for the chart
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = array($row["country"], (int)$row["count"]);
}

// Convert data to JSON format
$jsonData = json_encode($data);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Country', 'Num of peoples'],
            <?php
            $sql = "SELECT country, COUNT(*) AS count FROM users GROUP BY country";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo "['".$row["country"]."', ".$row["count"]."],";
            }
          ?>
        ]);

        var options = {
            title: 'Country Analysis',
            titleTextStyle: {
          fontSize: 18 // Set the desired font size here
        }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
