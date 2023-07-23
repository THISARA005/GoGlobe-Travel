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


$insertInvoiceQuery = " SELECT DISTINCT * FROM invoice WHERE pack_ID=$packId AND user_ID=$userId";
$result = mysqli_query($mysqli, $insertInvoiceQuery);

 if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $name = $row['Fname'];
    $email = $row['Email'];
    $phone = $row['phone'];
    $card_number = $row['car_Number'];
    $check_in_date = $row['check_in_date'];
    $pack_id = $row['pack_ID'];
    $user_id = $row['user_ID'];
    $policy = $row['policy'];
    $payment_status = $row['payment_status'];
    $invoice_ID = $row['invoice_ID'];
    


    echo " 
    
  
                <table class='table'>
                   <tbody>
                      <tr>
                         <td>Booking id:</td>
                         <td>$invoice_ID</td>
                      </tr>
                      <tr>
                         <td>Name:</td>
                         <td>$name</td>
                      </tr>
                     
                      <tr>
                         <td>Email:</td>
                         <td>$email</td>
                      </tr>
                      <tr>
                         <td>Phone</td>
                         <td>$phone</td>
                      </tr>
                      <tr>
                         <td>Card number</td>
                         <td>$card_number</td>
                      </tr>
                      <tr>
                         <td>payment_status:</td>
                         <td>$payment_status</td>
                      </tr>
                      <tr>
                         <td>user_id:</td>
                         <td>$user_id</td>
                      </tr>
                      <tr>
                         <td>pack_id:</td>
                         <td>$pack_id</td>
                      </tr>
                      
                     
                   </tbody>
                </table>
                "
     ;

 } else {
     echo "Error: " . mysqli_error($mysqli);
 }

