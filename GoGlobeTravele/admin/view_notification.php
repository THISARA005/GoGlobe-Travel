<?php
// view_notification.php

if (isset($_GET['notification_id']) && is_numeric($_GET['notification_id'])) {
    $notificationID = $_GET['notification_id'];

    // Connect to the database (Replace 'your_db_connection_function' with your actual function name)
    $dbConnection = your_db_connection_function();

    // Update the 'is_viewed' flag for the notification
    $updateQuery = "UPDATE notification SET is_viewed = 1 WHERE notification_id = ?";
    $stmt = $dbConnection->prepare($updateQuery);
    $stmt->bind_param("i", $notificationID);
    $stmt->execute();
    $stmt->close();

    // Close the database connection
    $dbConnection->close();
}

// Redirect back to the admin dashboard
header("Location: admin_dashboard.php");
exit();
?>
