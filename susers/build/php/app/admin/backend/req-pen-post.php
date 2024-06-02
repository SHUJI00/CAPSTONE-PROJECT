<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $req_id = filter_var($_POST['modal-req-id'], FILTER_SANITIZE_STRING);
    $sltPer = filter_var($_POST['selectedPersonnel'], FILTER_SANITIZE_STRING);
    $priolvl = filter_var($_POST['selectedPriolevel'], FILTER_SANITIZE_STRING);
    $workcomplx = filter_var($_POST['selectedWorkcomplx'], FILTER_SANITIZE_STRING);
    $remark = filter_var($_POST['remark'], FILTER_SANITIZE_STRING);
    if($remark === ''){
        $remark = "none";
    }
    $req_status = 'approved';

    try {
        // Start a transaction
        $pdo->beginTransaction();

        // Find personnel_id based on fname and lname combined value
        list($fname, $lname) = explode(" ", $sltPer, 2); // Assuming sltPer is in the format "First Last"
        $stmt = $pdo->prepare("SELECT personnel_id FROM personnel_acc WHERE fname = ? AND lname = ?");
        $stmt->execute([$fname, $lname]);
        $personnel = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($personnel) {
            $personnel_id = $personnel['personnel_id'];

            // Insert into work_assessment table
            $stmt = $pdo->prepare("INSERT INTO req_assessment (req_id, personnel_id, priority_level, work_complexity, remark, req_status) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$req_id, $personnel_id, $priolvl, $workcomplx, $remark, $req_status]);

            if ($stmt->rowCount() > 0) {
                // Commit the transaction
                $pdo->commit();
                echo "Successfully submitted";
            } else {
                // Rollback the transaction if the insert fails
                $pdo->rollBack();
                echo "Error: Unable to insert record into work_assessment";
            }
        } else {
            // Rollback the transaction if personnel not found
            $pdo->rollBack();
            echo "Error: Personnel not found";
        }
    } catch (PDOException $e) {
        // Rollback the transaction in case of error
        $pdo->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
?>
