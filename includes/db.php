<?php
$host = '147.93.17.45';   
$username = 'u983525168_photography';   
$password = 'H9TZEggdda8';       
$dbname = 'u983525168_photography';  


$db = new mysqli($host, $username, $password, $dbname);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
