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
$query = "SELECT * FROM packages where pack_ID = $pack_id";
$result = mysqli_query($mysqli, $query);


if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $thumbnail = $row['thumb_image'];
        $pack_id = $row['pack_ID'];
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

        

        echo "<div class='package-price'>
        <h5 class='price'>
           <span>$price</span> / per person
        </h5>
        <div class='start-wrap'>
           <div class='rating-start' title='Rated 5 out of 5'>
              <span style='width: 60%''></span>
           </div>
        </div>
     </div>";


        // Start package section
    
        // End package section
    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
