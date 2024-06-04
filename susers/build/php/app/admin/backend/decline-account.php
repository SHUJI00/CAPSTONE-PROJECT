<?php
// accept_user.php
require 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'] ?? '';
$usertype = $data['usertype'] ?? '';

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
            $stmt = $pdo->prepare("DELETE FROM " . $usertype . "_acc WHERE login_id = :login_id");
            $stmt->execute(['login_id' => $login_id]);

            // Check if row was deleted from usertype_acc table
            if ($stmt->rowCount() > 0) {
                // Delete from the login table
                $stmt = $pdo->prepare("DELETE FROM login WHERE login_id = :login_id");
                $stmt->execute(['login_id' => $login_id]);

                // Check if row was deleted from login table
                if ($stmt->rowCount() > 0) {
                    // Commit the transaction
                    $pdo->commit();
                    $response['success'] = true;
                    $response['message'] = 'User deleted successfully.';
                } else {
                    // Rollback the transaction if login deletion failed
                    $pdo->rollBack();
                    $response['message'] = 'Failed to delete user from login table.';
                }
            } else {
                // Rollback the transaction if usertype_acc deletion failed
                $pdo->rollBack();
                $response['message'] = 'Failed to delete user.';
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
