<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Travele | Travel & Tour HTML5 template </title>
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
        <div class="dashboard-header sticky-header">
            <div class="content-left  logo-section pull-left">
                <h1><a href="#"><img src="assets/images/logo.png" alt=""></a></h1>
            </div>
            <div class="heaer-content-right pull-right">
                <div class="search-field">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Search Now">
                            <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                        </div>
                    </form>
                </div>
                <?php
                require_once('db_connection.php');
                // Fetch count of unread notifications from the database
                $unreadNotificationsQuery = "SELECT * FROM notification WHERE is_read = 0 ORDER BY timestamp DESC";
                $unreadNotificationsResult = mysqli_query($conn, $unreadNotificationsQuery);
                    ?>
                                        
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <div class="dropdown-item">
                            <i class="far fa-envelope"></i>
                            <?php
                                // Display the count of unread notifications
                            $unreadNotificationCount = mysqli_num_rows($unreadNotificationsResult);
                            if ($unreadNotificationCount > 0) {
                                echo '<span class="notify">' . $unreadNotificationCount . '</span>';
                            }
                            ?>
                        </div>
                    </a>
                    <div class="dropdown-menu notification-menu">
                        <h4><?php echo $unreadNotificationCount; ?> Unread Notifications</h4>
                        <ul>
                            <?php
                                // Display unread notifications in the admin header
                            while ($row = mysqli_fetch_assoc($unreadNotificationsResult)) {
                                    echo '<li>';
                                    echo '<a href="#">';
                                    echo '<div class="list-img">';
                                    echo '<img src="assets/images/comment4.jpg" alt="">';
                                    echo '</div>';
                                    echo '<div class="notification-content">';
                                    echo '<p>' . htmlspecialchars($row['message']) . '</p>';
                                    echo '<small>' . date("M j, Y g:i A", strtotime($row['timestamp'])) . '</small>';
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</li>';
                            }
                            ?>
                        </ul>
                        <a href="all-notifications.php" class="all-button">See all notifications</a>
                    </div>
                </div>
                    

                <?php
                require_once('db_connection.php');
                // Fetch count of unread notifications from the database
                $unreadNotificationsQuery = "SELECT * FROM admin WHERE id = 1";
                $unreadNotificationsResult = mysqli_query($conn, $unreadNotificationsQuery);
                while($row = mysqli_fetch_array($unreadNotificationsResult)){
                    $profile_pic = $row['profile_photo'];
                }
                    
                echo"
                <div class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown'>
                        <div class='dropdown-item profile-sec'>
                            <img src='uploads/$profile_pic' alt=''>
                            <span>My Account </span>
                            <i class='fas fa-caret-down'></i>
                        </div>
                    </a>
                    <div class='dropdown-menu account-menu'>
                        <ul>
                            <li><a href='#'><i class='fas fa-cog'></i>Settings</a></li>
                            <li><a href='#'><i class='fas fa-user-tie'></i>Profile</a></li>
                            <li><a href='#'><i class='fas fa-sign-out-alt'></i>Logout</a></li>
                        </ul>
                    </div>
                </div>";
                ?>
            </div>
        </div>  
            <div class="dashboard-navigation">

                <div id="dashboard-Navigation" class="slick-nav"></div>
                    <div id="navigation" class="navigation-container">
                        <ul>
                            <li><a href="dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                            <li><a href="user.php"><i class="fas fa-user"></i>Users</a>
                            
                            </li>
                            <li><a href="admin_list.php"><i class="fas fa-user"></i>Admins</a>
                            <li><a href="new-user.php">Add admin</a></li>
                            
                            <li><a href="db-add-destination.php"><i class="fas fa-umbrella-beach"></i>Add Destination</a></li>
                            <li><a href="db-add-package.php"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
                            <li class="active-menu">
                                <a><i class="fas fa-hotel"></i></i>packages</a>
                                <ul>
                                    <li><a href="db-package-active.php">Active</a></li>
                                    <li><a href="db-package-pending.php">Pending</a></li>
                                    <li><a href="db-package-change.php">Change package details</a></li>
                                </ul>   
                            </li>
                            <li><a href="db-booking.php"><i class="fas fa-ticket-alt"></i> Booking  </a></li>
                            <li><a href="db-Enquiry-list.php"><i class="fas fa-ticket-alt"></i> Enquiry  </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <h3>enquiries</h3>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                    <div class="table-responsive">
                        <table id="exportTable" class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>User_Id</th>
                                    <th>Date</th>
                                    <th>Subject</th>
                                  
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
require_once "db_connection.php";
//select all the enquiries from the database and take the user details who send the enquiry.

$query = "SELECT e.*, u.*
FROM enquiries e
JOIN users u ON e.user_id = u.user_ID
";

$result = mysqli_query($conn, $query);
//in here i need to show the enquiry details in the table.
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        $enquiry_id = $row['enq_id'];
        $user_id = $row['user_id'];
        $date = $row['date'];
        $subject = $row['subject'];
        $message = $row['message'];


        echo "
        <tr>
            <td>$user_id</td>
            <td>$date</td>
            <td>$subject</td>
            <td>$message</td>
            <td>
            <form action='delete_enquiry.php' method='post' class='delete-form'>
    <input type='hidden' name='enquiry_id' value='$enquiry_id'>
    <button type='submit' name='deleteEnquiry' class='badge badge-danger delete-btn' data-enquiry_id='$enquiry_id'><i class='far fa-trash-alt'></i></button>
</form>

        </td>
            
        ";
    }
} else {
    echo "<tr><td colspan='8'>No bookings found.</td></tr>";
}
?>

                            </tbody>
                        </table>
                        <form action="enqdatatoexcel.php" method="POST">
                        
        <button  type="submit" name="enqexportToExcel">Export to Excel</button>
        
  
</form>
                    </div>
                </div>
            </div>
      

            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2021 Travele. All rights reserveds.
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
        <!-- Include TableExport.js -->
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include TableExport.js -->
<script src="https://cdn.jsdelivr.net/npm/tableexport@5.2.2/dist/js/tableexport.min.js"></script>

<script>
    $(document).ready(function() {
        // Attach a click event handler to the delete buttons
        $('.delete-btn').onclick(function(e) {
            e.preventDefault();
            var enquiryID = $(this).data('enquiry_id');

            // Show a confirmation dialog before proceeding with the delete
            if (confirm('Are you sure you want to delete this inquiry?')) {
                // Submit the delete request via AJAX
                $.ajax({
                    type: 'POST',
                    url: 'delete_enquiry.php', // Replace with the actual PHP script that handles the delete operation
                    data: { deleteEnquiry: true, enquiryID: enquiryID },
                    success: function(response) {
                        // Display the success message from the PHP script
                        alert(response);

                        // Remove the deleted row from the table
                        $('.delete-form input[value="' + enquiryID + '"]').closest('tr').remove();
                    },
                    error: function(xhr, status, error) {
                        // Display the error message if deletion fails
                        alert('Error: ' + error);
                    }
                });
            }
        });
    });
</script>
  

    <!-- end Container Wrapper -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>