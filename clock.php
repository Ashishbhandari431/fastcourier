<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock</title>
    <style>
        .blue-line {
            width: 50%;
            height: 2px;         
            background-color: rgba(85, 35, 0, 255); 
        }
        .time {
            font-size: 0.6em;
            color: black;
            text-shadow: 0 0 3px blue;

        }
    </style>
</head>
<body>
    <div class="clock">
        <center><h3><div class="time" id="current-time"></div></h3></center>
        <!-- <hr class="blue-line"> -->
    </div>
    
    <script>
        function updateTime() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';  // Determine AM/PM
            
            hours = hours % 12; // Convert to 12-hour format
            hours = hours ? String(hours).padStart(2, '0') : '12'; // Handle 0 as 12

            const currentTime = `${hours}:${minutes}:${seconds} ${ampm} Jhapa/Nepal`;
            document.getElementById('current-time').textContent = currentTime;
        }

        // Update time every second
        setInterval(updateTime, 1000);
        // Initial call to display time immediately
        updateTime();
    </script>

</body>
</html>
