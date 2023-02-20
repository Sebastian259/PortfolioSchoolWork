<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

// Connect to the database
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "footer_data"; // replace with your database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data
$sql = "SELECT * FROM footer_data_text";
$result = mysqli_query($conn, $sql);

// Display the data
$row = mysqli_fetch_assoc($result);
//while ($row = mysqli_fetch_assoc($result)) {
    // Display the logo
    echo '<div class="footer-logo"><img src="'.$row["logo_path"].'" width="100" height="100"></div>';
    
    // Display the copyright notice
    echo '<p class="podnadpis">'.$row["copyright"].'</p>';
    
    // Display the social icons
    echo '<div class="social">';
    echo '<div class="img-wrap"><img src="'.$row["fb_path"].'" width="25" height="25"></div>';
    echo '<div class="img-wrap"><img src="'.$row["ig_path"].'" width="25" height="25"></div>';
    echo '<div class="img-wrap"><img src="'.$row["pinterest_path"].'" width="25" height="25"></div>';
    //while ($row = mysqli_fetch_assoc($result)) {
        //echo '<div class="img-wrap"><img src="' . $row['social_icon_path'] . '" width="25" height="25"></div>';
    //}
    echo '</div>';




// Close the database connection
mysqli_close($conn);

?>