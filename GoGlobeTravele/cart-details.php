<?php

// Assuming you have established a database connection ($mysqli)

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

$pack_id = $_GET['pack_id'];
$user_id = $_GET['user_id'];



// $query = "SELECT * FROM packages where pack_ID = $pack_id";
// $result = mysqli_query($mysqli, $query);

$query ="SELECT p.* FROM packages p WHERE p.pack_ID IN (SELECT c.package_ID FROM cart c WHERE c.user_ID = $user_id)";

// $query=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";
$result = mysqli_query($mysqli, $query);

$totalPrice=0;

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $thumbnail = $row['thumb_image'];
        //$pack_id = $row['pack_ID'];
        // Create a base64 encoded string from the image data
        $programm=$row['program'];
        $price = $row['reg_price'];
        $duration_day = $row['duration_days'];
        $duration_night = $row['duration_nights'];
        $people = $row['grp_size'];
    
        $title = $row['title'];
        $ratings = $row['ratings'];
        $review=$row['reviews'];
        $description = $row['pack_description'];

        $totalPrice += $price;
      
        $row_id = "cart_item_" . $row['pack_ID'];

        
        echo "<tbody id='$row_id'>
        <tr>
        <td data-column='Actions'>
        <!-- Set pack ID as a data attribute for the 'Remove' button -->
        <button class='close' data-dismiss='alert' aria-label='Close' data-pack-id='$pack_id'>
            <span aria-hidden='true'>×</span>
        </button>
  
            <span class='cartImage'><img src='uploads/$thumbnail' alt='image'></span>
          </td>
          <td data-column='Product Name'>$description</td>
          <td data-column='Price'>$ $price</td>
          
          <td data-column='Sub Total'>$ $price</td>
        </tr>
      </tbody>";
    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
