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



// $query=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";


$billing_date = date("Y-m-d");
$sql1=" SELECT distinct * from pack_booking where pack_ID=$packId AND user_ID=$userId";
$Bookingresult = mysqli_query($mysqli, $sql1);
$row = mysqli_fetch_assoc($Bookingresult);
$check_in_date=$row['check_in_date'];
$fName=$row['booking_person'];
$email=$row['billing_email'];
$phone=$row['phone'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Get the form data
   
   $card_name = $_POST['card_Name'];
   $card_number = $_POST['card_number'];
   $policy = isset($_POST['acceptCheckbox']) ? 1 : 0;

   $insertInvoiceQuery = " INSERT INTO invoice (pack_ID, user_ID, check_in_date, Fname, Email, phone, car_Number, policy, payment_status)
   VALUES ($packId, $userId, '$check_in_date', '$fName', '$email', '$phone', '$card_number', '$policy','1');
    ";

    $updateBookingQuery = " UPDATE packages SET status = '1' WHERE pack_ID = $packId  ";
    mysqli_query($mysqli, $updateBookingQuery);

   
    
    if (mysqli_query($mysqli, $insertInvoiceQuery)) {
        
        echo "<script>
        window.location.href = 'confirmation.php?user_id=' + $userId + '&pack_id=' + $packId
        </script>";

    } else {
        echo "Error: " . mysqli_error($mysqli);
    }



}
?>
