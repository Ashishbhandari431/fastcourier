<?php
$conn = mysqli_connect("localhost","root","","fastbtm");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$typ = isset($_GET['typ']) ? $_GET['typ'] : '';

?>

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
    
</head>
<body>
    <?php include 'nav.php' ?>
    <center>
        <form action="updatedata.php" method="get">
            <div class="col">
                <h4 class="text-center">Fast Courier and Cargo Services<br>Birtamode, Jhapa<br>023-534177, 9801376348</h4>
                <table cellspacing="20">
                    <div class="form-group">
                        <tr>
                           
                            <td id="cnno" class="float-left z2">
                                <label class="z2" for="cn">CN NO:<p>Fast177  <span id="cn">00<?php echo $_GET['cn']?></span></p></label>
                            </td>
                            <td>
                                <label style="color: red;">Choose Packet Type:</label>
                                <!-- <select class="form-control" name="pactype"  required>
                                    <option value="">--None--</option>
                                    <option value="Document">Document</option>
                                    <option value="Parcel">Parcel</option>
                                </select> -->
                                <select class="form-control" name="pactype" required>
                            <option value="">--None--</option>
                            <option value="Document" <?php if ($typ == 'Document') echo 'selected'; ?>>Document</option>
                            <option value="Parcel" <?php if ($typ == 'Parcel') echo 'selected'; ?>>Parcel</option>
                        </select>

                            </td>
                            <td class="tabbed-text">Booking Date:<br><input class="form-control-plaintext z1" type="text" value="<?php echo $_GET['date']; ?>" name="date" id="realDateTextBox"></td>
                        </tr>
                    </div>
                </table>
                <hr>
                <br>
                <h3>Sender Details</h3>
                <div class="form-group">
                    <label style="color: red;">Name:</label>
                    <input type="text" value="<?php echo $_GET['sn']; ?>" class="form-control" placeholder="Sender name" name="Sname" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Phone number:</label>
                    <input type="tel" value="<?php echo $_GET['sno']; ?>" class="form-control" placeholder="Sender number" name="Snumber" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Address line 1:</label>
                    <input type="textarea" value="<?php echo $_GET['sadd']; ?>" class="form-control" placeholder="Sender Address" name="Saddress" required>
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
                    <input type="text" value="<?php echo $_GET['rn']; ?>" class="form-control" placeholder="Receiver name" name="Rname" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Phone number:</label>
                    <input type="tel" value="<?php echo $_GET['rno']; ?>" class="form-control" placeholder="Receiver number" name="Rnumber" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label style="color: red;">Address line 1:</label>
                    <input type="textarea" value="<?php echo $_GET['radd']; ?>" class="form-control" placeholder="Receiver Address"  name="Raddress" required>
                </div>
                <div class="form-group">
                    <label>Address line 2:</label>
                    <input type="textarea" class="form-control" placeholder="Receiver Address" name="Raddress1">
                </div>
                <table>
                    <td>
                        <div class="form-group">
                            <label style="color: red;">Total Valuation(RS):</label>
                            <input class="form-control-plaintext p1" type="text" value="<?php echo $_GET['price']; ?>" name="price" value="100">
                        </div>
                    </td>
                    <td class="tabbed-text">Weight(in KG*) :<br><input class="z1" type="number" value="<?php echo $_GET['weight']; ?>" name="weight" value="1" required></td>
                    <td class="tabbed-text">Pieces:<br><input class="z" id="z3" type="number" value="<?php echo $_GET['pic']; ?>" name="pieces" value="1" required></td>
                </table>
            </div>
            <center class="btn-submit-container">
                <input type="submit" name="submit" value="submit" class="btn btn-success btn-sm btn-block" id="">
            </center>
        </form>
    </center>
    <br><br><br>
</body>
</html>
