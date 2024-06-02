<?php
include('session_check.php');

if ($_SESSION['role'] !== 'staff') {
    echo "Access denied. <a href='index.php'>Login as staff</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Staff Index</title>
</head>
<body>
    <h1>Welcome, Staff!</h1>
    <p>This is the staff index page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
