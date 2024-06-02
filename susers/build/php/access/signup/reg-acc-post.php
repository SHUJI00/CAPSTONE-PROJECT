<?php
include_once 'config.php';

// Function to insert data into the login table and return the last insert ID
function insertLogin($pdo, $username, $password, $status, $usertype) {
    try {
        $stmt = $pdo->prepare("INSERT INTO login (username, password, loginacc_status, user_type) 
                               VALUES (:username, :password, :status, :usertype)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':usertype', $usertype);
        $stmt->execute();
  
        return $pdo->lastInsertId();
    } catch(PDOException $e) {
        // If an error occurs during insertion, throw an exception
        throw new Exception("Error inserting into login table: " . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usertype = $_POST['user_type'];
    $fname = $_POST['_fname'];
    $lname = $_POST['_lname'];
    $mobilenum = $_POST['_mobilenum'];
    $username = $_POST['_username'];
    $password = password_hash($_POST['_password'], PASSWORD_BCRYPT);
    $status = 'pending';
    $profimg = $_POST['_profimg'];

    try {
        // Insert into login table first
        $loginId = insertLogin($pdo, $username, $password, $status, $usertype);
        
        // Then insert into the user table
        $stmtUser = $pdo->prepare("INSERT INTO {$usertype}_acc (login_id, fname, lname, mobile_number, profile_img) 
                                   VALUES (:loginid, :fname, :lname, :mobilenum, :profileimg)");
        $stmtUser->bindParam(':loginid', $loginId);
        $stmtUser->bindParam(':fname', $fname);
        $stmtUser->bindParam(':lname', $lname);
        $stmtUser->bindParam(':mobilenum', $mobilenum);
        $stmtUser->bindParam(':profileimg', $profimg);
        $stmtUser->execute();

        echo "Successfully created.";
    } catch(PDOException $e) {
        // If an error occurs during insertion, send error message back to the client
        echo "Error: " . $e->getMessage();
    } catch(Exception $e) {
        // If an error occurs during insertion into login table, send error message back to the client
        echo "Error: " . $e->getMessage();
    }
} else {
    // If the request method is not POST, send an error message back to the client
    echo "Invalid request method";
}
?>
