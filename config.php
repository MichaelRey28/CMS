<?php
$servername = "localhost";
$dbusername = "root"; // Adjust if you have a different username
$dbpassword = ""; // Adjust if you have a different password
$dbname = "cmstest"; // Adjust if you have a different database name

// Create a connection to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
