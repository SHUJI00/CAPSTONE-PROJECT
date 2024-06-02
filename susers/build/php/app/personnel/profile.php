<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: /susers/build/php/access/signin/login-personnel.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Account</title>
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
        <div class="absolute ml-10 md:ml-64 font-bold text-xl md:text-3xl text-gray-600">
         <h1 class="uppercase">Profile</h1>
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
                    Personnel
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="/susers/build/php/app/personnel/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
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
  <a href="/susers/build/php/app/admin/index.php" class="flex ms-2 md:me-24 mb-5 justify-center w-full">
      <img src="/susers/asset/img/image-removebg-preview (2).png" class=" h-16 me-3" alt="FlowBite Logo"/>
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
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-green-800" aria-controls="assigned-work" data-collapse-toggle="assigned-work">
                  <img class="h-8" src="/susers/asset/icons/assignedwork.png" alt="assignedworkicon">
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white">Assigned Work</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="assigned-work" class="hidden py-2 space-y-2">
                  <li>
                     <a href="/susers/build/php/app/personnel/assignedworktab/assignwork.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-green-800">Assigned</a>
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
   <div class="flex gap-1 flex-col p-4 mt-8 md:mt-7">

      <div class="h-24 w-24 bg-gray-300 rounded-full text-gray-500 text-center pt-9">No Image</div>
      <h1 class="text-xl my-2 font-medium text-gray-600">Personal Information</h1>
      <p class="text-gray-600"><b>First Name:</b></p>
      <p class="text-gray-600"><b>Last Name:</b></p>
      <p class="text-gray-600"><b>Mobile Number:</b></p>
      <button data-modal-target="personal-modal" data-modal-toggle="personal-modal" class="bg-green-500 hover:bg-green-600 py-1 px-4 w-20 rounded-md font-medium text-white">Edit</button>
      <h1 class="text-xl my-2 font-medium text-gray-600">Login Information</h1>
      <p class="text-gray-600"><b>Username:</b></p>
      <p class="text-gray-600"><b>Password</b></p>
      <button data-modal-target="login-modal" data-modal-toggle="login-modal" class="bg-green-500 hover:bg-green-600 py-1 px-4 w-20 rounded-md font-medium text-white">Edit</button>


 <!-- Main modal -->
 <div id="personal-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative p-4 w-full max-w-md max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <!-- Modal header -->
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                 <h3 class="text-lg font-semibold text-gray-900">
                     Personal Information
                 </h3>
                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="personal-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>
             <!-- Modal body -->
             <form class="p-4 md:p-5">
                 <div class="grid gap-4 mb-4 grid-cols-2">
                     <div class="col-span-2">
                         <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                         <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter your First Name" required="">
                     </div>
                     <div class="col-span-2">
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Enter yur Last Name" required="">
                     </div>
                     <div class="col-span-2">
                        <label for="mobilenum" class="block mb-2 text-sm font-medium text-gray-900">Mobile Number</label>
                        <input type="text" name="mobilenum" id="mobilenum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                     </div>
                 </div>
                 <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                     Update
                 </button>
             </form>
         </div>
     </div>
 </div>
 <div id="login-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative p-4 w-full max-w-md max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow">
             <!-- Modal header -->
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                 <h3 class="text-lg font-semibold text-gray-900">
                     Login Information
                 </h3>
                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="login-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>
             <!-- Modal body -->
             <div class="p-4 md:p-5">
                 <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                     <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username:</label>
                     <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                 </div>
                  <div class="col-span-2">
                     <label for="currentpass" class="block mb-2 text-sm font-medium text-gray-900">Current Password:</label>
                     <input type="password" name="currentpass" id="currentpass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                 </div>
                 <div class="col-span-2">
                    <label for="newpass" class="block mb-2 text-sm font-medium text-gray-900">New-Password:</label>
                    <input data-popover-target="popover-password" data-popover-placement="bottom" type="password" name="newpass" id="newpass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                 </div>
                 <ul class="text-green-500 w-full col-span-2">
                      <li class="flex items-center">
                          <p class="text-sm">It’s better to have:</p>
                      </li>
                      <li class="flex items-center">
                          <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                          </svg>
                          <p class="text-xs">A longer password (8-12 chars)</p>
                        </li>
                      <li class="flex items-center mb-1 nowrap">
                          <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                          </svg>
                          <p class="text-xs"> Upper & lower case letters</p>
                        </li>
                      <li class="flex items-center mb-1">
                          <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                          </svg>
                          <p class="text-xs">Contains symbol like(#$&)</p>
                        </li>
                  
                      </ul>
                 <div class="col-span-2">
                    <label for="retypepass" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password:</label>
                    <input type="password" name="retypepass" id="retypepass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                 </div>
                 </div>
                 <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                     Update
                 </button>
               </div>
         </div>
     </div>
 </div> 
 <div data-popover id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
   <div class="p-3 space-y-2">
       <p>It’s better to have:</p>
       <ul>
           <li class="flex items-center">
               <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
               </svg>
               A longer password (8-12 chars)
           </li>
           <li class="flex items-center mb-1">
               <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
               </svg>
               Upper & lower case letters
           </li>
           <li class="flex items-center mb-1">
               <svg class="h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
               </svg>
               Contains symbol like(#$&)
           </li>
       </ul>
</div>
<div data-popper-arrow></div>

     </div>
  </div>
</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>