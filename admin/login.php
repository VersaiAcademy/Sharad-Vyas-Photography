<?php
session_start();

// Define static password
$adminPassword = "vyasClicks123";
$loginSuccess = false;
$loginError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredPassword = $_POST['password'];

    // Check if the entered password matches the static password
    if ($enteredPassword === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        $loginSuccess = true;
        header("refresh:2;url=index.php"); // Redirect to the dashboard after 2 seconds
    } else {
        $loginError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

<div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
    <h2 class="text-center">Admin Login</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="password" class="form-label">Enter Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<!-- Toast Notifications -->
<div aria-live="polite" aria-atomic="true" class="position-relative">
    <!-- Success Toast -->
    <div class="toast position-fixed top-0 end-0 m-3 bg-success text-white <?= $loginSuccess ? 'show' : '' ?>" role="alert" data-bs-delay="2000">
        <div class="toast-header bg-success text-white">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Login successful! Redirecting...
        </div>
    </div>

    <!-- Error Toast -->
    <div class="toast position-fixed top-0 end-0 m-3 bg-danger text-white <?= $loginError ? 'show' : '' ?>" role="alert" data-bs-delay="2000">
        <div class="toast-header bg-danger text-white">
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Incorrect password. Please try again.
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
