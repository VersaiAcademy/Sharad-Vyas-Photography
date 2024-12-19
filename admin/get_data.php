<?php
include('../includes/db.php');

// Determine the base URL based on the environment
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // For local development
    $baseUrl = "http://localhost/photographer-2-master/uploads/";
} else {
    // For production (live server)
    $baseUrl = "https://sharad.com/uploads/";
}

// Fetch media from the database
$query = "SELECT * FROM media ORDER BY date_uploaded DESC";
$result = mysqli_query($db, $query);
$mediaArray = [];

while ($row = mysqli_fetch_assoc($result)) {
    // Fix relative paths in media_url
    if (strpos($row['media_url'], '../') === 0) {
        $row['media_url'] = $baseUrl . basename($row['media_url']);
    }
    $mediaArray[] = $row;
}

// Send media data as JSON to frontend
header('Content-Type: application/json');
echo json_encode($mediaArray);
?>
