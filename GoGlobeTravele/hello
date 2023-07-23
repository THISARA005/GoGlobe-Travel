<?php
// Assuming you have established a database connection ($mysqli)

$query = "SELECT * FROM packages ORDER BY rating DESC LIMIT 3";
$result = mysqli_query($mysqli, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $thumbnail = $row['thumbnail'];
        $price = $row['reg_price'];
        $duration = $row['duration_days'];
        $people = $row['grp_size'];
        $city = $row['city'];
        $title = $row['title'];
        $reviewCount = $row['rev_count'];
        $description = $row['description'];

        // Start package section
        echo '<div class="col-lg-4 col-md-6">';
        echo '<div class="package-wrap">';
        echo '<figure class="feature-image">';
        echo '<a href="package-detail.php">';
        echo "<img src=\"$thumbnail\" alt=\"\">";
        echo '</a>';
        echo '</figure>';
        echo '<div class="package-price">';
        echo "<h6><span>$price</span> / per person</h6>";
        echo '</div>';
        echo '<div class="package-content-wrap">';
        echo '<div class="package-meta text-center">';
        echo '<ul>';
        echo "<li><i class=\"far fa-clock\"></i> $duration</li>";
        echo "<li><i class=\"fas fa-user-friends\"></i> People: $people</li>";
        echo "<li><i class=\"fas fa-map-marker-alt\"></i> $city</li>";
        echo '</ul>';
        echo '</div>';
        echo '<div class="package-content">';
        echo "<h3><a href=\"#\">$title</a></h3>";
        echo '<div class="review-area">';
        echo "<span class=\"review-text\">($reviewCount reviews)</span>";
        echo '<div class="rating-start" title="Rated 5 out of 5">';
        echo '<span style="width: 60%"></span>';
        echo '</div>';
        echo '</div>';
        echo "<p>$description</p>";
        echo '<div class="btn-wrap">';
        echo '<a href="#" class="button-text width-6" onclick="checkLogin()">Book Now<i class="fas fa-arrow-right"></i></a>';
        echo '<a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        // End package section
    }
} else {
    echo "No packages found.";
}

// Remember to close the database connection
mysqli_close($mysqli);
?>
