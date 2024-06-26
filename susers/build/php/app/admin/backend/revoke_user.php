<?php
// accept_user.php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'] ?? '';

$response = ['success' => false, 'message' => ''];

if ($username) {
    try {
        // Start the transaction
        $pdo->beginTransaction();

        // Fetch the login_id from the login table
        $stmt = $pdo->prepare("SELECT login_id FROM login WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $login_id = $result['login_id'];

            // Delete from the usertype_acc table
            $stmt = $pdo->prepare("UPDATE login SET loginacc_status = 'pending' WHERE login_id = :loginid");
            $stmt->execute(['loginid' => $login_id]);

                // Check if row was deleted from login table
                if ($stmt->rowCount() > 0) {
                    // Commit the transaction
                    $pdo->commit();
                    $response['success'] = true;    
                } else {
                    // Rollback the transaction if login deletion failed
                    $pdo->rollBack();
                    $response['message'] = 'Failed to revoke user from login table.';
                }
        } else {
            $pdo->rollBack();
            $response['message'] = 'User not found.';
        }
    } catch (PDOException $e) {
        // Rollback the transaction if any exception occurs
        $pdo->rollBack();
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Invalid username.';
}

echo json_encode($response);
?>