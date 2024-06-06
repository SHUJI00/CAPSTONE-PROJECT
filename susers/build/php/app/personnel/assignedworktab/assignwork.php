<?php
session_start();
include 'config.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
   header("Location: /susers/build/php/access/signin/login-personnel.php");
   exit();
}
if ($_SESSION['user_type'] !== 'personnel') {
   header("Location: /susers/build/php/access/signin/login-personnel.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel/Assigned</title>
    <link rel="stylesheet" href="/susers/build/css/output.css">
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
         <h1 class="uppercase">Assigned Work</h1>
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
                    Personnel
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="/susers/build/php/app/personnel/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
                  </li>
                  <li>
                    <a href="/susers/build/php/app/personnel/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
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

  <a href="/susers/build/php/app/personnel/index.php" class="flex md:me-24 mb-5 justify-center w-full">
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
              <a href="/susers/build/php/app/personnel/index.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-green-800 group">
                 <img class="h-8" src="/susers/asset/icons/dashboard.png" alt="dashicon" disable>
                 <span class="ms-3 text-white">Dashboard</span>
              </a>
           </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group bg-green-800" aria-controls="assigned-work" data-collapse-toggle="assigned-work">
                  <img class="h-8" src="/susers/asset/icons/assignedwork.png" alt="assignedworkicon">
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white">Assigned Work</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="assigned-work" class="py-2 space-y-2">
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group bg-green-800">Assigned</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork-ongoing.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Ongoing</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork-pending.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Pending</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork-complete.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Complete</a>
                  </li>
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork-close.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Close</a>
                  </li>
            </ul>
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
            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Name or Service Type"/>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
         </div>
      </div>
   </form>

     <div class="max-w border" style="height: 38rem;">
      <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
         <table class="table-fixed w-full">
            <thead class="sticky top-0 bg-[#47BC8D]">
              <tr>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Request Control No.</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Requester Name</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Service Type</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Complexity</td>
                  <th class="w-1/3 text-left text-white p-1.5 font-medium">Priority Level</td>
                  <th class="w-10"></th>
                  <th class="w-10"></th>
              </tr>
            </thead>
            <tbody>
              <!-- Example data -->
              <tr>
               <td class="px-2 py-4">
                    2024-05-300
               </td>
               <td class="px-2 py-4">
                   Clara
               </td>
               <td class="px-2 py-4">
                   Cleaning
               </td>
               <td class="px-2 py-4">
                   Simple (3 Days)
               </td>
               <td class="px-2 py-4">
                   Low Level
               </td>
               <td class="py-3 justify-center">
                  <button data-modal-target="overview" data-modal-toggle="overview" class="bg-green-500 hover:bg-green-600 py-2 px-2 rounded-md"><img class="h-5" src="/susers/asset/icons/view.png" alt="viewicon"></button>
               </td>
            </tr>         
            </tbody>
          </table>
      </div>

      <div id="overview" tabindex="-1" class="fixed top-0 hidden left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
<div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
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
                    
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:text-white" data-modal-hide="overview">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex flex-row gap-2">
               <div class="p-4 md:p-5 space-y-2 w-1/2 overflow-y-auto ">
               <div class="w-full h-96">
                  <p class="text-base leading-relaxed text-gray-500">
                  <b>Request Control Number:</b> 2024-05-30
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                  <b>Date Requested:</b> Dec 10, 2002
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                  <b>Date Approved:</b> Dec 10, 2002
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                  <b>Start Date:</b> Dec 10, 2002
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                  <b>Requester Name:</b> Jhon Michle
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Mobile Number:</b> 09090912345
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Department:</b> Institute of Computing
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Service Selected:</b> Cleaning, Maintinance, Repair
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Purpose/Description of the Request:</b>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Location:</b> Lorem ipsum dolor sit amet
                  </p>
                  <h1 class="text-base font-semibold py-2 px-3 my-1 bg-green-500 text-white rounded-sm">Administrator Assesment</h1>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Work Complexity:</b> Simple (3 Days)
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Priority Level:</b> Low Level
                  </p>
                  <p class="text-base leading-relaxed text-gray-500">
                    <b>Remarks:</b> Lorem ipsum dolor sit amet
                  </p>
               </div>
               </div>

               <div class="p-4 md:p-5 space-y-2 w-1/2 overflow-y-auto">
               <div class="w-full h-40">
                  <!--Oprion 1-->
                  <h3 class="mt-3 font-medium text-gray-600">The request shall be worked on immediately.</h3>
                  <form class="max-w flex justify-end gap-2">
                        <div class="flex justify-start flex-row max-w items-center">
                           <!--Start date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Service Start Date">
                           </div>

                           <span class="mx-4 text-gray-500">to</span>
                           <!--End date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Service End Date">
                           </div>
                        </div>
                  </form>
                  <!--Oprion 2-->
                  <h3 class="mt-3 font-medium text-gray-600">The request shall be held pedding due to:</h3>
                  <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                      <li class="w-full border-b border-gray-200 rounded-t-lg">
                          <div class="flex items-center ps-3">
                              <input id="skilled" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                              <label for="skilled" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-availability of skilled personnel</label>
                          </div>
                      </li>
                      <li class="w-full border-b border-gray-200 rounded-t-lg">
                          <div class="flex items-center ps-3">
                              <input id="materials" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                              <label for="materials" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-availability of materials</label>
                          </div>
                      </li>
                  </ul>
                  <form class="max-w flex justify-end gap-2 mt-3">
                        <div class="flex justify-start flex-row max-w items-center">
                           <!--Start date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Target Start Date">
                           </div>

                           <span class="mx-4 text-gray-500">to</span>
                           <!--End date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Target End Date">
                           </div>
                        </div>
                  </form>
                  <button data-modal-target="pending-needs-modal" data-modal-toggle="pending-needs-modal" type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Materials/Personnel List</button>
                  <!--Option 3-->
                  <h3 class="mt-3 font-medium text-gray-600">The request is evaluated as a major repair/work.</h3>
                  <textarea id="recommended_action" rows="4" class="resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write recommended action..."></textarea>
                  <!--Option 4-->
                  <div class="flex items-center">
                     <input id="no_action" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                     <label for="no_action" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No action is require at this time.</label>
                  </div>
                  <h1 class="text-base font-semibold py-2 px-3 my-1 bg-green-500 text-white rounded-sm">Remarks</h1>
                  <textarea id="recommended_action" rows="4" class="resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write remarks..."></textarea>
                  <h1 class="text-base font-semibold py-2 px-3 my-1 bg-red-500 text-white rounded-sm">Request Close out</h1>
                  <h3 class="mt-3 font-medium text-gray-600">Close because</h3>
                  <textarea id="recommended_action" rows="4" class="resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write reason for closing out the request..."></textarea>
               </div>
               </div>
        </div>
        <!-- Modal footer -->
               <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b justify-end">
                   <button data-modal-hide="default-modal" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
               </div>
    </div>
</div>

<!-- pending needs modal -->
<div id="pending-needs-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-5xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-medium text-gray-900">
                    Materials/Skilled Personnel Needed
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="pending-needs-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="h-96 overflow-y-auto">
                  <!--Quantity-->
                  <div class="relative flex items-center w-40 my-2 mx-2">
                      <button type="button" id="decrement-button" data-input-counter-decrement="qty-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                          </svg>
                      </button>
      
                      <input type="text" id="qty-input" data-input-counter data-input-counter-min="0" data-input-counter-max="999" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6" placeholder="" value="0" required />
                      <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                          <span>Quantity</span>
                      </div>
      
                      <button type="button" id="increment-button" data-input-counter-increment="qty-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                          </svg>
                      </button>
                  </div>
                  <!--UNIT-->
                  <div class="relative flex items-center w-40 my-2 mx-2">
                      <button type="button" id="decrement-button" data-input-counter-decrement="unit-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                          </svg>
                      </button>
      
                      <input type="text" id="unit-input"  class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6" placeholder="" value="0" required />
                      <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                          <span>Unit</span>
                      </div>
      
                      <button type="button" id="increment-button" data-input-counter-increment="unit-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                          </svg>
                      </button>
                  </div>

            <textarea id="recommended_action" rows="4" class="resize-none mx-2 my-2 p-2.5 w-10/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write Description..."></textarea>
            <div class="flex flex-row mx-2 gap-2 my-2">
            <button type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Add to Materials</button>
            <button type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Add to Personnel</button>
            </div>

            <h3 class="ml-3 mt-3 font-medium text-gray-600">Materials</h3>
            <div class="max-w border h-44">
               <div class="shadow-md h-full overflow-y-auto overflow-x-auto  sm:rounded-md bg-white">
                  <table class="table-fixed w-full">
                     <thead class="sticky top-0 bg-[#47BC8D]">
                       <tr>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">No.</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Quantity</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Unit</th>
                           <th class="w-full text-left text-white p-1.5 font-medium">Description</th>
                           <th class="w-10"></th>
                       </tr>
                     </thead>
                     <tbody>
                       <!-- Example data --> 
                     <tr>
                        <td class="px-2 py-4">
                             1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                           Sed do eiusmod tempor incididunt.
                        </td>
                        <td class="py-3 justify-center">
                           <button data-modal-target="delete_btn_materials" data-modal-toggle="delete_btn_materials" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md"><img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon"></button>
                        </td>
                     </tr>        
                     </tbody>
                   </table>
               </div>

               <h3 class="ml-3 mt-3 font-medium text-gray-600">Skilled Personnel</h3>
               <div class="max-w border h-44">
               <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
                  <table class="table-fixed w-full">
                     <thead class="sticky top-0 bg-[#47BC8D]">
                       <tr>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">No.</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Quantity</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Unit</th>
                           <th class="w-full text-left text-white p-1.5 font-medium">Description</th>
                           <th class="w-10"></th>
                       </tr>
                     </thead>
                     <tbody>
                       <!-- Example data -->
                       <tr>
                        <td class="px-2 py-4">
                             1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                           Sed do eiusmod tempor incididunt.
                        </td>
                        <td class="py-3 justify-center">
                           <button data-modal-target="delete_btn" data-modal-toggle="delete_btn" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md"><img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon"></button>
                        </td>
                     </tr>         
                     </tbody>
                   </table>
               </div>
            </div>
            <!-- Modal Footer -->
        </div>
    </div>
</div>

<div id="delete_btn_materials" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
   <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow border">
         <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="delete_btn_materials">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
               <span class="sr-only">Close modal</span>
         </button>
            <div class="p-4 md:p-5 text-center">
               <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
               </svg>
               <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete this materials?</h3>
               <button data-modal-hide="delete_btn_materials" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                  Yes, I'm sure
               </button>
               <button data-modal-hide="delete_btn_materials" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-600 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
            </div>
      </div>
   </div>
               </div>
</div>

     </div>
  </div>
</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>