<?php
$host = 'localhost';   // Database host
$username = 'root';    // Database username
$password = '';        // Database password
$dbname = 'media_gallery';  // Database name

// Create connection
$db = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
