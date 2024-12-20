<?php
$host = '82.180.167.190';   // Database host
$username = 'u358688394_vyasphotograph';    // Database username
$password = 'vyasphotograph09VP';        // Database password
$dbname = 'u358688394_vyasphotograph';  // Database name

// Create connection
$db = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
