
<!doctype html>

<?php
// Start output buffering
ob_start();

// Include the specific file that contains the HTML division
include 'country_analysis.php';

// Get the output and stop buffering
$divisionContent = ob_get_contents();
ob_end_clean();
?>

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
                                    <li><a href="db-package-change-details.php">Price change History</a></li>
                                </ul>   
                            </li>
                            <li><a href="db-booking.php"><i class="fas fa-ticket-alt"></i> Booking  </a></li>
                            <li><a href="db-Enquiry-list.php"><i class="fas fa-ticket-alt"></i> Enquiry  </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="margin-left: 500px; margin-top:100px;">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Change Package Price History</h4>
                            <p>Here is the details where you change your package details.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Pack ID</th>
                                            <th>Old Price</th>
                                            <th>New Price</th>
                                            <th>Changed date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $servername = "localhost";
                                     $username = "root";
                                     $password = "";
                                     $dbname = "goglobetravel";
         
                                     $conn = new mysqli($servername, $username, $password, $dbname);
                                     if ($conn->connect_error) {
                                         die("Connection failed: " . $conn->connect_error);
                                     }

                                    $query = "SELECT * from change_pack_price";
                                    
                                    $result = mysqli_query($conn, $query);
                                    //in here i need to show the enquiry details in the table.
                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            $pack_id = $row['pack_id'];
                                            $old_price = $row['oldPrice'];
                                            $new_price = $row['newPrice'];
                                            $changed_date = $row['date'];
                                    
                                            echo "
                                            <tr>
                                                <td>$pack_id</td>
                                                <td>$old_price</td>
                                                <td>$new_price</td>
                                                <td>$changed_date</td>
                                                </tr>
                                                
                                            ";
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>No bookings found.</td></tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
        </div>
    </div>
    </script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>