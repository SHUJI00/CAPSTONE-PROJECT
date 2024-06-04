<?php
// accept_user.php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$sid = $data['sid'] ?? '';

$response = ['success' => false, 'message' => ''];

if ($username) {
    try {
        $stmt = $pdo->prepare("DELETE FROM service_details WHERE service_id = :sid;");
        $stmt->execute(['sid' => $sid]);

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
