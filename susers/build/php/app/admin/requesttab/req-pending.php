<?php include_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Pending</title>
    <link rel="stylesheet" href="/susers/build/css/output.css">
    <link rel="stylesheet" href="/susers/build/css/acc_alert.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/susers/build/php/app/admin/backend/ajax/req-pen-ajx.js"></script>
</head>
<body class="font-sans bg-gray-100">
<nav class="fixed top-0 z-40 w-full md:bg-gray-100">
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
         <h1 class="uppercase">Pending Request</h1>
        </div>
        <!--Profile start-->
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 focus:ring-4 focus:ring-gray-300 w-8 h-8 rounded-full" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                </button>
              </div>
              <div class="z-50 hidden my-4 list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-600" role="none">
                    Engr. Noel Herira E. Sanches
                  </p>
                  <p class="text-sm font-medium text-gray-600 truncate" role="none">
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
      <img src="/susers/asset/img/image-removebg-preview (2).png" class=" h-16 me-3" alt="FlowBite Logo"/>
    </a>
     <div class="h-full px-3 pb-4 overflow-y-auto bg-green-700">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="/susers/build/php/app/admin/index.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-green-800 group">
                 <img class="h-8" src="/susers/asset/icons/dashboard.png" alt="dashicon" disable>
                 <span class="ms-3 text-white">Dashboard</span>
              </a>
           </li>
           <li>
            <a href="/susers/build/php/app/admin/services-tab.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-green-800 group">
               <img class="h-8" src="/susers/asset/icons/services.png" alt="serviceicon">               
               <span class="ms-3 text-white">Service</span>
            </a>
         </li>
           <li>
            <button type="button" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg group bg-green-800" aria-controls="request-dropdown" data-collapse-toggle="request-dropdown">
                  <img class="h-8" src="/susers/asset/icons/request.png" alt="requesticon">
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white">Request</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="request-dropdown" class="py-2 space-y-2">
                  <li>
                     <a href="/susers/build/php/app/admin/requesttab/req-pending.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group bg-green-800">Pending</a>
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
            <button type="button" class="flex items-center w-full p-2 text-gray-600 transition duration-75 rounded-lg group hover:bg-green-800" aria-controls="assigned-work" data-collapse-toggle="assigned-work">
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
                  <a href="#" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Close</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="/susers/build/php/app/admin/account-tab.php" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-green-800 group">
               <img class="h-8" src="/susers/asset/icons/accounts.png" alt="accounticon">               
               <span class="ms-3 text-white">Accounts</span>
            </a>
         </li>
        </ul>
     </div>
  </aside>


  <div class="p-4 md:ml-64">
     <div class="flex gap-2 flex-col p-4 mt-8 md:mt-7">

     <form class="max-w flex justify-end gap-2">
      <div class="flex justify-start flex-row max-w items-center">
         <img class="h-6 pl-2" src="/susers/asset/icons/filter.png" alt="filtericon">
         <p class="mr-2 text-gray-600">Filter:</p>
            <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                  </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date start">
            </div>
            <span class="mx-4 text-gray-500">to</span>
            <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                  </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Select date end">
            </div>
            <button type="button" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-md px-4 py-2 ml-3">Filter</button>
         </div>
      <div class="w-80">   
         <label for="default-search" class="mb-2 text-sm font-medium text-gray-600 sr-only">Search</label>
         <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
               <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
               </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-600 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Name or Service Type"/>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
         </div>
      </div>
   </form>
