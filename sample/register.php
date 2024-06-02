<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Role:
        <select name="role" required>
            <option value="staff">Staff</option>
            <option value="personnel">Personnel</option>
        </select><br>
        <input type="submit" value="Register">
    </form>
    <a href="index.php">Back to Login</a>
</body>
</html>
