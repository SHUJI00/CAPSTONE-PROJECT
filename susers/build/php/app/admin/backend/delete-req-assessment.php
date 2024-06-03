<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $req_id = filter_var($_POST['req_id'], FILTER_SANITIZE_STRING);

     try {
            $pdo->beginTransaction();
            // Prepare and execute the insert statement
            $stmt = $pdo->prepare("DELETE FROM req_assessment WHERE req_id = ?;");
            $stmt->execute([$req_id]);

            if ($stmt->rowCount() > 0) {
                // Commit the transaction
                $pdo->commit();
                echo "The assessment have been revoke.";
            } else {
                // Rollback the transaction if the insert fails
                $pdo->rollBack();
                echo "Error: Unable to insert record into the table";
            }
        } catch (PDOException $e) {
            $pdo->rollBack();
            echo "Error: " . $e->getMessage();
        } finally {
            // Re-enable foreign key checks
            $pdo->exec("SET FOREIGN_KEY_CHECKS=1");
        }
}
?>
