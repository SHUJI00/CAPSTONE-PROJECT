<?php
session_start();
include('db_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("SELECT login, role FROM users WHERE username = ? AND role = 'staff'");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password, $role);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = $role;
        header("Location: indexs.php");
    } else {
        echo "Invalid password. <a href='index.php'>Try again</a>";
    }
} else {
    echo "Invalid username. <a href='index.php'>Try again</a>";
}
$stmt->close();
$conn->close();
?>
