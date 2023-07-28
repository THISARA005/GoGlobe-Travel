<?php
// Database connection configuration
$host = 'localhost';     // MySQL server hostname
$username = 'root';  // MySQL username
$password = '';  // MySQL password
$database = 'goglobetravel';  // MySQL database name

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    // You can handle the connection error gracefully based on your requirements
    exit();
}

// Mark all notifications as read when admin views all notifications
$markAllReadQuery = "UPDATE notifications SET is_read = 1";
mysqli_query($mysqli, $markAllReadQuery);

// Fetch all notifications from the database
$allNotificationsQuery = "SELECT * FROM notification ORDER BY timestamp DESC";
$allNotificationsResult = mysqli_query($mysqli, $allNotificationsQuery);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>All Notifications</title>
</head>
<body>
    <div class="container mt-5">
        <h1>All Notifications</h1>
        <ul>
            <?php
            // Display all notifications
            while ($row = mysqli_fetch_assoc($allNotificationsResult)) {
                echo '<li>';
                echo '<div class="notification-content">';
                echo '<p>' . htmlspecialchars($row['message']) . '</p>';
                echo '<small>' . date("M j, Y g:i A", strtotime($row['timestamp'])) . '</small>';
                echo '</div>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>
