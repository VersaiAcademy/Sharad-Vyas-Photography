<?php
include('../includes/db.php');

// Fetch folder portfolio data from the database
$query = "SELECT * FROM video_portfolio ORDER BY date_uploaded DESC";
$result = mysqli_query($db, $query);

// Initialize an array to hold the folder data
$folderData = [];

if (mysqli_num_rows($result) > 0) {
    // Loop through the result and format the data
    while ($row = mysqli_fetch_assoc($result)) {
        $folderData[] = [
            'id' => $row['id'], // Assuming 'id' is the unique identifier for each folder
            'thumbnail_url' => $row['thumbnail_url'],
            'title' => $row['title'],
            'description' => $row['description'],
            'category' => $row['category'],
            'folder_link' => $row['video_link'],
            'date_uploaded' => $row['date_uploaded']
        ];
    }

    // Return the data as JSON
    echo json_encode($folderData);
} else {
    // If no data is found, return an empty array
    echo json_encode([]);
}
?>
