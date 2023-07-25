<?php
require_once "db_connection.php";

$query = "SELECT * FROM packages WHERE status = '0' ";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_array($result)) {
        
        $packId = $row['pack_ID'];
        $title = $row['title'];
        $query2 = "SELECT * FROM pack_booking WHERE pack_ID= '$packId'";
        $result2 = mysqli_query($conn, $query2);

        // Prepare the URL for the delete operation (delete_package.php)
        $deleteUrl = "delete_package.php?pack_id=" . urlencode($packId);

   
// ... Your existing PHP code to fetch and display pending packages ...

// Add the pack ID as a data attribute to each row
while ($row2 = mysqli_fetch_array($result2)) {
  
    $packId = $row['pack_ID'];
    $title = $row['title'];
    $chekin = $row2['check_in_date'];
    $city = $row['location'];

    echo "
        <tbody>
            <tr id='row_$packId'> <!-- Add a unique identifier for each row -->
                <td>
                    </span><span class='package-name'>$title</span>
                </td>
                <td>$chekin</td>
                <td>$city</td>
                <td><span class='badge badge-primary'>Pending</span></td>
                <td>
                    <span class='badge badge-success'><i class='far fa-edit'></i></span>
                    <!-- Call the JavaScript function deleteRecord() with the pack ID as a parameter -->
                    <span class='badge badge-danger' onclick='deleteRecord($packId)'><i class='far fa-trash-alt'></i></span>
                </td>
            </tr>
        </tbody>
    ";
}


    }
}
?>
