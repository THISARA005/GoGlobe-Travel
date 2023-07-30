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
                        <li><a href="db-enquiry.php?user_id=<?php echo $_GET['user_id']; ?>"><i class="far fa-heart"></i>Enquiry</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Badges</a></li>        
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
           
            <!-- Content / End -->
            <!-- Copyrights -->
        </div>
     
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>