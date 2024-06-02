<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servicename = filter_var($_POST['servicename'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

    try {
        $stmt = $pdo->prepare("INSERT INTO service_details (service_name, description) VALUES (?, ?)");
        $stmt->execute([$servicename, $description]);

        if ($stmt->rowCount() > 0) {
            echo "Service Added successfully";
        } else {
            echo "Error: Unable to insert record";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
