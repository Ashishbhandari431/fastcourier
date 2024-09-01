<?php
// Step 1: Check if CN No. is provided via GET
if (isset($_GET['cn'])) {
    $cn = $_GET['cn'];

    // Step 2: Display the QR code container
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Code Generator</title>
    </head>
    <body>
        <!-- Container to display QR code -->
        <div id="qrCodeContainer">
            <img id="qrCodeImage" src="" alt="QR Code">
        </div>

        <!-- Script to handle QR code generation -->
        <script>
            // Function to generate QR code when the page loads
            document.addEventListener("DOMContentLoaded", function() {
                var cnNo = "' . $cn . '"; // CN No. received from PHP
                generateQRCode(cnNo);
            });

            // Function to generate QR code
            function generateQRCode(cnNo) {
                // Construct the data to be encoded in the QR code
                var data = "FAST177 0" + cnNo;
                var qrCodeData = encodeURIComponent(data);

                // Example API URL to generate QR code (replace with your preferred QR code API)
                var qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=50x50&data=" + qrCodeData;

                // Set the QR code image source
                // document.getElementById("qrCodeImage").src = qrCodeUrl;

                // Optionally, you can show/hide the QR code container or other UI updates
                document.getElementById("qrCodeContainer").style.display;
            }
        </script>
    </body>
    </html>
    ';

    // Step 3: Close the PHP script (optional)
    exit; // Exit to prevent further execution
} else {
    // Handle case where CN No. is not provided
    echo "CN No. not specified.";
}
?>
