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
// Include the database connection file
$packId = $_GET['pack_id'];
$userId = $_GET['user_id'];


$query = "SELECT * FROM packages where pack_ID = $packId";
$result = mysqli_query($mysqli, $query);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
$description = $row['pack_description'];
$price = $row['reg_price'];
    }
}


$billing_date = date("Y-m-d");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data

   $name = $_POST['name_booking'];
   $email = $_POST['email_booking'];
   $phone = $_POST['phone_booking'];
   $dateold = $_POST['date'];
   $note= $_POST['note'];
    // Assuming the input field name is 's'
   $tourGuide = isset($_POST['tour_guide']) ? '1' : '0';
   $insurance = isset($_POST['insurance']) ? '1' : '0';
   $dinner = isset($_POST['dinner']) ? '1' : '0';
   $bikeRent = isset($_POST['bike_rent']) ? '1' : '0';
   $date = date('Y-m-d', strtotime($dateold));

   $sql = "INSERT INTO pack_booking (user_ID, pack_ID, booking_person, billing_email, phone,billing_date, check_in_date	, tourGuide, insurance, dinner, bikeRent,to_pay_amount,note)
   VALUES ($userId, $packId, '$name', '$email', '$phone','$billing_date', '$date', $tourGuide, $insurance, $dinner, $bikeRent,$price,'$note')";


   
    
    if (mysqli_query($mysqli, $sql)) {
        
        echo "<script>
        window.location.href = 'insert_cart.php?user_id=' + $userId + '&pack_id=' + $packId
        </script>";

    } else {
        echo "Error: " . mysqli_error($mysqli);
    }



}
?>
