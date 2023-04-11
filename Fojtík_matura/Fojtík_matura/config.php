<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);


// Connect to the database
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "fojtik_matura_data"; // replace with your database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>