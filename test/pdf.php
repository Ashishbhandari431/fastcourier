<?php
if(!empty($_POST['submit'])){
    // Sanitize and assign POST variables
    $Sname = htmlspecialchars($_POST['Sname']);
    $Snumber = htmlspecialchars($_POST['Snumber']);
    $Saddress1 = htmlspecialchars($_POST['Saddress']);
    $Saddress2 = htmlspecialchars($_POST['Saddress1']);
    $Saddress = "$Saddress1, $Saddress2";
    $pactype = htmlspecialchars($_POST['pactype']);
    $pieces = htmlspecialchars($_POST['pieces']);
    $weight = htmlspecialchars($_POST['weight']);
    $date = htmlspecialchars($_POST['date']);
    $Rname = htmlspecialchars($_POST['Rname']);
    $Rnumber = htmlspecialchars($_POST['Rnumber']);
    $Raddress1 = htmlspecialchars($_POST['Raddress']);
    $Raddress2 = htmlspecialchars($_POST['Raddress1']);
    $price = htmlspecialchars($_POST['price']);
    $name = htmlspecialchars($_POST['BookBy']);
    $Raddress = "$Raddress1, $Raddress2";

    // Include FPDF library
    require("C:/xampp/htdocs/website/fpdf/fpdf.php");

    // Create a new PDF document
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set font for the document
    $pdf->SetFont("Arial", "", 10);

    // Define column widths and cell height
     
 

    // Add header with MultiCell for multiline text
    $pdf->MultiCell(80, 10, "Fast Courier & Cargo Services Birtamode Jhapa", 1, 'C');
    $pdf->SetXY(80 + 10, 10); // Move cursor to the right after MultiCell
    $pdf->MultiCell(40, 10 / 2, "Booking date:\n$date", 1, 'C');
    $pdf->SetXY(80 + 40 + 10, 10); // Move cursor to the right after MultiCell
    $pdf->Cell(20, 10, "BTM", 1, 0, 'C');
    $pdf->Cell(20, 10, "$Raddress2", 1, 0, 'C');
    $pdf->Cell(0, 10, "CN", 1, 1, 'C');

    // Add sender and receiver labels
    $pdf->Cell(80, 5, "Sender details", 1, 0, 'C');
    $pdf->Cell(0,5, "Receiver details", 1, 1, 'C');

    // Add sender and receiver information


    

    $pdf->Cell(80, 5, $Sname, 'LR', 0, 'C');
    $pdf->Cell(0, 5, $Rname, 'R', 1, 'C');
    $pdf->Cell(80, 5, $Snumber,'LR', 0, 'C');
    $pdf->Cell(0, 5, $Rnumber,'R', 1, 'C');
  
    $pdf->Cell(80, 5, $Saddress,'LR', 0, 'C');
    $pdf->Cell(0, 5, $Raddress, 'R', 1, 'C');
    $pdf->Cell(80, 5, "",'LR', 0, 'C');
    $pdf->Cell(0, 5, "", 'R', 1, 'C');

    
    $pdf->Cell(40,6, "No. Of pic.:",1,0,'C');
    // $pdf->SetXY(80 + 40 + 10, 10); 
    $pdf->Cell(40, 6, "Weight(KG):", 1, 0, 'C');
    $pdf->Cell(40, 6, "Charges:", 1, 0, 'C');
    $pdf->Cell(0, 6, "Received in goods condition", 1, 1, 'C');

    $pdf->Cell(40,8, "$pieces",1,0,'C');
    // $pdf->SetXY(80 + 40 + 10, 10); 
    $pdf->Cell(40, 8, "$weight", 1, 0, 'C');
    $pdf->Cell(40, 8, "$price", 1, 0, 'C');
    $pdf->Cell(0, 8, "Name:.................................", 'LR', 1);


    $pdf->Cell(120,8, "Please don't put cash in envalope.",'L',0,'C');
    // $pdf->SetXY(80 + 40 + 10, 10); 
    // $pdf->Cell(40, 8, "", 0, 0, 'C');
    // $pdf->Cell(40, 8, "", 0, 0, 'C');
    $pdf->Cell(0, 8, "Sign:.................................", 'LR', 1);


    $pdf->Cell(120,8, "Booked by: $name",'LB',0,'C');
    $pdf->Cell(0, 8, "Date:......................... Stamp..................", 'LRB', 1);

    $pdf->Cell(0,10,"Thank You For Using Fast Courier & Cargo Service",0,1,'C');

    
    // Output the PDF
    $pdf->Output();
}
?>

