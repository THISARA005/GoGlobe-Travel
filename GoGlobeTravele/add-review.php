<?php
// Include the database connection file
require_once 'db_connection.php';

$userId = $_GET['user_id'];
$packId = $_GET['pack_id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $subject = $_POST['subject'];
    $date = date("Y-m-d");

    $sql = "INSERT INTO pack_review (`ratings`, `review`, `subject`, `date`, `user_ID`, `pack_ID`) VALUES ('$rating', '$review', '$subject', '$date', '$userId', '$packId')";

    if(mysqli_query($conn, $sql)){
        
        echo "<script>
        window.location.href = 'package-detail.php?user_id=' + $userId + '&pack_id=' + $packId;
        </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}