<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    include 'config.php';

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
    echo '<div class="img-wrap"><a href="https://www.facebook.com/sebastian.fojtik.259" target="_blank" ><img src="'.$row["fb_path"].'" width="25" height="25"></a></div>';
    echo '<div class="img-wrap"><a href="https://www.instagram.com/sebastian_fojtik" target="_blank" ><img src="'.$row["ig_path"].'" width="25" height="25"></a></div>';
    echo '<div class="img-wrap"><a href="https://sk.pinterest.com/sebastianfojtik" target="_blank" ><img src="'.$row["pinterest_path"].'" width="25" height="25"></a></div>';
    //while ($row = mysqli_fetch_assoc($result)) {
        //echo '<div class="img-wrap"><img src="' . $row['social_icon_path'] . '" width="25" height="25"></div>';
    //}
    echo '</div>';




// Close the database connection
mysqli_close($conn);

?>
