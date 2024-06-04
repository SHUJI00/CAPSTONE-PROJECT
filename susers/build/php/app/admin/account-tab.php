<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Account</title>
    <link rel="stylesheet" href="/susers/build/css/output.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/susers/build/php/app/admin/backend/ajax/account-tab-ajx.js"></script>
    <link rel="stylesheet" href="/susers/build/css/acc_alert.css">
</head>
<body class="font-sans bg-gray-100">
<nav class="fixed top-0 z-40 w-full bg-gray-100">
    <div class="px-3 py-3 lg:px-5 lg:pl-5">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="yellowgreen" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
        </div>
        <div class="absolute ml-10 md:ml-64 font-bold text-xl md:text-3xl text-gray-600">
         <h1 class="uppercase">Accounts</h1>
        </div>
        <!--Profile start-->
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 focus:ring-4 focus:ring-gray-300 w-8 h-8 rounded-full" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900" role="none">
                    Engr. Noel Herira E. Sanches
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate" role="none">
                    Administrator
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="/susers/build/php/app/admin/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                  </li>
                  <li>
                    <a href="/susers/build/php/access/signin/login-admin.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Profile End-->
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-5 transition-transform -translate-x-full bg-green-700 md:translate-x-0 drop-shadow-2xl shadow-slate-800 rounded-r-xl" aria-label="Sidebar">
  <a href="/susers/build/php/app/admin/index.php" class="flex md:me-24 mb-5 justify-center w-full">
      <div class="flex flex-col gap-2 items-center text-center justify-center">
        <img class="h-6" src="/susers/asset/img/colored-logo.png" alt="woms-logo">
        <div class="text-center flex flex-col items-center">
            <h1 class="text-base w-70 font-semibold text-white">DAVAO DEL NORTE STATE COLLEGE</h1>
            <p class=" text-xs text-white px-3 py-2 rounded-md font-semibold bg-green-500 w-fit">Work Order Management System</p>
        </div>
      </div>
    </a>
     <div class="h-full px-3 pb-4 overflow-y-auto bg-green-700">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="/susers/build/php/app/admin/index.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-green-800 group">
                 <img class="h-8" src="/susers/asset/icons/dashboard.png" alt="dashicon" disable>
                 <span class="ms-3 text-white">Dashboard</span>
              </a>
           </li>
           <li>
            <a href="/susers/build/php/app/admin/services-tab.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-green-800 group">
               <img class="h-8" src="/susers/asset/icons/services.png" alt="serviceicon">               
               <span class="ms-3 text-white">Service</span>
            </a>
         </li>
           <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-green-800" aria-controls="request-dropdown" data-collapse-toggle="request-dropdown">
                  <img class="h-8" src="/susers/asset/icons/request.png" alt="requesticon">
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white">Request</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="request-dropdown" class="hidden py-2 space-y-2">
                  <li>
                     <a href="/susers/build/php/app/admin/requesttab/req-pending.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Pending</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/admin/requesttab/req-approved.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Approved</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/admin/requesttab/req-disapproved.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Disapproved</a>
                  </li>
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-green-800" aria-controls="assigned-work" data-collapse-toggle="assigned-work">
                  <img class="h-8" src="/susers/asset/icons/assignedwork.png" alt="assignedworkicon">
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white">Assigned Work</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="assigned-work" class="hidden py-2 space-y-2">
                  <li>
                     <a href="/susers/build/php/app/admin/assignedworktab/assignwork-ongoing.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Ongoing</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/admin/assignedworktab/assignwork-complete.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Complete</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/admin/assignedworktab/assignwork-pending.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Pending</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/admin/assignedworktab/assignwork-close.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Close</a>
                  </li>
            </ul>
         </li>
         <li>
            <a href="/susers/build/php/app/admin/account-tab.php" class="flex items-center p-2 text-gray-900 rounded-lg bg-green-800 group">
               <img class="h-8" src="/susers/asset/icons/accounts.png" alt="accounticon">               
               <span class="ms-3 text-white">Accounts</span>
            </a>
         </li>
        </ul>
     </div>
  </aside>
  <?php
