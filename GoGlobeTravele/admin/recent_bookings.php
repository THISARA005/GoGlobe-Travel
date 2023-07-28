<?php
include 'db_connection.php'; // Include the database connection file



$query = "SELECT u.*, pb.billing_date
FROM users u
JOIN (
    SELECT user_ID, billing_date
    FROM pack_booking
    ORDER BY billing_date DESC
    LIMIT 5
) pb ON u.user_ID = pb.user_ID";

$result = mysqli_query($conn, $query);


if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $fName=$row['fName'];
        $Lname=$row['Lname'];
        $profile_pic=$row['profile_pic'];
        //$booking_date=$row['booking_date'];
        $country=$row['country'];
        $billing_date=$row['billing_date'];

        // $query1="SELECT COUNT(*) AS count FROM enquiries WHERE user_ID = $user_ID";
        // $numQueries = mysqli_num_rows($result);

        
                  
        echo "<tbody>
        <tr>
            <td>
                <label class='custom-input'><input type='checkbox' checked='checked'>
                <span class='custom-input-field'></span></label>
            </td>
            <td><span class='list-img'><img src='uploads/$profile_pic' alt=''></span>
            </td>
            <td><span class='list-enq-name'>$fName $Lname</span>
            </td>
            <td>$billing_date</td>
            <td>$country</td>
            <td>
                <span class='badge badge-success'>15</span>
            </td>
        </tr>
    </tbody>";

     
    } 
}else {
        echo "No packages found.";
    }

mysqli_close($conn);
?>
