<?php
require_once "db_connection.php";



$query = "SELECT * FROM packages WHERE status = '1' ";
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
            $city = $row['city'];

            echo"

            <tbody>
                                <tr>
                                    <td>
                                        </span><span class='package-name'>$title</span>
                                    </td>
                                    <td>$chekin</td>
                                    <td>$city</td>
                                    <td><span class='badge badge-success'>Active</span></td>
                                    <td>
                                        <span class='badge badge-success'><i class='far fa-edit'></i></span>
                                        
                                    </td>
                                </tr>
                            </tbody>

                            <script>
                            function deleteRecord(packId) {
                                if (confirm('Are you sure you want to delete this record?')) {
                                    // Send an AJAX request to the server
                                    var xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            // If the delete operation was successful, remove the row from the table
                                            var row = document.getElementById('row_' + packId);
                                            row.parentNode.removeChild(row);
                                        }
                                    };
                                    xhttp.open('GET', 'delete_record.php?id=' + packId, true);
                                    xhttp.send();
                                }
                            }
</script>                            
            
            ";
        }

    }
}


?>