try {
   $stmt = $pdo->prepare("
   SELECT user_type, COUNT(*) AS user_count
   FROM login
   WHERE loginacc_status = 'accept'
   GROUP BY user_type;
");

// Execute the statement
$stmt->execute();

// Fetch all results
$user_counts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize counts to zero
$staff_count = 0;
$personnel_count = 0;
$admin_count = 0;

// Assign counts based on user type
foreach ($user_counts as $row) {
   if ($row['user_type'] == 'staff') {
       $staff_count = $row['user_count'];
   } elseif ($row['user_type'] == 'personnel') {
       $personnel_count = $row['user_count'];
   } elseif ($row['user_type'] == 'admin') {
       $admin_count = $row['user_count'];
   }
}
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $staff_count = 0;   
    $personnel_count = 0;
    $admin_count = 0;
}
?>
?>
  <div class="md:ml-64">
     <div class="flex gap-1 flex-col p-4 mt-8 md:mt-5">
         <!--accounts-->
      <div class="flex flex-col bg-white py-4 px-3 rounded-md">
               <!--body-->
         <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                  <!--admin-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class=" h-8" src="/susers/asset/icons/admin.png" alt="overallicon">
                  <h1 class="text-sm xl:text-lg font-medium mb-1 text-gray-700">Admin</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#DFBB84]"><?php echo $admin_count; ?></p>
            </div>
                  <!--staff-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/staff.png" alt="approvedicon">
                  <h1 class="text-sm xl:text-xl font-medium mb-1 text-gray-700">Staff</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC7F46]"><?php echo $staff_count; ?></p>
            </div>
                  <!--personnel-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/accpersonnel.png" alt="disapprovedicon">
                  <h1 class="text-sm xl:text-xl font-medium mb-1 text-gray-700">Personnel</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC6246]"><?php echo $personnel_count; ?></p>
            </div>
         </div>
      </div>

   <form class="max-w flex justify-end gap-2">
      <div class="flex justify-start flex-row max-w items-center">
            <h1 class="text-base text-gray-600 pr-2">Existing Accounts</h1>
            <img class="h-6 pl-2" src="/susers/asset/icons/filter.png" alt="filtericon">
            <p class="mr-2 text-gray-600">Filter:</p>
         <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
               </svg>
            </div>
               <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date start">
         </div>
               <span class="mx-4 text-gray-500">to</span>
            <div class="relative max-w-sm">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                     <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                     </svg>
                  </div>
                     <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date end">
               </div>
            <button type="button" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-base px-4 py-2 ml-3">Filter</button>
         </div>
      <div class="w-80">   
         <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
         <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
               </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Search by Username"/>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
         </div>
      </div>
   </form>

   <?php
