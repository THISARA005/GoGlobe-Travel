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
                
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li><a href="dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Users</a>
                            <ul>
                                <li>
                                    <a href="user.html">User</a>
                                </li>
                                <li>
                                    <a href="user-edit.html">User edit</a>
                                </li>
                                <li>
                                    <a href="new-user.html">New user</a>
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
                        <li><a href="db-booking.html"><i class="fas fa-ticket-alt"></i> Booking & Enquiry</a></li>
                        <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Comments</a></li>
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-package-wrap">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Packages List</h4>
                    <p>Nonummy hac atque adipisicing donec placeat pariatur quia ornare nisl.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Destination</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                           
                            <?php
                            require_once "db_connection.php";

                            $query = "SELECT * FROM packages WHERE status = '0' ";

                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) > 0) {
                                
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    $packId = $row['pack_ID'];
                                    $title = $row['title'];
                                    $query2 = "SELECT * FROM pack_booking WHERE pack_ID= '$packId'";
                                    $result2 = mysqli_query($conn, $query2);

                                    // Prepare the URL for the delete operation (delete_package.php)
                                    $deleteUrl = "delete_package.php?pack_id=" . urlencode($packId);

                            
                            // ... Your existing PHP code to fetch and display pending packages ...

                            // Add the pack ID as a data attribute to each row
                            while ($row2 = mysqli_fetch_array($result2)) {
                            
                                $packId = $row['pack_ID'];
                                $title = $row['title'];
                                $chekin = $row2['check_in_date'];
                                $city = $row['location'];

                                echo "
                                    <tbody>
                                        <tr id='row_$packId'> <!-- Add a unique identifier for each row -->
                                            <td>
                                                </span><span class='package-name'>$title</span>
                                            </td>
                                            <td>$chekin</td>
                                            <td>$city</td>
                                            <td><span class='badge badge-primary'>Pending</span></td>
                                            <td>
                                                <span class='badge badge-success'><i class='far fa-edit'></i></span>
                                                <!-- Call the JavaScript function deleteRecord() with the pack ID as a parameter -->
                                                <span class='badge badge-danger delete-btn' data-packid='$packId'><i class='far fa-trash-alt'></i></span>

                                            </td>
                                        </tr>
                                    </tbody>
                                ";
                            }


                                }
                            }
                        ?>

                        </table>
                    </div>
                </div>
                <!-- pagination html -->
                <div class="pagination-wrap">
                    <nav class="pagination-inner">
                        <ul class="pagination disabled">
                            <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
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
    <!-- ... Rest of the HTML content ... -->
<!-- 
    <script>
    function deleteRecord(packId) {
        if (confirm("Are you sure you want to delete this record?")) {
            // Send an AJAX request to delete_package.php with the pack ID
            $.ajax({
                type: "POST",
                url: "delete_package.php",
                data: { pack_id: packId },
                success: function (response) {
                    if (response === "success") {
                        // If deletion is successful, remove the row from the UI
                        var rowToRemove = document.getElementById("row_" + packId);
                        if (rowToRemove) {
                            rowToRemove.remove();
                        } else {
                            alert("Row not found. Deletion may not have been successful.");
                        }
                    } else {
                        alert("Error deleting record. Please try again later.");
                    }
                },
                error: function () {
                    alert("Error deleting record. Please try again later.");
                }
            });
        }
    }
</script> -->
<!-- Place this script either in your PHP file or a separate .js file -->
<script>
function deleteRecord(packId) {
    // Use AJAX to send a request to delete_package.php with the pack ID as a parameter
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            if (response === 'success') {
                // On successful deletion, remove the corresponding row from the table
                var row = document.getElementById('row_' + packId);
                if (row) {
                    row.parentNode.removeChild(row);
                }
            } else {
                // Handle deletion failure (optional)
                alert('Failed to delete the package. Please try again.');
            }
        }
    };
    xhttp.open('GET', 'delete_package.php?pack_id=' + encodeURIComponent(packId), true);
    xhttp.send();
}

// Add event listeners to delete buttons to call the deleteRecord function with the correct pack ID
var deleteButtons = document.querySelectorAll('.delete-btn');
deleteButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
        var packId = this.getAttribute('data-packid');
        if (confirm('Are you sure you want to delete this package?')) {
            deleteRecord(packId);
        }
    });
});
</script>



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