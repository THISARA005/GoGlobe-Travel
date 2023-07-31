<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Sample data fetched from the database using the SQL query
            var data = google.visualization.arrayToDataTable([
                ['Age Range', 'User Count'],
                <?php
                // Replace this section with PHP code to fetch data from your database and format it as an array of arrays
                $host = 'localhost';     // MySQL server hostname
                $username = 'root';      // MySQL username
                $password = '';          // MySQL password
                $database = 'goglobetravel'; // MySQL database name

                // Create a new MySQLi object
                $conn = new mysqli($host, $username, $password, $database);
                if ($conn->connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                    // You can handle the connection error gracefully based on your requirements
                    exit();
                }

                // Fetch data from the database using the provided SQL query
                $query = "SELECT
                            CASE
                                WHEN age BETWEEN 10 AND 20 THEN '10-20'
                                WHEN age BETWEEN 20 AND 30 THEN '20-30'
                                WHEN age BETWEEN 30 AND 40 THEN '30-40'
                                WHEN age BETWEEN 40 AND 50 THEN '40-50'
                                ELSE '50+'
                            END AS age_range,
                            COUNT(*) AS user_count
                          FROM users
                          GROUP BY age_range";

                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "['" . $row['age_range'] . "', " . $row['user_count'] . "],";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            ]);

            var options = {
                chart: {
                    title: 'User Count by Age Range',
                    subtitle: 'Number of Users in Each Age Group',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>
<body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
</body>
</html>
