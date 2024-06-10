<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <style>
     td {
            padding: 2px;
            height: 70PX;
        }
  </style>
  
</head>
<body>
    <?php include 'nav.php' ?>
    <table border="3">
        <tr>
            <td>Cn No</td>
            <td>Booking Date</td>
            <td>Sender name</td>
            <td>Sender address</td>
            <td>Sender Contact</td>
            <td>Packet Type</td>
            <td>Quantity</td>
            <td>Receiver name</td>
            <td>Receiver address</td>
            <td>Receiver Contact</td>
            <td></td>


        </tr>
<?php

$conn = mysqli_connect("localhost","root","","fastbtm");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Step 2: Query the database
$sql = "SELECT * FROM domesticinfo ORDER BY `CN No` DESC";

// Step 3: Execute the query
$result = mysqli_query($conn, $sql);
// Step 4: Fetch data
echo"<tr>";
if (mysqli_num_rows($result) > 0) {
   
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $color = ($row['CN No'] % 2 == 0) ? '#E7E7E7' : '#F7F7F7';
        echo "<tr style='background-color: $color;'>";
            echo"<td> FAST177 00".$row['CN No']."</td>";
            echo"<td>".$row['date']."</td>";
            echo"<td>".$row['Sname']."</td>";
            echo"<td>".$row['Saddress']."</td>";
            echo"<td>".$row['Snumber']."</td>";
            echo"<td>".$row['pactype']."</td>";
            echo"<td><center>".$row['pieces']."</center></td>";
            echo"<td>".$row['Rname']."</td>";
            echo"<td>".$row['Raddress']."</td>";
            echo"<td>".$row['Rnumber']."</td>";
            echo"<td>Edit</td>";
            echo"</tr>";
         }
} 

else {
    echo "0 results";
}

// Step 5: Close the connection
mysqli_close($conn);
?>
    </table>

</body>
</html>