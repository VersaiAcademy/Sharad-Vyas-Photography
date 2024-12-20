<?php
include('../includes/db.php');

// Determine base URL based on the environment
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // For local development
    $baseUrl = "http://localhost/photographer-2-master/uploads/";
} else {
    // For production (live server)
    $baseUrl = "https://sharadvyasphotography.com/uploads/";
}

// Fetch media from the database
$query = "SELECT * FROM media ORDER BY date_uploaded DESC";s
$result = mysqli_query($db, $query);
$mediaArray = [];

while ($row = mysqli_fetch_assoc($result)) {
    // Check if the media_url already contains "http" to avoid appending the base URL
    if (strpos($row['media_url'], 'http') !== 0) {
        $row['media_url'] = $baseUrl . $row['media_url'];
    }
    $mediaArray[] = $row;
}

// Send media data as JSON to frontend
header('Content-Type: application/json');
echo json_encode($mediaArray);
?>
