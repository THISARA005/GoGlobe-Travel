<?php

$host = 'localhost';       
$username = 'root';        
$password = '';            
$database = 'goglobetravel';  

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    
    exit();
}

// Get pack_id and user_id from the query string
$packId = $_GET['pack_id'];
$userId = $_GET['user_id'];

// Retrieve booking details from the database
$sql1 = "SELECT * FROM pack_booking WHERE pack_ID = $packId AND user_ID = $userId";
$bookingResult = mysqli_query($mysqli, $sql1);
$row = mysqli_fetch_assoc($bookingResult);

// Extract relevant booking information
$check_in_date = $row['check_in_date'];
$fName = $row['booking_person'];
$email = $row['billing_email'];
$phone = $row['phone'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $card_name = $_POST['card_Name'];
    $card_number = $_POST['card_number'];
    $policy = isset($_POST['acceptCheckbox']) ? 1 : 0;

    // Insert invoice data into the database
    $insertInvoiceQuery = "INSERT INTO invoice (pack_ID, user_ID, check_in_date, Fname, Email, phone, car_Number, policy, payment_status)
                           VALUES ($packId, $userId, '$check_in_date', '$fName', '$email', '$phone', '$card_number', $policy, 1)";

    // Execute the invoice insertion query
    if (mysqli_query($mysqli, $insertInvoiceQuery)) {
        // Invoice insertion successful, proceed with notification creation
        
        // Compose the notification message
        $notificationMessage = "New booking by User ID: $userId for Package ID: $packId";
        
        // Insert notification data into the database
        $insertNotificationQuery = "INSERT INTO notification (message, timestamp, is_read)
                                    VALUES ('$notificationMessage', NOW(), 0)";
        
        // Execute the notification insertion query
        if (mysqli_query($mysqli, $insertNotificationQuery)) {
           
            $query="UPDATE packages
            SET status = '1'
            WHERE pack_ID = $packId
            ";
            $result = mysqli_query($mysqli, $query);
            
            header("Location: confirmation.php?user_id=$userId&pack_id=$packId");
            exit();
        } else {
            echo "Error creating notification: " . mysqli_error($mysqli);
        }
    } else {
        echo "Error creating invoice: " . mysqli_error($mysqli);
    }
}
?>
