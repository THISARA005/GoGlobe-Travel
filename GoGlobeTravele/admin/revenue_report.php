<?php
include 'db_connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Insert the form data into the database
    $query = "SELECT * FROM pack_booking WHERE billing_date BETWEEN '$startDate' AND '$endDate'";

    $result = mysqli_query($conn, $query);
    $totalRevenue = 0;

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div style='text-align: center; border: 1px solid #ccc; padding: 20px; margin: 20px auto; max-width: 600px;'>";

        // Print the heading
        echo "<h3 style='text-align: center; text-decoration: underline; margin-bottom: 20px;'>Revenue report from $startDate to $endDate</h3>";

        // Print the table with borders
        echo "
        <table style='width: 100%; border-collapse: collapse;'>
            <thead>
                <tr style='border: 1px solid #000;'>
                    <th style='border: 1px solid #000;'>ID</th>
                    <th style='border: 1px solid #000;'>Name</th>
                    <th style='border: 1px solid #000;'>Amount</th>
                </tr>
            </thead>
            <tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            $paid_amount = $row['to_pay_amount'];
            $totalRevenue = $totalRevenue + $paid_amount;
            $pack_id = $row['pack_ID'];
            $user_id = $row['user_ID'];

            $query1 = "SELECT * FROM packages WHERE pack_ID=$pack_id";
            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);
            $pack_name = $row1['title'];

            echo "
                <tr style='border: 1px solid #000;'>
                    <td style='border: 1px solid #000;'>$user_id</td>
                    <td style='border: 1px solid #000;'>$pack_name</td>
                    <td style='border: 1px solid #000;'>$paid_amount</td>
                </tr>";
        }

        echo "</tbody>
            </table>";

        // Print the total revenue
        echo "<h3 style='text-align: center; text-decoration: underline; margin-top: 20px;'>Total Revenue</h3>";
        echo "<div style='text-align: center;'>
            <strong>$$totalRevenue</strong>
        </div>";

        // Print the button to print the window
        echo "<button onclick='window.print()' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px; margin-top: 20px;'>
                Print
              </button>";

        // Add a button to redirect to hello.html
        echo "<a href='dashboard.php' target='_self'>
                <button style='background-color: #008CBA; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 4px; margin-top: 20px;'>
                  Go to Dashboard
                </button>
              </a>";

        echo "</div>"; // Close the center div
    } else {
        echo "No packages found.";
    }
}
mysqli_close($conn);
?>
