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

$query ="SELECT p.* FROM packages p WHERE p.pack_ID IN (SELECT c.package_ID FROM cart c WHERE c.user_ID = $user_id)";

$query2 = "SELECT DISTINCT p.* FROM pack_booking p WHERE p.pack_ID = $pack_id AND p.user_ID = $user_id";
$result = mysqli_query($mysqli, $query2);

$tourGuidePrice=0;
$insurancePrice=0;
$dinnerPrice=0;
$bikeRentPrice=0;
$totalPrice=0;
$totalPricetoPay=0;

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //  $name = $row['booking_person'];
        //  $email = $row['billing_email'];
        //  $phone = $row['phone'];
        //  $date = $row['check_in_date'];
         $tourGuide = $row['tourGuide'];
         $insurance = $row['insurance'];
         $dinner = $row['dinner'];
         $bikeRent = $row['bikeRent'];
         $price = $row['to_pay_amount'];
    }
}

// $query=" SELECT * FROM PACKAGES WHERE pack_ID=$pack_id";
$result = mysqli_query($mysqli, $query);
$totalNetPrice = 0;
$totalPrice=0;
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $people = $row['grp_size'];
        $price = $row['reg_price'];
        
        // Calculate the total net price
        $totalNetPrice += ($price * $people);

        


    }

    $tourGuidePrice=$tourGuide*$people;
    $insurancePrice=$insurance*$people;
    $dinnerPrice=$dinner*$people;
    $bikeRentPrice=$bikeRent*$people;
    $totalPricetoPay=$totalNetPrice+$tourGuidePrice+$insurancePrice+$dinnerPrice+$bikeRentPrice;
    echo "<div class='widget-bg widget-table-summary'>
        <h4 class='bg-title'>Summary</h4>
        <table>
           <tbody>
              <tr>
                 <td>
                    <strong>Packages cost </strong>
                 </td>
                 <td class='text-right'>
                    $$totalNetPrice
                 </td>
              </tr>
              <tr>
                 <td>
                    <strong>Dedicated tour guide</strong>
                 </td>
                 <td class='text-right'>
                    $$tourGuidePrice
                 </td>
              </tr>
              <tr>
                 <td>
                    <strong>Insurance</strong>
                 </td>
                 <td class='text-right'>
                    $$insurancePrice
                 </td>
              </tr>
              <tr>
                 <td>
                    <strong>Meal</strong>
                 </td>
                 <td class='text-right'>
                 $$dinnerPrice
                 </td>
              </tr>
              <tr>
                 <td>
                    <strong>Bike rent</strong>
                 </td>
                 <td class='text-right'>
                 $$bikeRentPrice
                 </td>
              </tr>
              <tr class='total'>
                 <td>
                    <strong>Total cost</strong>
                 </td>
                 <td class='text-right'>
                    <strong>$$totalPricetoPay</strong>
                 </td>
              </tr>
           </tbody>
        </table>
     </div>";

}

else {
    echo "No packages found.";
}

// if ($result && mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//        $thumbnail = $row['thumb_image'];
//         $pack_id = $row['pack_ID'];
//         // Create a base64 encoded string from the image data
//         $programm=$row['program'];
//         $price = $row['reg_price'];
//         $duration_day = $row['duration_days'];
//         $duration_night = $row['duration_nights'];
//         $people = $row['grp_size'];
    
//         $title = $row['title'];
//         $ratings = $row['ratings'];
//         $review=$row['reviews'];
//         $description = $row['pack_description'];

        

        
        // Start package section
    
        // End package section
 

// Remember to close the database connection
mysqli_close($mysqli);
?>
