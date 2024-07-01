<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reqcontrolnum = filter_var($_POST['req-con-no'], FILTER_SANITIZE_STRING);
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    $contactinfo = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $deprt = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
    $services = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $purpose = filter_var($_POST['des-req'], FILTER_SANITIZE_STRING);
    $location = filter_var($_POST['location-req'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
    $agreement = filter_var($_POST['agreement'], FILTER_SANITIZE_STRING);
    if ($date) {
        $date = date('Y-m-d', strtotime($date));
    }
    try {
        $stmt = $pdo->prepare("INSERT INTO request_form (req_control_code, fname, lname, mobile_num, department, service, date_needed, time_needed, description, location, agreement) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$reqcontrolnum, $fname, $lname, $contactinfo, $deprt, $services, $date, $time, $purpose, $location, $agreement]);

        if ($stmt->rowCount() > 0) {
            echo "Successfully submitted";
        } else {
            echo "Error: Unable to insert record";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
