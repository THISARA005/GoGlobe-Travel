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

                <div id="dashboard-Navigation" class="slick-nav"></div>
                    <div id="navigation" class="navigation-container">
                        <ul>
                            <li><a href="dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                            <li><a><i class="fas fa-user"></i>Users</a>
                                <ul>
                                    <li>
                                        <a href="user.php">User</a>
                                    </li>
                                    <li>
                                        <a href="user-edit.php">User edit</a>
                                    </li>
                                    <li>
                                        <a href="new-user.php">New user</a>
                                    </li>
                                </ul>
                            </li>
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
                            <li><a href="db-Enquiry.php"><i class="fas fa-ticket-alt"></i> Enquiry  </a></li>
                            <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>User Details</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Listings</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment2.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment3.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment4.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment5.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment6.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>