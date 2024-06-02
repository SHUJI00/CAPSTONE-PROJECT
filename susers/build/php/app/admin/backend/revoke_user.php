<?php
// accept_user.php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'] ?? '';

$response = ['success' => false, 'message' => ''];

if ($username) {
    try {
        $stmt = $pdo->prepare("UPDATE login SET loginacc_status = 'pending' WHERE username = :username");
        $stmt->execute(['username' => $username]);

        if ($stmt->rowCount()) {
            $response['success'] = true;
        } else {
            $response['message'] = 'No rows updated.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Invalid username.';
}

echo json_encode($response);
?>
