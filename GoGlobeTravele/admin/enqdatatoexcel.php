<?php
require_once "db_connection.php";
//take the form in db-booking.php. In here i need to take the data from the form and put it in the excel file.
$output='';
if(isset($_POST['enqexportToExcel'])){
    $query = "SELECT e.*, u.*
    FROM enquiries e
    JOIN users u ON e.user_id = u.user_ID
";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    
    $output .='
    <table class="table" bordered="1">
    <tr>
    <th>User</th>
    <th>User_Id</th>
    <th>Date</th>
    <th>Subject</th>
  
 
    </tr>
    ';
    while($row = mysqli_fetch_array($result))
    {
        $enquiry_id = $row['enq_id'];
    $user_id = $row['user_id'];
    $date = $row['date'];
    $subject = $row['subject'];
    $message = $row['message'];
        $output .='
        <tr>
        <td>'.$user_id.'</td>
        <td>'.$date.'</td>
        <td>'.$subject.'</td>
        <td>'.$message.'</td>
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