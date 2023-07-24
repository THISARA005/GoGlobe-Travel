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
           
            <?php include 'dashboard-navbar.php'; ?>
            <div class="db-info-wrap db-add-tour-wrap">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Dates and Prices</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Group Size</label>
                                            <input type="number" name="grpSize" placeholder="No of Peoples">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Trip Duration</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Days">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Nights">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select>
                                                <option>Adult</option>
                                                <option>Child</option>
                                                <option>Couple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Sale Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
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
                                              <span class="upload-btn">Upload a image</span>
                                              <input type="file" name="myfile">
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
                                            <label>Select Map</label>
                                            <select>
                                                <option>Google Map</option>
                                                <option> Galle</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Publish</h4>
                                <div class="publish-btn">
                                    <div class="form-group">
                                        <input type="submit" name="draft" value="Save Draft">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="preview" value="Preview">
                                    </div>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Status:</strong>
                                        Draft
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-action">
                                    <input type="submit" name="publish" value="Publish">
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Popular</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Use Polpular
                                    </label>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="keyword" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Hotel
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span>
                                        Walking
                                    </label>
                                </div>
                                
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Add image</h4>
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Upload a image</span>
                                      <input type="file" name="myfile">
                                    </div>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                            <div class="form-group">
                            <label class="custom-input">
                                <input type="checkbox" name="active_status" value="1">
                                <span class="custom-input-field"></span>
                                Active Status
                            </label>
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
        <!-- Dashboard / End -->
    </div>
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