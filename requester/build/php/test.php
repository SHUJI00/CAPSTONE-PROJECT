<!DOCTYPE html>
<html>
<head>
    <title>Disable Past Dates</title>
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
<body>
    <h2>Choose a Date:</h2>
    <input type="date" id="dateInput" min="" onchange="setMinDate()">
    <script>
        function setMinDate() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById("dateInput").setAttribute("min", today);
        }
        setMinDate(); // Set initial minimum date
    </script>
</body>
</html>
