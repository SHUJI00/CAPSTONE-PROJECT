<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="shortcut icon" href="/requester/assets/img/logo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/requester/build/js/reg-acc.js"></script>
    <link rel="stylesheet" href="/requester/build/css/output.css">
</head>
<body class="bg-[#F9FAFB] font-sans flex items-center h-screen justify-center">
    <div class="bg-[#4FAB89] pr-3 pt-3 rounded-3xl shadow-md">
        <div class="w-fit rounded-se-2xl">
            <div class="px-3 py-3 mb-2 flex flex-row gap-5">
                <img class="md:w-48 w-36" src="/requester/assets/img/whitelogo.png" alt="woms-logo">
                <h1 class="text-white font-medium uppercase text-xl md:text-3xl px-2 py-3">Create an account</h1>
            </div>
            <div class="bg-white py-2 px-5 grid grid-cols-2 gap-2 rounded-se-full">
                <!--first name Info -->
                <div class="flex flex-col flex-grow">
                    <label for="reqtrfname" class="text-xs md:text-base">First Name:</label>
                    <input type="text" id="reqtrfname" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your First Name.">
                    <p id="reqtrvalmess1" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
                <!--last name Info -->
                <div class="flex flex-col flex-grow">
                    <label for="reqtrlname" class="text-xs md:text-base">Last Name:</label>
                    <input type="text" id="reqtrlname" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Last Name.">
                    <p id="reqtrvalmess2" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
                <!--Email info-->
                 <div class="flex flex-col flex-grow">
                    <label for="reqtremail" class="text-xs md:text-base">Email address:</label>
                    <input type="email" id="reqtremail" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Email Address.">
                    <p id="reqtrvalmess3" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
                <div class="flex flex-col flex-grow">
                    <label for="reqtrdepartment" class="text-xs md:text-base">Department:</label>
                    <select name="reqtrdepartment" id="reqtrdepartment" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500 w-full">
                        <option value="">-- Select Department --</option>
                        <option value="IC">IC</option>
                        <option value="ILLEG">ILLEG</option>
                        <option value="ITED">ITED</option>
                        <option value="IAAS">IAAS</option>
                        <option value="Other">Other Department</option>
                    </select>
                    <input id="reqtrotherdept" class="py-2 px-3 mt-1 hidden border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500 w-full" type="text" placeholder="Other department">
                    <p id="reqtrvalmess4" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
            </div>
        </div>
        <div class="bg-white px-5 pt-2 pb-8 text-sm md:text-base rounded-ee-full">
            <h1 class="font-medium py-2">Login Information</h1>
            <div class="grid grid-cols-2 gap-2">
                <!--Username Info -->
                <div class="flex flex-col flex-grow">
                    <label for="reqtrusername" class="text-xs md:text-base">Username:</label>
                    <input type="text" id="reqtrusername" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Username.">
                    <p id="reqtrvalmess5" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
                <!--Password Info -->
                <div class="flex flex-col flex-grow">
                    <label for="reqtrpassword" class="text-xs md:text-base">Password:</label>
                    <input type="password" id="reqtrpassword" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Password.">
                    <p id="reqtrvalmess6" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
                <!--Confirm Password info-->
                <div class="flex flex-col flex-grow">
                    <label for="reqtrcon-password" class="text-xs md:text-base">Confirm Password:</label>
                    <input type="password" id="reqtrcon-password" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Re-type your Password.">
                    <p id="reqtrvalmess7" class="ml-2 mt-1 text-xs text-red-600 hidden"></p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-between items-center my-2">
            <p class="flex flex-row justify-center text-white gap-2 ml-5">You already have an account?
            <a class="text-white font-semibold hover:underline" href="/requester/build/rebuild/index.php">Sign In</a></p>
            <button id="signupbtn" type="button" class="px-4 py-2 bg-white rounded-xl hover:bg-gray-200 text-green-600 hover:text-gray-900">Sign Up</button>
        </div>
    </div>
</body>
</html>