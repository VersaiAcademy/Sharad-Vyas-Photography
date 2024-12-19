<?php
// Determine the environment (local or live)
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    $base_url = 'http://localhost/photographer-2-master/';
} else {
    $base_url = 'https://sharadphoto.com/';
}

// Define the base URL for frontend and admin
define('BASE_URL', $base_url);
define('ADMIN_URL', $base_url . 'admin/');
?>
