<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve barcode data from form submission
    $barcodeText = $_POST['barcodeData'];

    // Set barcode image dimensions
    $imageWidth = 300;
    $imageHeight = 100;

    // Create a blank image with white background
    $image = imagecreatetruecolor($imageWidth, $imageHeight);
    $bgColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $bgColor);

    // Set barcode color (black)
    $textColor = imagecolorallocate($image, 0, 0, 0);

    // Calculate barcode position
    $textX = ($imageWidth - strlen($barcodeText) * 10) / 2;
    $textY = $imageHeight / 2;

    // Draw barcode text
    imagestring($image, 5, $textX, $textY, $barcodeText, $textColor);

    // Set content type header for PNG image
    header('Content-type: image/png');

    // Output the image to browser
    imagepng($image);

    // // Free up memory
    // imagedestroy($image);
}
?>
