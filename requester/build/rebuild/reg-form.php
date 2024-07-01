
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request Form</title>
    <link rel="shortcut icon" href="/requester/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/requester/build/css/output.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/requester/build/js/control-no.js"></script>
    <script src="/requester/build/js/data-fetch-db.js"></script>
    <style>
        /* Style to make past dates grayed out */
        input[type="date"] {
            color: black; /* Change text color */
        }
        input[type="date"]::-webkit-inner-spin-button {
            display: none; /* Hide arrow */
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 1; /* Make calendar icon visible */
        }
        input[type="date"][disabled] {
            color: gray; /* Gray out text */
        }
    </style>
</head>
<body class="font-sans flex justify-center items-center">
    <!-- main content -->
    <div class="w-full mx-20 y-2 px-3">
        <!--forms -->
        <div class="rounded-xl p-4 shadow-2xl text-xs md:text-base border-gray-200 border">
            <!--Title -->
            <div class="flex flex-row gap-5 items-center mb-4" action="add-req-data.php">
                <a href="/requester/build/rebuild/index.php" class="block md:w-[50px] md:h-[50px] w-[30px] h-[30px]" title="Back">
                    <svg class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] hover:text-green-500 text-green-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4"/>
                    </svg>
                </a>
                <img class="w-20 md:w-52" src="/requester/assets/img/coloredlogo.png" alt="logo">
                <h1 class="text-center text-xs md:text-2xl font-semibold tracking-wider text-green-600">ADMINISTRATIVE SERVICE REQUEST FORM</h1>
            </div>
            <!-- control-no -->
            <div class="py-2 px-3 flex flex-col">
                                <label for="re1-con-no" >Request Control Number:</label>
                <input id="req-no" class="hidden" type="number" value="">
                <input id="req-con-no" class="py-2 px-3 w-40 border border-gray-200 rounded-md text-xs md:text-base" type="text" disabled>
            </div>
            <!--Personal Info -->
            <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Personal Information</h1>
                <div class="mb-2 max-w grid grid-rows-2 grid-flow-col gap-2 xl:flex xl:flex-row md:flex-grow">
                    <!--first name Info -->
                    <div class="flex flex-col flex-grow">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your First Name.">
                        <p id="valmess1" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                    <!--last name Info -->
                    <div class="flex flex-col flex-grow">
                        <label for="lname" >Last Name:</label>
                        <input type="text" id="lname" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Last Name.">
                        <p id="valmess2" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                    <!--Email info-->
                     <div class="flex flex-col flex-grow">
                        <label for="email" >Email address:</label>
                        <input type="email" id="email" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500" placeholder="Enter your Email Address.">
                        <p id="valmess3" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                    <div class="flex flex-col flex-grow">
                        <label for="lname">Department:</label>
                        <select name="department" id="department" class="py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500 w-full">
                            <option value="">-- Select Department --</option>
                            <option value="IC">IC</option>
                            <option value="ILLEG">ILLEG</option>
                            <option value="ITED">ITED</option>
                            <option value="IAAS">IAAS</option>
                            <option value="Other">Other Department</option>
                        </select>
                        <input id="otherdept" class="py-2 px-3 mt-1 hidden border-gray-200 border rounded-md text-xs md:text-base focus:ring-green-500 focus:border-green-500 w-full" type="text" placeholder="Other department">
                        <p id="valmess4" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $('#department').on('change', function(){
                        if ($('#department').val() === "Other"){
                                $('#otherdept').removeClass('hidden');
                                $('#otherdept').val('')
                        }else if($('#department').val() !== "") {
                                $('#otherdept').addClass('hidden');
                                const value = $(this).val();
                                $('#otherdept').val(value);
                        }else if($('#department').val() === ""){
                            $('#otherdept').val('')
                        }
                    });
                });
                </script>
            <!--Services Info -->
                    <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Services</h1>
        <div class="h-60 overflow-y-auto border border-gray-200">
        <table class="table-fixed w-full">
            <tbody>
                                <tr>
                        <td class="py-2 px-3 text-lg font-medium text-green-600">
                            No record found.
                        </td>
                    </tr>
                                </tbody>
        </table>
</div>
    <div id="selected-services" class="mt-4 hidden">
        <textarea name="selected-service" id="service" disabled></textarea>
    </div>
