<?php
include 'config.php';

if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    $stmt = $pdo->prepare("SELECT service_id, service_name, description FROM service_details WHERE service_id = ?");
    $stmt->execute([$service_id]);
    $service = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($service) {
        echo json_encode($service);
    } else {
        echo json_encode(['error' => 'Service not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
