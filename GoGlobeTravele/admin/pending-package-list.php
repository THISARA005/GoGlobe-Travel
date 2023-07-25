<?php
require_once "db_connection.php";



$query = "SELECT * FROM packages WHERE status = '0' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        $packId = $row['pack_ID'];
        $title = $row['title'];

        $query2=" SELECT * FROM pack_booking WHERE pack_ID=$packId";
        $result2 = mysqli_query($conn, $query2);
        //$row2 = mysqli_fetch_assoc($result2);
        while($row2=mysqli_fetch_array($result2)){
            $chekin = $row2['check_in_date'];
            $city = $row2['city'];

            echo"

            <tbody>
            <tr>
                <td>
                    </span><span class='package-name'>$title</span>
                </td>
                <td>$chekin</td>
                <td>$city</td>
                <td><span class='badge badge-primary'>Pending</span></td>
                <td>
                    <span class='badge badge-success'><i class='far fa-edit'></i></span>
                    <span class='badge badge-danger' onclick='deleteRecord($packId)'><i class='far fa-trash-alt'></i></span>
                </td>
            </tr>
            
        </tbody>
            
            ";
        }

    }
}


?>