<?php
require_once "db_connection.php";
//take the form in db-booking.php. In here i need to take the data from the form and put it in the excel file.
$output='';
if(isset($_POST['exportToExcel'])){
    $query = "SELECT pb.booking_ID, pb.check_in_date, pb.grp_size, p.title, p.city, p.status, u.fName
FROM pack_booking pb
LEFT JOIN packages p ON pb.pack_ID = p.pack_ID
LEFT JOIN users u ON pb.user_ID = u.user_ID
";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)

{
    $output .='
    <table class="table" bordered="1">
    <tr>
    <th>Booking ID</th>
    <th>Check In Date</th>
    <th>Group Size</th>
    <th>Package Title</th>
    <th>City</th>
    <th>Status</th>
    <th>Customer Name</th>
    </tr>
    ';
    while($row = mysqli_fetch_array($result))
    {
        $output .='
        <tr>
        <td>'.$row["booking_ID"].'</td>
        <td>'.$row["check_in_date"].'</td>
        <td>'.$row["grp_size"].'</td>
        <td>'.$row["title"].'</td>
        <td>'.$row["city"].'</td>
        <td>'.$row["status"].'</td>
        <td>'.$row["fName"].'</td>
        </tr>
        ';
    }
    $output .='</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=download.xls");
    echo $output;
}

}
?>