<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <style>
    .track{
      padding-top: 3%;
      text-align:center;
    }
     .carousel-item {
            position: relative;
        }
        
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
        position: absolute;
        top: 0;
        left: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    img{
      height:fit-content;
    }
    .search{
      margin-left: 35%;
      margin-top: 20%;
      max-width: 50%;
      height: 20px;
      
      /* background-color: green; */
      
    }
    .btn-color {
        background-color: #007bff; 
        border: none; 
    }

    .btn-color:hover {
        background-color: #0056b3; 
    } 
    .left{
      position: absolute;
        top: 0;
        left: 100;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    .time{
      margin-left: 60%;
      font-size:2px
      
    }
    #nature {
    width: 100%; /* Adjust width as needed, 100% makes it responsive */
    height: 500px; /* Set the desired height */
    object-fit: cover; /* Ensures the image covers the area without distortion */
}
        </style>
</head>
<body>





<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <img src="image/cargo.jpg" alt="Nature" id="nature">
  <div class="carousel-item active">
            <div class="carousel-caption">
               <?php include 'glove.php' ?>
            </div>
            <div class="time">
              <?php include 'clock.php' ?>
            </div>
            
            <div class="search">
    <div class="input-group">
      <form action="serch.php"method="post">
      <div class="input-group mb-3">
    <input class="form-control" type="search" name="tracking_number" placeholder="Enter Tracking Number" aria-label="Search">
    <div class="input-group-append">
        <input type="submit" value="Find Packet" class="btn btn-primary">
    </div>
</div>

      </form>
    </div>
</div>

        </div>
  </div>
  
  

</div>
<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "fastbtm");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the tracking number from the form input
    $tracking_number = mysqli_real_escape_string($conn, $_POST['tracking_number']);

    // Query to fetch tracking details from listdomestic.php table
    $sql = "SELECT * FROM domesticinfo WHERE `CN No` = '$tracking_number'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table ' border='3'>";
        echo "<thead class='thead-dark'>
                <tr>
                    <th>Cn No</th>
                    <th>Booking Date</th>
                    <th>Sender address</th>
                    <th>Packet Type</th>
                    <th>Receiver address</th>
                    <th>Remarks</th>
                </tr>
              ";
        while ($row = mysqli_fetch_assoc($result)) {
            $color = ($row['CN No'] % 2 == 0) ? '#E7E7E7' : '#F7F7F7';
            echo "<tr style='background-color: $color;'>";
            echo "<td><a href='#?cn=" . $row['CN No'] . "'>FAST177 0" . $row['CN No'] . "</a></td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['Saddress'] . "</td>";
            echo "<td>" . $row['pactype'] . "</td>";
            echo "<td>" . $row['Raddress'] . "</td>";
            echo "<td id='fpage'><A href='index2.php'><button  class='btn btn-danger'>Go TO Home Page</button></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }else {
        echo "<center><h1>Sorry or inconvinience<h1><br><p><img src='image/norecord.png'alt='No Record Found'></p>
    <br><a href='index2.php'><button  class='btn btn-danger'>Go TO Home Page</button></a><center>";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<footer>
  <p class="p-3 bg-dark text-white text-center"><a href="index.php">@Fastbtm</a> &emsp;&emsp;&emsp;023-534177&emsp;&emsp;9801376348
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="https://www.facebook.com/p/Fast-Courier-And-Cargo-Services-Birtamod-100063864826842/" ><img src="image/fbpng.jpg" alt="Fast courier" width="50px" height="50px"> Fast Courier </a>&emsp;&emsp;&emsp;
  <a href="https://www.facebook.com/sagar.dahal.33" ><img src="image/fbpng.jpg" alt="Sagar Dahal"width="50px" height="50px"> Sagar Dahal </a>
  </p>
</footer>

</body>
</html>