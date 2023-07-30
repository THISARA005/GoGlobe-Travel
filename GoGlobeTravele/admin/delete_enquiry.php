<?php
// Include the necessary files and establish a database connection
require_once "db_connection.php";

// Check if the delete button for enquiry is clicked
if (isset($_POST['deleteEnquiry']) && isset($_POST['enquiry_id'])) {
    $enquiryIDToDelete = $_POST['enquiry_id'];

    // Perform the delete operation on the database
    $deleteQuery = "DELETE FROM enquiries WHERE enq_id = '$enquiryIDToDelete'";
    if (mysqli_query($conn, $deleteQuery)) {
        // Delete operation successful
        echo "db-Enquiry-list.php";
    } else {
        // Error occurred while deleting
        echo "Error: " . mysqli_error($conn);
    }
}

// Rest of the PHP code for fetching and displaying the table data for enquiries
// ...

?>
