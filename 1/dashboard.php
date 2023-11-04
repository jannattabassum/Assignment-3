<?php
session_start(); // Start the session at the beginning of the file

// Check if the user is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page if the user is not logged in
    header("location: login.html");
    exit(); // Make sure to exit to prevent further execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
