<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Upload Media</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="admin-container">
    <h1>Upload Media</h1>
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="file" required><br>
      <input type="text" name="title" placeholder="Title" required><br>
      <textarea name="description" placeholder="Description"></textarea><br>
      <input type="text" name="caption" placeholder="Caption"><br>
      <input type="date" name="date_uploaded"><br>
      <select name="category">
        <option value="Nature">Nature</option>
        <option value="Architecture">Architecture</option>
        <!-- Add more categories -->
      </select><br>
      <input type="submit" value="Upload">
    </form>
  </div>
</body>
</html>
