<?php 
session_start();
include 'config.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
   header("Location: /susers/build/php/access/signin/login-admin.php");
   exit();
}
if ($_SESSION['user_type'] !== 'admin') {
   header("Location: /susers/build/php/access/signin/login-admin.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Dashboard</title>
    <link rel="stylesheet" href="/susers/build/css/output.css">
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
        <div class="absolute ml-10 md:ml-64 font-semibold text-xl md:text-3xl text-gray-600">
         <h1 class="uppercase">Dashboard</h1>
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
                  <?php echo $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?>
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
                    <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
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
              <a href="/susers/build/php/app/admin/index.php" class="flex items-center p-2 text-gray-900 rounded-lg bg-green-800 group">
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
            <a href="/susers/build/php/app/admin/account-tab.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-green-800 group">
               <img class="h-8" src="/susers/asset/icons/accounts.png" alt="accounticon">               
               <span class="ms-3 text-white">Accounts</span>
            </a>
         </li>
        </ul>
     </div>
  </aside>
<!--body-->
<div class="p-4 md:ml-64">
   <div class="flex gap-2 flex-col p-4 mt-8 md:mt-7">
         <!--filter-->
      <div class="flex justify-start flex-row max-w items-center">
         <!--label-->
            <img class="h-6 pl-2" src="/susers/asset/icons/filter.png" alt="filtericon">
            <p class="mr-2 text-gray-600">Filter:</p>
         <!--start-->
         <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
               </svg>
            </div>
               <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date start">
         </div>
            <span class="mx-4 text-gray-500">to</span>
         <!--end-->
         <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
               </svg>
            </div>
               <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date end">
         </div>
               <button type="button" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-base px-4 py-1 ml-3">Filter</button>
      </div>
      <!--work status-->
      <div class="flex flex-col bg-white py-4 px-3 rounded-md">
               <!--title-->
            <h1 class="max-w text-lg font-medium text-gray-600 uppercase">Work Status</h1>
               <!--Body-->
         <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                  <!--ongoing-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/ongoing.png" alt="overallicon">
                  <h1 class="text-sm xl:text-base font-medium mb-1 text-gray-700">Ongoing</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#DFBB84]">0</p>
            </div>
                  <!--pending-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/pending.png" alt="disapprovedicon">
                  <h1 class="text-sm xl:text-base font-medium mb-1 text-gray-700">Pending</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC7F46]">0</p>
            </div>
                  <!--complete-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/complete.png" alt="approvedicon">
                  <h1 class="text-sm xl:text-base font-medium mb-1 text-gray-700">Complete</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC6246]">0</p>
            </div>
                  <!--close-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/close.png" alt="disapprovedicon">
                  <h1 class="text-sm xl:text-base font-medium mb-1 text-gray-700">Close</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC4D46]">0</p>
            </div>
         </div>   
      </div>
      <!--request status-->
      <div class="flex flex-col bg-white py-4 px-3 rounded-md">
               <!--title-->
            <h1 class="max-w text-lg font-medium text-gray-600 uppercase">Request Status</h1>
               <!--body-->
         <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                  <!--pending-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class=" h-8" src="/susers/asset/icons/overall.png" alt="overallicon">
                  <h1 class="text-sm xl:text-lg font-medium mb-1 text-gray-700">Overall</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#DFBB84]">0</p>
            </div>
                  <!--approved-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/approved.png" alt="approvedicon">
                  <h1 class="text-sm xl:text-xl font-medium mb-1 text-gray-700">Approved</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC7F46]">0</p>
            </div>
                  <!--disapproved-->
            <div class="flex flex-col gap-1 shadow-md py-3 px-4 bg-white">
               <div class="flex flex-row items-center gap-1">
                  <img class="h-8" src="/susers/asset/icons/disapproved.png" alt="disapprovedicon">
                  <h1 class="text-sm xl:text-xl font-medium mb-1 text-gray-700">Disapproved</h1>
               </div>
                  <p class="text-white max-w pl-2 py-1 bg-[#BC6246]">0</p>
            </div>
         </div>
      </div>

         
      
<h1 class="max-w text-xl text-medium text-gray-700">New Request</h1>

<?php
$stmt = $pdo->prepare("
    SELECT rf.req_control_code, rf.service, rf.date_requested, rf.fname, rf.lname
    FROM request_form rf
    LEFT JOIN req_assessment ra ON rf.req_id = ra.req_id
    WHERE ra.req_id IS NULL
");
$stmt->execute();
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="h-80 max-w border">
      <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
         <table class="table-fixed w-full">
            <thead class="sticky top-0 bg-[#47BC8D]">
              <tr>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Requeste Control No.</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Service Name</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Date Requested</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Requester Name</td>
              </tr>
            </thead>
            <?php if (isset($services) && !empty($services)) : ?>
                <?php foreach ($services as $index => $service) : ?>
            <tbody>
              <tr class="border">
                <td class="px-2 py-4"><?php echo $service['req_control_code'];?></td>
                <td class="px-2 py-4"><?php echo $service['service'];?></td>
                <td class="px-2 py-4"><?php echo $service['date_requested'];?></td>
                <td class="px-2 py-4"><?php echo $service['fname'] . ' ' . $service['lname'];?></td>
            </tr>
            <tr>
            <?php endforeach; ?>
                <?php else : ?>
                    <td class="p-5 text-lg font-medium text-green-600">No New Request.</td>
                <?php endif; ?>
            </tr>    
            </tbody>
          </table>
      </div>
</div>
</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>