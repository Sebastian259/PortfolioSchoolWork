<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    include 'config.php';

// Retrieve the data
$sql = "SELECT * FROM recent_work_data";
$result = mysqli_query($conn, $sql);

// Display the data

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="project project-img" id="'.$row["img_id"].'"> 
        <img src="'.$row["work_img_path"].'" onclick="window.open(this.src)"></div>';
    }


// Close the database connection
mysqli_close($conn);

?>