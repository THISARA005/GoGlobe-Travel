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

<div id="siteLoader" class="site-loader">
            <div class="preloader-content">
                <img src="assets/images/loader1.gif" alt="">
            </div>
        </div>
        <div id="page" class="full-page">
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            

            <?php include 'user-dashboard-navbar.php'; ?>

        </main>
            
                <form action="save_user.php" method="POST" enctype="multipart/form-data" style="padding-bottom: 20px;">
                    <div id="dashboard" class="dashboard-container">
                        <div class="db-info-wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dashboard-box">
                                        <h4>Add New User</h4>
                                        <p>Update your account details here.</p>
                                        <form class="form-horizontal" method="post">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>First name</label>
                                                        <input name="firstname" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last name</label>
                                                        <input name="lastname" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <input name="phone" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input name="city" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input name="country" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>password</label>
                                                        <input name="password" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>UserName</label>
                                                        <input name="username" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="email" class="form-control" type="email">
                                                    </div>  
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Profile Picture</label>
                                                        <input name="profile_picture" class="form-control" type="file">
                                                    </div>  
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <input name="age" class="form-control" type="number" min="0" max="150" required>
                                                    </div>
                                                </div>
                                            <br>
                                            <input type="submit" name="Submit">
                                        </form>
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
        </form>
                   
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2021 Travele. All rights reserveds.
            </div>
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