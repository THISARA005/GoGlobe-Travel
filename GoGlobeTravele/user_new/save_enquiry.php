

<?php
require_once "db_connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $title = $_POST["title"];
    $pack_description = $_POST["pack_description"];
    $current_date = date("Y-m-d"); // Get the current date in YYYY-MM-DD format
    $user_id = $_GET['user_id'];
    // You might need to fetch the user ID from the user session
    // For demonstration purposes, let's assume the user ID is 1
    $user_id = $_GET['user_id'];

    // Make sure to perform proper validation and sanitization of user input before storing it in the database
    // ...

    // Insert the data into the "enquiries" table
    $query = "INSERT INTO enquiries (user_id, subject, message, date) 
              VALUES ('$user_id', '$title', '$pack_description', '$current_date')";

    // Assuming you have a database connection in $conn variable
    if (mysqli_query($conn, $query)) {
        // Data inserted successfully

        // Generate notification message
        $notification_message = "New enquiry from user $user_id at $current_date";

        // Insert the notification message into the "notifications" table
        $notification_query = "INSERT INTO notification (message, timestamp) 
                               VALUES ('$notification_message', '$current_date')";

if (mysqli_query($conn, $notification_query)) {
    // Notification message inserted successfully
    echo '<script>
            alert("Enquiry submitted successfully!");
            setTimeout(function() {
                window.location.href = "dashboard.php?user_id=' . $user_id . '"; 
            }, 2000); // Redirect after 2 seconds (adjust as needed)
         </script>';
} 
else {
            // Error occurred while inserting notification message
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Error occurred while inserting data
        // You might want to handle the error gracefully and show an error message to the user
        echo "Error: " . mysqli_error($conn);
    }
}
?>
