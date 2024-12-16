<?php
include('../includes/db.php');

$query = "SELECT * FROM media ORDER BY date_uploaded DESC";
$result = mysqli_query($db, $query);
$mediaArray = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mediaArray[] = $row;
}

echo json_encode($mediaArray);  // Send media data as JSON to frontend
?>
