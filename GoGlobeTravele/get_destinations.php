<?php
require_once "db_connection.php";

// Query to get destination data from the "destination" table
$query = "SELECT * FROM destination";

$result = mysqli_query($conn, $query);

if ($result) {
    // Loop through the fetched data and generate the HTML code for each destination
    while ($row = mysqli_fetch_assoc($result)) {
        
        $title=$row['title'];
       
        $dest_image=$row['pack_image'];
        $city=$row['city'];

        echo '
<div class="col-lg-7">
    <div class="row">
        <div class="col-sm-6">
            <div class="desti-item overlay-desti-item">
                <figure class="desti-image">
                    <img src="' . $dest_image . '" alt="" style="width: 100%; height: 200px; object-fit: cover;">
                </figure>
                <div class="meta-cat bg-meta-cat">
                    <a href="single-destination.php">'.$city.'</a>
                </div>
                <div class="desti-content">
                    <h3>
                        <a href="single-destination.php">'.$title.'</a>
                    </h3>
                    <div class="rating-start" title="Rated 5 out of 4">
                        <span style="width: 53%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';

    }
} else {
    // Error occurred while fetching data
    echo "Error: " . mysqli_error($conn);
}
?>
