<?php
session_start();
if (session_status() == PHP_SESSION_ACTIVE) {
    session_unset();
    session_destroy();
    echo "Session destroyed. Redirecting...";
    header("Location: /susers/build/php/access/signin/login-staff.php");
    exit();
} else {
    echo "No active session found. Redirecting...";
    header("Location: /susers/build/php/access/signin/login-staff.php");
    exit();
}
?>