<?php
$stmt = $pdo->prepare("
SELECT rf.*
FROM request_form rf
LEFT JOIN req_assessment ra ON rf.req_id= ra.req_id
WHERE ra.req_id IS NULL
");
$stmt->execute();
$reqform = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="max-w" style="height: 38rem;">
      <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
         <table class="table-fixed w-full">
            <thead class="sticky top-0 bg-[#47BC8D]">
              <tr>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Requeste Control No.</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Service Name</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Date Requested</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Requester Name</td>
                  <th class="w-20"></th>
              </tr>
            </thead>
            <?php if (isset($reqform) && !empty($reqform)) : ?>
                <?php foreach ($reqform as $index => $reqforms) : ?>
            <tbody>
               <tr class="border">
                  <td class="px-2 py-4"><?php echo $reqforms['req_control_code'];?></td>
                  <td class="px-2 py-4"><?php echo $reqforms['service'];?></td>
                  <td class="px-2 py-4"><?php echo $reqforms['date_requested'];?></td>
                  <td class="px-2 py-4"><?php echo $reqforms['fname'] . ' ' . $reqforms['lname'];?></td>
                  <td class="py-3 justify-center">
                     <button class="overview-btn bg-green-500 hover:bg-green-600 py-2 px-2 rounded-md"
                        data-req-id="<?php echo $reqforms['req_id']; ?>"
                        data-req-con-num="<?php echo $reqforms['req_control_code']; ?>"
                        data-date-req="<?php echo $reqforms['date_requested']; ?>"
                        data-date-need="<?php echo $reqforms['date_needed'];?>"
                        data-time-need="<?php echo $reqforms['time_needed'];?>"
                        data-req-name="<?php echo $reqforms['fname'] . ' ' . $reqforms['lname']; ?>"
                        data-mobile-num="<?php echo $reqforms['mobile_num']; ?>"
                        data-department="<?php echo $reqforms['department']; ?>"
                        data-service-selected="<?php echo $reqforms['service']; ?>"
                        data-purpose="<?php echo $reqforms['description']; ?>"
                        data-location="<?php echo $reqforms['location']; ?>">
                     <img class="h-5" src="/susers/asset/icons/view.png" alt="viewicon"></button>
                     <button data-modal-target="delete_btn" data-modal-toggle="delete_btn" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md">
                        <img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon">
                     </button>
                  </td>
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

<div id="delete_btn" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
   <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow">
         <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="delete_btn">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
               <span class="sr-only">Close modal</span>
         </button>
            <div class="p-4 md:p-5 text-center">
               <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
               </svg>
               <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete request control no 2024-05-300?</h3>
               <button data-modal-hide="delete_btn" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                  Yes, I'm sure
               </button>
               <button data-modal-hide="delete_btn" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-600 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
            </div>
      </div>
   </div>
</div>

<div id="overview-modal" tabindex="-1" class="fixed top-0 hidden left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
<div id="overview-modal" class="fixed inset-0 bg-gray-800 bg-opacity-60 flex items-center justify-center">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow  w-3/4">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
               <div class="flex flex-row w-full">
                  <div class="w-1/2">
                     <h3 class="text-xl font-medium text-gray-600">
                        Request Details
                     </h3>
                  </div>
                  <div class="w-1/2">
                     <h3 class="text-xl font-medium text-gray-600 pl-4">
                        Request Assesment
                     </h3>
                  </div>
               </div>
                <button id="modal-close-btn" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex flex-row gap-2 h-96">
               <div class="p-4 md:p-5 space-y-2 w-1/2 overflow-y-auto bg-gray-100">
                  <div class="w-full h-40 text-base text-gray-700 flex flex-col gap-1">
                     <input id="modal-req-id" type="hidden">
                  <div class="flex flex-row gap-1 w-full">
                     <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm w-1/2">
                        <b>Request Control Number:</b>
                        <p id="modal-req-con"></p>
                     </div>
                     <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm w-1/2">
                        <b>Date Requested:</b>
                        <p id="modal-date-req"></p>
                     </div>
                  </div>

                  <div class="flex flex-row gap-1 w-full">
                     <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm w-1/2">
                        <b>Date Needed:</b>
                        <p id="modal-date-needed"></p>
                     </div>
                     <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm w-1/2">
                        <b>Time Needed:</b>
                        <p id="modal-time-needed"></p>
                     </div>
                  </div>

                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Requester Name:</b>
                     <p id="modal-requestername"></p>
                  </div>
                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Mobile Number:</b>
                     <p id="modal-mobilenum"></p>
                  </div>
                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Department:</b>
                     <p id="modal-department"></p>
                  </div>
                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Service Selected:</b>
                     <p id="modal-service"></p>
                   </div>
                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Purpose/Description of the Request:</b>
                     <p id="modal-description"></p>
                   </div>
                  <div class="leading-relaxed flex flex-col px-1 py-2 bg-white rounded-sm">
                     <b>Location:</b>
                     <p id="modal-location"></p>
                   </div>
                  </div>
               </div>
<?php
$stmt = $pdo->prepare("SELECT CONCAT(p.fname, ' ', p.lname) AS fullname
                     FROM personnel_acc p
                     JOIN login l ON p.login_id = l.login_id
                     WHERE l.loginacc_status = 'accept';");
$stmt->execute();
$listpersonnel = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="p-4 md:p-5 space-y-4 w-1/2 overflow-y-auto">
    <div class="w-full h-40">
        <h3 class="mt-3 font-semibold text-gray-600">Assigned Personnel</h3>
        <div class="z-10 bg-white rounded-lg shadow">
            <div class="p-3">
                <label for="search-personnel" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="search-personnel" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Search Personnel">
                </div>
            </div>
            <?php if (isset($listpersonnel) && !empty($listpersonnel)) : ?>
            <ul id="personnel-list" class="h-40 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                <?php foreach ($listpersonnel as $index => $personnellist) : ?>
                <li>
                     <div class="flex items-center ps-3">
                        <input id="<?php echo $personnellist['fullname']; ?>" type="radio" value="<?php echo $personnellist['fullname']; ?>" name="personnellist" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                        <label for="<?php echo $personnellist['fullname']; ?>" class="w-full py-3 ms-2 text-sm font-medium text-gray-600"><?php echo $personnellist['fullname']; ?></label>
                     </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else : ?>
            <div class="flex items-center p-2 rounded pl-4 text-green-700">No record</div>
            <?php endif; ?>
        </div>
        <input type="hidden" id="selectedPersonnel" name="selectedPersonnel">
        <input type="hidden" id="selectedPriolevel" name="selectedPriolevel">
        <input type="hidden" id="selectedWorkcomplx" name="selectedWorkcomplx">
                        <h3 class="mt-3 font-semibold text-gray-600">Priority Level</h3>
                        <ul class="text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-lg">
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="low-level-priority" type="radio" value="Low Level" name="priority-level" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="low-level-priority" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">Low Level</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="mid-level-priority" type="radio" value="Mid Level" name="priority-level" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="mid-level-priority" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">Mid Level</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="high-level-priority" type="radio" value="High Level" name="priority-level" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="high-level-priority" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">High Level</label>
                                </div>
                            </li>
                        </ul>

                        <h3 class="mt-3 font-semibold text-gray-600">Work Complexity</h3>
                        <ul class="text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-lg">
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="simple-level" type="radio" value="Simple (2 Days)" name="work-complexity" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="simple-level" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">Simple (2 Days)</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="medium-level" type="radio" value="Medium (7 Days)" name="work-complexity" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="medium-level" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">Medium (7 Days)</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 rounded-t-lg">
                                <div class="flex items-center ps-3">
                                    <input id="complex-level" type="radio" value="Complex (20 Days)" name="work-complexity" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                                    <label for="complex-level" class="w-full py-3 ms-2 text-sm font-medium text-gray-600">Complex (20 Days)</label>
                                </div>
                            </li>
                        </ul>
                     <h3 class="mt-3 font-semibold text-gray-600">Remarks</h3> <p class="text-sm text-gray-400">(Remark are both applicable in approved and disapproved buttons.)</p>
                     <textarea id="remark" rows="4" class="resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write your remarks here..."></textarea>

                  </div>
               </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center gap-2 p-4 md:p-5 border-t border-gray-200 rounded-b justify-end">
               <button id="approved_btn" type="button" class="bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Approved</button>
               <button id="disapproved_btn" type="button" class="bg-red-700 hover:bg-red-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Disapproved</button>
         </div>
</div>

     </div>
  </div>
  <!--Alert Message-->
<div id="alert" class="hidden fixed top-0 left-0 right-0 z-50 items-center justify-center p-4 mb-4 text-base text-yellow-800" role="alert">
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