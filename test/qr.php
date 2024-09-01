<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    
    <!-- Form to input text -->
    <form id="qrForm">
        <label for="qrText">Enter Text or URL:</label><br>
        <input type="text" id="qrText" name="qrText" value="https://example.com"><br><br>
        <button type="submit">Generate QR Code</button>
    </form>

    <!-- Container to display QR code -->
    <div id="qrCodeContainer">
        <img id="qrCodeImage" src="" alt="QR Code">
    </div>

    <!-- Script to handle form submission and QR code generation -->
    <script>
        document.getElementById('qrForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var qrText = document.getElementById('qrText').value.trim();
            if (qrText !== '') {
                generateQRCode(qrText);
            } else {
                alert('Please enter text or URL to generate QR code.');
            }
        });

        function generateQRCode(text) {
            // Encode URI component to handle special characters properly
            var encodedText = encodeURIComponent(text);
            var qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' + encodedText;

            // Set the QR code image source
            document.getElementById('qrCodeImage').src = qrCodeUrl;

            // Optionally, you can show/hide the QR code container or other UI updates
            document.getElementById('qrCodeContainer').style.display = 'block';
        }
    </script>
</body>
</html>
