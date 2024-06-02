<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $req_id = filter_var($_POST['modal-req-id'], FILTER_SANITIZE_STRING);
    $remark = filter_var($_POST['remark'], FILTER_SANITIZE_STRING);
    if($remark === ''){
        $remark = "none";
    }
    $req_status = 'disapproved';
     try {
            $pdo->beginTransaction();
            // Disable foreign key checks
            $pdo->exec("SET FOREIGN_KEY_CHECKS=0");
        
            // Prepare and execute the insert statement
            $stmt = $pdo->prepare("INSERT INTO req_assessment (req_id, remark, req_status) VALUES (?, ?, ?)");
            $stmt->execute([$req_id, $remark, $req_status]);

            if ($stmt->rowCount() > 0) {
                // Commit the transaction
                $pdo->commit();
                echo "Successfully submitted";
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
