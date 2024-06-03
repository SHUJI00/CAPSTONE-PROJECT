<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="shortcut icon" href="/susers/asset/icons/workflowpro.ico" type="image/x-icon">
    <link rel="stylesheet" href="/susers/build/css/output.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/susers/build/php/access/signup/reg-acc-post.js"></script>
</head>
<body class="bg-[#F9FAFB] font-sans flex flex-col items-center h-screen justify-evenly">
    <div class="md:w-7/12 w-2/3 px-8 py-7 rounded-md shadow-md flex flex-col gap-y-5">
        <div class="flex flex-row gap-4 items-center">
            <label class="text-3xl font-bold tracking-wide text-green-600 uppercase text-nowrap pr-2" for="_header-title">Sign Up</label> 
        </div>
        <!--User type-->
        <div class="flex flex-row gap-2 items-center">
        <label for="user_type">Select user type:</label>
        <select id="user_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-fit p-2.5">
              <option value="select user type">--Select user type--</option>
              <option value="admin">Admin</option>
              <option value="staff">Staff</option>
              <option value="personnel">Personnel</option>
        </select required>
        </div>
    <hr>
    <!--Name-->
        <div class="grid grid-cols-2 xl:grid-cols-3 md:w-full gap-4">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="_fname" id="_fname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer ring-transparent" placeholder=" " required />
                <label for="_fname" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">First name</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="_lname" id="_lname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer ring-transparent" placeholder=" " required />
                <label for="_lname" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-4 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Last name</label>
            </div>
    <!---Mobile Number-->
            <div class="relative w-full">
                <span class="absolute start-0 bottom-3 xl:bottom-7 text-gray-500">
                    <svg class="w-4 h-4 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                        <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                    </svg>
                </span>
                <input type="text" id="_mobilenum" class="block py-2.5 ps-6 pe-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" pattern="(09|\+639)[0-9]{9}" placeholder=" " required/>
                <label for="_mobilenum" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-placeholder-shown:start-6 peer-focus:start-0 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Mobile number</label>
            </div>
        </div>
    <hr>
    <!--login information-->
    <div class="relative z-0 w-2/4 mb-5 group">
        <input type="text" name="_username" id="_username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer ring-transparent" placeholder=" " required />
        <label for="_username" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Username</label>
    </div>
    <div class="flex md:w-full gap-4">
        <div class="relative z-0 w-full mb-5 group">
            <input data-popover-target="popover-password" data-popover-placement="bottom" type="password" name="_password" id="_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer ring-transparent" placeholder=" " required />
            <label for="_password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Password</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="_conpassword" id="_conpassword" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-green-500 peer ring-transparent" placeholder=" " required />
            <label for="_conpassword" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-8 scale-75 top-4 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Confirm Password</label>
        </div>
    </div>
    <hr>
    <!-- Profile Image -->
    <label class="block text-sm font-medium text-gray-900" for="_profimg">Upload profile photo (Optional)</label>
        <input id="_profimg" class="block w-fit text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="_proftimg_help" type="file">
        <p class="mt-1 text-sm text-gray-500" id="_proftimg_help">The image must be PNG or JPEG.</p>
    <!--Submit Button-->
    <button id="signupForm" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-2xl px-5 py-2.5 me-2 mb-2 uppercase">Sign up</button>
    <p class="text-gray-800 gap-2 flex justify-center">Already have an Account?<a class=" underline text-green-500 hover:text-green-600 font-semibold" href="/susers/build/php/access/signin/login-admin.php">Sign in</a></p>
</div>
<!--Success Modal-->
<div id="success-modal" class="fixed inset-0 z-50 overflow-y-auto hidden bg-black bg-opacity-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 w-96 rounded-lg shadow-xl border">
            <div class="mb-4 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="#3F83F8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <p id="text-success" class="text-lg font-medium text-blue-600"></p>
            </div>
            <div class="flex justify-center">
                <button id="closesuccess" class="bg-blue-500 hover:bg-blue-600 text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">OK</button>
            </div>
        </div>
    </div>
</div>
<!--Validate Inputs-->
<div id="validate" class="fixed inset-0 z-50 overflow-y-auto hidden bg-black bg-opacity-50">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 w-96 rounded-lg shadow-xl border">
            <div class="mb-4 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="orange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <p id="text" class="text-lg font-medium text-orange-400"></p>
            </div>
            <div class="flex justify-center">
                <button id="closeModalBtn" class="bg-orange-500 hover:bg-orange-600 text-white focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">Close</button>
            </div>
        </div>
    </div>
</div>
    <div data-popover id="popover-password" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
        <div class="p-3 space-y-2">
            <p>It’s better to have:</p>
            <ul>
                <li class="flex items-center">
                    <svg class="w-3.5 h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    A longer password (8-12 chars)
                </li>
                <li class="flex items-center mb-1">
                    <svg class="w-3.5 h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    Upper & lower case letters
                </li>
                <li class="flex items-center mb-1">
                    <svg class="w-3.5 h-3.5 me-2 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    Contains symbol like(#$&)
                </li>
            </ul>
    </div>
</body>
<script src="/susers/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>