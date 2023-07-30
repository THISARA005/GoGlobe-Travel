<?php
// Include the necessary files and establish a database connection
require_once "db_connection.php";

// Check if the delete button is clicked
if (isset($_POST['deleteBooking']) && isset($_POST['bookingID'])) {
    $bookingIDToDelete = $_POST['bookingID'];

    // Perform the delete operation on the database
    $deleteQuery = "DELETE FROM pack_booking WHERE booking_ID = '$bookingIDToDelete'";
    if (mysqli_query($conn, $deleteQuery)) {
        // Delete operation successful
        echo "Booking deleted successfully!";
    } else {
        // Error occurred while deleting
        echo "Error: " . mysqli_error($conn);
    }
}

// Rest of the PHP code for fetching and displaying the table data
// ...

?>
<!doctype html>
<html lang="en">
<!-- ... Rest of your HTML code ... -->
