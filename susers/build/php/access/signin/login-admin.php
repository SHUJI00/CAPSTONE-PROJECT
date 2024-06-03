<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT a.*, l.username, l.password, l.loginacc_status, l.user_type 
            FROM admin_acc a
            JOIN login l ON a.login_id = l.login_id 
            WHERE l.username = :username";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($user['loginacc_status'] === 'pending') {
            $_SESSION['message'] = "Your account is pending";
        } else {
            if (password_verify($password, $user['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['user'] = $user;
                header("Location: /susers/build/php/app/admin/index.php");
                exit();
            } else {
                $_SESSION['message'] = "Incorrect password!";
            }
        }
    } else {
        $_SESSION['message'] = "Username not found!";
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check if the user is already logged in and redirect accordingly
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if ($_SESSION['user_type'] == 'staff') {
        header("Location: /susers/build/php/app/staff/index.php");
    } else if ($_SESSION['user_type'] == 'personnel') {
        header("Location: /susers/build/php/app/personnel/index.php");
    }else if ($_SESSION['user_type'] == 'admin') {
        header("Location: /susers/build/php/app/admin/index.php");
    }
    exit();
}
?>
<!--html codes-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Admin</title>
    <link rel="shortcut icon" href="/susers/asset/icons/workflowpro.ico" type="image/x-icon">
    <link rel="stylesheet" href="/susers/build/css/output.css">
</head>
<body class="bg-[#F9FAFB] font-sans flex flex-col md:flex-row items-center h-screen md:justify-evenly">

<img class="md:h-1/4 h-40" src="/susers/asset/img/workflowpro.png" alt="_logo">
<form class="md:w-auto w-2/3 px-8 py-7 rounded-md shadow-md bg-[#ffff] flex flex-col gap-4" method="post">

<div class="flex flex-row justify-between items-center">
    <!--User Selection-->
    <label class="text-3xl font-bold tracking-wide text-green-600 uppercase text-nowrap pr-2" for="_header-title">Sign In</label> 
    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-fit text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-left inline-flex items-center uppercase" type="button">Admin<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="/susers/build/php/access/signin/login-personnel.php" class="block px-4 py-2 hover:bg-gray-100 uppercase">personnel</a>
              </li>
              <li>
                <a href="/susers/build/php/access/signin/login-staff.php" class="block px-4 py-2 hover:bg-gray-100 uppercase">Staff</a>
              </li>
            </ul>
        </div>
</div>
    <!--Inputs-->
    <div class="flex flex-col md:w-80 ">
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer" placeholder=" " required />
            <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer" placeholder=" " required />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="text-red-600">' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    ?>
    <!--Submit Button-->
    <button  type="submit" value="Login" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-2xl px-5 py-2.5 me-2 mb-2 uppercase">Login</button>
</form>
</body> 
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>