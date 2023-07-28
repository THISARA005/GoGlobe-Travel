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
                    <h1><a href="../index.html"><img src="assets/images/logo.png" alt=""></a></h1>
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
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="notifyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-item">
                                <i class="far fa-envelope"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu" aria-labelledby="notifyDropdown">
                            <h4> 3 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment2.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment3.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="far fa-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 3 Messages</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment4.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment5.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment6.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="assets/images/comment.jpg" alt="">
                                <span>My Account </span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="#"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li class="active-menu"><a href="dashboard.php?user_id=<?php echo $_GET['user_id']; ?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Blog</a>
                            <ul>
                                <li>
                                    <a href="blog-archive.php?user_id=<?php echo $_GET['user_id']; ?>">Blog List</a>
                                </li>
                                <li>
                                    <a href="create_blog.php?user_id=<?php echo $_GET['user_id']; ?>"> Write a blog</a>
                                </li>
                                <li>
                                    <a href="blog-personal-list.html?user_id=<?php echo $_GET['user_id']; ?>">See review</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a><i class="fas fa-hotel"></i></i>Gallery</a>
                            <ul>
                                <li><a href="db-package-active.html">View Gallery</a></li>
                                <li><a href="db-package-pending.html">Add images</a></li>
                                <li><a href="db-package-expired.html">Expired</a></li>
                            </ul>   
                        </li>
                        
                        <li><a href="db-booking.php?user_id=<?php echo $_GET['user_id']; ?>"><i class="fas fa-ticket-alt"></i> Booking History</a></li>
                        <li><a href="user-edit.php?user_id=<?php echo $_GET['user_id']; ?>"><i class="fas fa-sign-out-alt"></i> Change Profile</a></li>
                        <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Enquiry</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Badges</a></li>        
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Recent Booking</h4>
                    <p>This is your recent bookings made by you.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Destination</th>
                                    <th>Id</th>
                                    <th>status</th>
                                    <th>Enquiry</th>
                                    <th>People</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Assuming you have established a database connection ($mysqli)
                                include 'db_connection.php';
                                // Get the user_id from the URL
                                $user_id = $_GET['user_id'];

                                // Query the pack_booking table to get relevant booking details for the user
                                $query = "SELECT pb.*, p.*, u.*
          FROM pack_booking pb
          JOIN packages p ON pb.pack_ID = p.pack_ID
          JOIN users u ON pb.user_ID = u.user_ID
          WHERE pb.user_ID = $user_id";


                                $result = mysqli_query($conn, $query);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $fName=$row['fName']; // You can replace this with the actual user name if available
                                        $Lname=$row['Lname']; // You can replace this with the actual user name if available
                                        $profile_pic=$row['profile_pic']; // You can replace this with the actual user name if available
                                        $date = $row['check_in_date']; // Change this to the appropriate column name from the pack_booking table
                                        $destination = $row['location'];
                                        $booking_id = $row['booking_ID'];
                                        $status = ($row['status'] == 1) ? "Approve" : "Pending"; // Assuming status values are 0 or 1
                                        $duration = $row['duration_days'];
                                         // Change this to the appropriate column name from the pack_booking table
                                        $people = $row['grp_size']; // Change this to the appropriate column name from the pack_booking table
                                        $price = $row['sale_price']; // Assuming this is the package price from the packages table

                                        $travel_status = "";
                                        switch ($row['travel_status']) {
                                            case 0:
                                                $travel_status = "Upcoming";
                                                break;
                                            case 1:
                                                $travel_status = "Ongoing";
                                                break;
                                            case -1:
                                                $travel_status = "Expired";
                                                break;
                                            default:
                                                $travel_status = "Unknown";
                                        }

                                        echo "
                                            <tr>
                                                <td>
                                                    <span class='list-img'><img src='uploads/$profile_pic' alt=''>
                                                    </span><span class='list-enq-name'>$fName $Lname</span>
                                                </td>
                                                <td>$date</td>
                                                <td>$destination</td>
                                                <td>$booking_id</td>
                                                <td><span class='badge badge-success'>$travel_status</span></td>
                                                <td>
                                                    <span class='badge badge-success'>$duration</span>
                                                </td>
                                                <td><span class='badge badge-success'>$people</span></td>
                                                <td>
                                                <span class='badge badge-danger' onclick='deleteRecord($booking_id)'><i class='far fa-trash-alt'></i></span>
                                            </td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='8'>No bookings found.</td></tr>";
                                }

                                // Remember to close the database connection
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
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
    <!-- Add this inside the <head> section or before the closing </body> tag -->
    <script>
function deleteRecord(bookingId) {
    // Show a confirmation dialog to the user
    if (confirm("Are you sure you want to delete this booking?")) {
        // If the user confirms, send an AJAX request to delete_booking.php
        $.ajax({
            type: "POST",
            url: "delete_booking.php",
            data: { booking_id: bookingId },
            success: function (response) {
                if (response === "success") {
                    // If the deletion is successful, remove the corresponding row from the UI
                    const rowToDelete = $("td:contains(" + bookingId + ")").closest("tr");
                    rowToDelete.remove();
                } else {
                    alert("Error deleting the booking.");
                }
            },
            error: function () {
                alert("Error occurred while deleting the booking.");
            },
        });
    }
}
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