<?php
// Check the environment
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // Localhost configuration
    $host = '127.0.0.1'; // Localhost
    $username = 'root';  // Local username
    $password = '';      // Local password (usually empty)
    $dbname = 'media_gallery'; // Local database name
} else {
    // Production configuration
    $host = '147.93.17.45';   
    $username = 'u983525168_photography';   
    $password = 'H9TZEggdda8';       
    $dbname = 'u983525168_photography';   
}

// Create the database connection
$db = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
