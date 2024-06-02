<?php
include('session_check.php');

if ($_SESSION['role'] !== 'personnel') {
    echo "Access denied. <a href='index.php'>Login as personnel</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Personnel Index</title>
</head>
<body>
    <h1>Welcome, Personnel!</h1>
    <p>This is the personnel index page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