$stmt = $pdo->prepare("
SELECT s.lname, s.fname, l.username, l.user_type, s.mobile_number, s.date_created
FROM staff_acc s
JOIN login l ON s.login_id = l.login_id
WHERE l.loginacc_status = 'accept'
UNION ALL
SELECT p.lname, p.fname, l.username, l.user_type, p.mobile_number, p.date_created
FROM personnel_acc p
JOIN login l ON p.login_id = l.login_id
WHERE l.loginacc_status = 'accept';
");
$stmt->execute();
$accept = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
   <div class="max-w border" style="height: 17rem;">
      <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
         <table class="table-fixed w-full">
            <thead class="sticky top-0 bg-[#47BC8D]">
              <tr>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">First name</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Last name</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Username</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">User type</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Mobile number</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Date Created</th>
                  <th class="w-20 text-left text-white p-1.5 font-medium">Actions</th>
              </tr>
            </thead>
            <?php if (isset($accept) && !empty($accept)) : ?>
                <?php foreach ($accept as $index => $accepts) : ?>
            <tbody>
               <tr>
                  <td class="px-2 py-4"><?php echo $accepts['fname']; ?></td>
                  <td class="px-2 py-4"><?php echo $accepts['lname']; ?></td>
                  <td class="px-2 py-4"><?php echo $accepts['username']; ?></td>
                  <td class="px-2 py-4"><?php echo $accepts['user_type']; ?></td>
                  <td class="px-2 py-4"><?php echo $accepts['mobile_number']; ?></td>
                  <td class="px-2 py-4"><?php echo $accepts['date_created']; ?></td>
                  <td class="px-2 py-4">
                     <button id="revoke_btn" class="text-red-500 hover:text-red-700 hover:underline font-semibold">Revoke</button>
                  </td>
               </tr>
               <tr>
            <?php endforeach; ?>
                <?php else : ?>
                    <td class="p-5 text-lg font-medium text-green-600" colspan="7">No account record found.</td>
                <?php endif; ?>
            </tr>   
            </tbody>
          </table>
      </div>

     </div>

   <form class="max-w flex justify-end gap-2">
      <div class="flex justify-start flex-row max-w items-center">
      <h1 class="text-base text-gray-600 pr-2">Pending Accounts</h1>
         <img class="h-6 pl-2" src="/susers/asset/icons/filter.png" alt="filtericon">
         <p class="mr-2 text-gray-600">Filter:</p>
            <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                  </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date start">
            </div>
            <span class="mx-4 text-gray-500">to</span>
            <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                  </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date end">
            </div>
            <button type="button" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-base px-4 py-2 ml-3">Filter</button>
         </div>
      <div class="w-80">   
         <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
         <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
               </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Search by Username"/>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
         </div>
      </div>
   </form>
<?php
$stmt = $pdo->prepare("
SELECT s.lname, s.fname, l.username, l.user_type, s.mobile_number, s.date_created
FROM staff_acc s
JOIN login l ON s.login_id = l.login_id
WHERE l.loginacc_status = 'pending'
UNION ALL
SELECT p.lname, p.fname, l.username, l.user_type, p.mobile_number, p.date_created
FROM personnel_acc p
JOIN login l ON p.login_id = l.login_id
WHERE l.loginacc_status = 'pending';
");
$stmt->execute();
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
   <div class="max-w border" style="height: 17rem;">
      <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
         <table class="table-fixed w-full">
            <thead class="sticky top-0 bg-[#47BC8D]">
              <tr>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">First name</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Last name</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Username</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">User type</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Mobile number</th>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Date Created</th>
                  <th class="w-40 text-left text-white p-1.5 font-medium" colspan="2">Actions</th>
              </tr>
            </thead>
            <?php if (isset($services) && !empty($services)) : ?>
                <?php foreach ($services as $index => $service) : ?>
            <tbody>
               <tr>
                  <td class="px-2 py-4"><?php echo $service['fname']; ?></td>
                  <td class="px-2 py-4"><?php echo $service['lname']; ?></td>
                  <td class="px-2 py-4"><?php echo $service['username']; ?></td>
                  <td class="px-2 py-4"><?php echo $service['user_type']; ?></td>
                  <td class="px-2 py-4"><?php echo $service['mobile_number']; ?></td>
                  <td class="px-2 py-4"><?php echo $service['date_created']; ?></td>
                  <td class="px-2 py-4 items-center ">
                     <button id="accept_btn" class="text-green-500 hover:text-green-700 hover:underline font-semibold">Accept</button>
                  </td>
                  <td class="px-2 py-4 items-center ">
                     <button id="decline_btn" class="text-orange-500 hover:text-orange-700 hover:underline font-semibold">Decline</button>
                  </td>
               </tr>
               <tr>
            <?php endforeach; ?>
                <?php else : ?>
                    <td class="p-5 text-lg font-medium text-green-600" colspan="8">No pending account.</td>
                <?php endif; ?>
            </tr>   
            </tbody>
          </table>
      </div>
</div>
  </div>
<!--Alert Message-->
<div id="alert" class="hidden fixed top-0 left-0 right-0 z-50 items-center justify-center p-4 mb-4 text-base" role="alert">
    <div class="flex justify-center">
        <svg class="flex-shrink-0 inline w-6 h-6 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <div>
            <span id="alert-message" class="font-medium"></span>
        </div>
    </div>
</div>

</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>