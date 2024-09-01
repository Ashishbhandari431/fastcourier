<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>Booking</title>
    <style>
        /* Your custom styles here */
        /* #cnno {
            padding-left: 30px;
        } */
        .z1 {
            margin-left: 300px;
        }
        .z2 {
           margin-right:200px;
        }
        .z {
           margin-right:100px;
           margin-left: 100px;
        }
        #z3 {
            margin-left: 200px;
        }
        .tabbed-text {
            text-indent: 300px; /* Adjust the value as needed */
        }
        body {
            overflow-y: scroll; /* Add scrollbar on the right side */
            overflow-x: hidden; /* Hide scrollbar at the bottom */
        }
        .btn-submit-container {
            overflow: hidden; /* Remove scrollbar for button container */
        }
    </style>
    <script>
        function setDefaultDate() {
            var now = new Date();
            var year = now.getFullYear();
            var month = pad(now.getMonth() + 1); // Months are zero-based
            var day = pad(now.getDate());
            // Formatting the date to display as YYYY-MM-DD (compatible with HTML5 date input)
            var formattedDate = year + "-" + month + "-" + day;
            // Setting the value of the textbox to the current date
            document.getElementById('realDateTextBox').value = formattedDate;
        }

        // Function to pad single digit numbers with leading zero
        function pad(number) {
            return (number < 10 ? '0' : '') + number;
        }

        window.onload = function() {
            setDefaultDate();
        };
    </script>
</head>
<body>
    <?php include 'nav1.php' ?>
    <center>
        <form action="domesticinfo.php" method="post">
            <div class="col">
                <h4 class="text-center">Fast Courier and Cargo Services<br>Birtamode, Jhapa<br>023-534177, 9801376348</h4>
                <table cellspacing="20">
                    <div class="form-group">
                        <tr>
                            <?php
                                $conn = mysqli_connect("localhost","root","","fastbtm");
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $sql = "SELECT `CN No` FROM domesticinfo";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $CNno=$row['CN No'];
                                    }
                                }
                                $CN=$CNno+1;
                            ?>
                            <td id="cnno" class="float-left z2">
                                <label class="z2" for="cn">CN NO:<p>Fast177 <span id="cn">00<?php echo $CN?></span></p></label>
                            </td>
                            <td>
                                <label style="color: red;">Choose Packet Type:</label>
                                <select class="form-control" name="pactype" required>
                                    <option value="">--None--</option>
                                    <option value="Document">Document</option>
                                    <option value="Parcel">Parcel</option>
                                </select>
                            </td>
                            <td class="tabbed-text">Booking Date:<br><input class="form-control-plaintext z1" type="text" name="date" id="realDateTextBox"></td>
                        </tr>
                    </div>
                </table>
                <hr>
                <br>
                <h3>Sender Details</h3>
                <div class="form-group">
                    <label style="color: red;">Name:</label>
                    <input type="text" class="form-control" placeholder="Sender name" name="Sname" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Phone number:</label>
                    <input type="tel" class="form-control" placeholder="Sender number" name="Snumber" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Address line 1:</label>
                    <input type="textarea" class="form-control" placeholder="Sender Address" name="Saddress" required>
                </div>
                <div class="form-group">
                    <label>Address line 2:</label>
                    <input type="textarea" class="form-control" placeholder="Sender Address" name="Saddress1">
                </div>
            </div>
            <hr>
            <div class="col">
                <h3>Receiver Details</h3>
                <table cellspacing="20">
                    <div class="form-group">
                        <tr>
                        </tr>
                    </div>
                </table>
                <div class="form-group">
                    <label style="color: red;">Name:</label>
                    <input type="text" class="form-control" placeholder="Receiver name" name="Rname" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Phone number:</label>
                    <input type="tel" class="form-control" placeholder="Receiver number" name="Rnumber" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Address line 1:</label>
                    <input type="textarea" class="form-control" placeholder="Receiver Address" name="Raddress" required>
                </div>
                <div class="form-group">
                    <label>Address line 2:</label>
                    <input type="textarea" class="form-control" placeholder="Receiver Address" name="Raddress1">
                </div>
                <table>
                    <td>
                        <div class="form-group">
                            <label style="color: red;">Total Valuation(RS):</label>
                            <input class="form-control-plaintext p1" type="text" name="price" value="100">
                        </div>
                    </td>
                    <td class="tabbed-text">Weight(in KG*) :<br><input class="z1" type="number" name="weight" value="1" required></td>
                    <td class="tabbed-text">Pieces:<br><input  id="z3" type="number" name="pieces" value="1" required></td>
                    
                    <td class="tabbed-text">Booked By:<br><input class=" form-control-plaintext small-input" id="z3" type="text" name="Bookby" value="Sagar Dahal" width="5%" required></td>
                    
                </table>
            </div>
            <center class="btn-submit-container">
                <button type="submit" class="btn btn-success btn-sm btn-block">Submit</button>
            </center>
        </form>
    </center>
    <br><br><br>
</body>
</html>
