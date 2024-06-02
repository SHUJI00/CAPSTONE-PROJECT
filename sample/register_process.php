<?php
include('db_connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Check if username already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Username already exists. <a href='register.php'>Try again</a>";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashed_password, $role);

    if ($stmt->execute()) {
        echo "Registration successful. <a href='index.php'>Login</a>";
    } else {
        echo "Error: " . $stmt->error . ". <a href='register.php'>Try again</a>";
    }
}

$stmt->close();
$conn->close();
?>
