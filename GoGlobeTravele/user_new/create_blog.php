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
    
<form action="add-blog.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST" enctype="multipart/form-data">
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
                        
                        <li><a href="db-booking.html"><i class="fas fa-ticket-alt"></i> Booking History</a></li>
                        <li><a href="user-edit.html"><i class="fas fa-sign-out-alt"></i> Change Profile</a></li>
                        <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Enquiry</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Badges</a></li>        
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="db-info-wrap db-add-tour-wrap">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Quate</label>
                                    <textarea name="Quate" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Personal About</label>
                                    <textarea name="About" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Gallery</h4>
                            <div class="custom-field-wrap">
                                <div class="dragable-field">
                                    <div class="dragable-field-inner">
                                        <p class="drag-drop-info">Drop Files To Upload</p>
                                        <p>or</p>
                                        <div class="upload-input">
                                            <div class="form-group">
                                                <span class="upload-btn">Upload images</span>
                                                <input type="file" name="gallery[]" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Location</h4>
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select location</label>  
                                            <input type="text" name="location">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">   
                        <div class="dashboard-box">
                            <div class="custom-field-wrap db-pop-field-wrap">
                            <h4>Category</h4>
                                <div class="form-group">
                                    <select name="category"required >
                                        <option value="">Select a Category</option>
                                        <option value="A">Solo travel</option>
                                        <option value="B">Family trip</option>
                                        <option value="C">Romance Trip</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Destination
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" >
                                        <span class="custom-input-field"></span>
                                        hiking
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" >
                                        <span class="custom-input-field"></span>
                                        Travel Dairies
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" >
                                        <span class="custom-input-field"></span>
                                        Travelling
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" >
                                        <span class="custom-input-field"></span>
                                        Trekking
                                    </label>
                                </div>
                                
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Add thumbnail image</h4>
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn" >Upload a image</span>
                                      <input type="file" name="thumb_image">
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-box">
                            <div class="custom-field-wrap">         
                                <div class="publish-action">
                                    <input type="submit" name="publish" value="Publish">
                                </div>
                            </div>
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
    </div>
</div>
        
        <!-- Dashboard / End -->
   
</form>
    <!-- end Container Wrapper -->
    <!-- end Container Wrapper -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/padhai/dashboard-addtour.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2020 09:01:50 GMT -->
</html>