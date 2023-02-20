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
$sql = "SELECT * FROM recent_work_data";
$result = mysqli_query($conn, $sql);

// Display the data
$row = mysqli_fetch_assoc($result);

//while ($row = mysqli_fetch_assoc($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="project project-img" id="'.$row["img_id"].'"> 
        <img src="'.$row["work_img_path"].'" onclick="window.open(this.src)"></div>';
    }


// Close the database connection
mysqli_close($conn);

?>