<div class="flex flex-row flex-grow my-1 gap-2">
    <textarea id="service_added" type="text" class="resize-none py-2 px-3 border-gray-200 border rounded-md text-xs md:text-base w-1/2 focus:ring-green-500 focus:border-green-500" placeholder="Other services." rows="2" cols="20"></textarea>
</div>
<p id="valmess5" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
        <!--Date And Time Needed-->
        <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Date And Time Service Need</h1>
            <div class="mb-2 max-w grid grid-rows-2 grid-flow-col gap-4 md:flex md:flex-row md:flex-grow">
                    <!--Date needed -->
                    <div class="flex flex-col">
                        <label for="date">Date: </label>
                        <input class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full py-2 px-3" type="date" id="date" min="" onchange="setMinDate()">
                        <p id="valmess9" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                    <script>
                function setMinDate() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById("date").setAttribute("min", today);
        }
        setMinDate(); // Set initial minimum date
    </script>
                    <!--Time needed-->
                    <div class="flex flex-col">
                        <label for="time">Time: </label>
                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full py-2 px-3" min="09:00" max="18:00" value="00:00"/>
                        <p id="valmess10" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
                    </div>
                </div>
                <p id="valmess6" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
            <!--Purpose Info -->
            <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Purpose/Description of Request</h1>
            <div class="flex flex-col flex-grow mb-2">
                <textarea id="des-req" class="resize-none py-2 px-3 text-xs md:text-base rounded-md focus:ring-green-500 focus:border-green-500" rows="4" cols="40" placeholder="Enter the purpose of the request."></textarea>
                <p id="valmess7" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
            </div>
            <!--Location Info -->
            <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Location of the Service Requested</h1>
            <div class="flex flex-col flex-grow mb-2">
                <textarea id="location-req" class="resize-none py-2 px-3 text-xs md:text-base rounded-md focus:ring-green-500 focus:border-green-500" rows="2" cols="20" placeholder="Enter the location of the request."></textarea>
                <p id="valmess8" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
            </div>
            <!--Terms&Agreement Info -->
            <h1 class="text-white mb-2 bg-[#47BC8D] py-2 px-3">Terms & Agreement</h1>
            <div class="flex flex-col gap-2 text-xs md:text-base">
                <lu class="text-justify ">
                    I am Aware that my requested for administrative services is on <b>“first-come, first served scheduling”</b> and shall be subjected to the availability of personnel and materials, also commit to evaluating the services(s) rendered by responding to the <b>ASD’s client satisfaction survey</b> once the requested work is complete.
                 </lu>
                 <div class="flex items-center me-4">
                </div>
                 <div class="flex gap-2 items-center">
                    <input id="agreement" type="checkbox" value="agree" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2">
                    <label for="agree" class="font-semibold tracking-wide text-green-600">I Agree</label>
                 </div>
                 <p id="valmess11" class="ml-2 mt-1 text-sm text-red-600 hidden"></p>
            </div>
            <div class="flex justify-end mt-2">
            <button id="form-btn" data-modal-target="overview" data-modal-toggle="overview" type="submit" class="bg-green-400 hover:bg-green-500 text-white pxy-2 px-3 py-2 font-semibold rounded-sm ">SUBMIT THIS FORM</button>
            </div>
        </div>
    </div>
<!--Request Details-->
<div id="req-details" class="fixed inset-0 z-50 overflow-y-auto bg-black bg-opacity-50 hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-xl wy-2 px-3 max-h-md">
        <h3 class="text-lg font-medium text-white bg-green-500 pl-2 py-2 uppercase rounded-md">Request Details</h3>
            <div class="mb-4 h-96 overflow-y-auto shadow-inner">
                <div id="details-text" class="text-md text-gray-600 p-1 mt-2 flex flex-col gap-1"></div>
            </div>
            <div class="text-right">
                <button id="cancelDetailsModalBtn" class="py-2 px-3 y-2 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancel</button>
                <button id="submitDetailsModalBtn" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center y-2 px-3 py-2 text-center">Submit</button>
            </div>
        </div>
    </div>
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
                <button id="closesuccess" class="bg-blue-500 hover:bg-blue-600 text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm inline-flex items-center y-2 px-3 py-2 text-center">OK</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/requester/build/js/service-fetch.js"></script>
<script src="/requester/node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="/susers/node_modules/flowbite/dist/datepicker.js"></script>
</html>