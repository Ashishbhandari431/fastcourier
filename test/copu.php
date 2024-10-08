<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save PDF</title>
    <!-- Include html2pdf.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</head>
<body>

<!-- Content to Save as PDF -->
<div id="content">
    <h1>Hello, World!</h1>
    <p>This is a sample content that will be saved as a PDF when you click the button below.</p>
</div>

<!-- Button to Save as PDF -->
<button id="save-pdf-btn">Save as PDF</button>

<script>
    // Function to handle the button click and save the content as a PDF
    document.getElementById("save-pdf-btn").addEventListener("click", function () {
        // Get the content to convert to PDF
        var content = document.getElementById("content");
        
        // Use html2pdf.js to convert content to PDF
        html2pdf().from(content).save('desktop\\my-document.pdf');
    });
</script>

</body>
</html>
