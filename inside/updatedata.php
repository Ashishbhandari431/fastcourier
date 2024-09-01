

<?php
// // Step 1: Establish database connection
// $con = mysqli_connect("localhost", "root", "", "fastbtm");
// if (!$con) {
//     echo "Connection failed: " . mysqli_connect_error();
//     exit();
// }

// echo "Connection Successful<br>";

// // Step 2: Retrieve and sanitize inputs
// $cn = isset($_POST['CN_No']) ? $_POST['CN_No'] : '';
// $Sname = mysqli_real_escape_string($con, $_POST['Sname']);
// $Snumber = mysqli_real_escape_string($con, $_POST['Snumber']);
// $Saddress1 = mysqli_real_escape_string($con, $_POST['Saddress']);
// $Saddress2 = mysqli_real_escape_string($con, $_POST['Saddress1']);
// $Saddress = "$Saddress1, $Saddress2";
// $pactype = mysqli_real_escape_string($con, $_POST['pactype']);
// $pieces = mysqli_real_escape_string($con, $_POST['pieces']);
// $weight = mysqli_real_escape_string($con, $_POST['weight']);
// $date = mysqli_real_escape_string($con, $_POST['date']);
// $Rname = mysqli_real_escape_string($con, $_POST['Rname']);
// $Rnumber = mysqli_real_escape_string($con, $_POST['Rnumber']);
// $Raddress1 = mysqli_real_escape_string($con, $_POST['Raddress']);
// $Raddress2 = mysqli_real_escape_string($con, $_POST['Raddress1']);
// $Raddress = "$Raddress1, $Raddress2";
// $price = mysqli_real_escape_string($con, $_POST['price']);

// // Step 3: Construct the UPDATE query
// $query = "UPDATE domesticinfo SET 
//           Sname = '$Sname',
//           Snumber = '$Snumber',
//           Saddress = '$Saddress',
//           pactype = '$pactype',
//           pieces = '$pieces',
//           weight = '$weight',
//           date = '$date',
//           Rname = '$Rname',
//           Rnumber = '$Rnumber',
//           Raddress = '$Raddress',
//           price = '$price'
//           WHERE `CN No` = '$cn'";

// // Step 4: Execute the query
// if (mysqli_query($con, $query)) {
//     echo "Record updated successfully";
//     mysqli_close($con); // Close the connection
//     header('Location: dashboard.php'); // Redirect to dashboard.php after successful update
//     exit();
// } else {
//     echo "Error updating record: " . mysqli_error($con);
// }

// mysqli_close($con); // Close the connection if there's an error
?>
<?php
// Step 1: Establish database connection
$conn = mysqli_connect("localhost", "root", "", "fastbtm");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Retrieve user input (assuming data is coming from a form)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Fetch data from $_GET array
    $cn_no = $_GET['CN No']; // Assuming 'cn' is the parameter name for CN NO
    $pactype = $_GET['pactype'];
    $booking_date = $_GET['date'];
    $sender_name = $_GET['Sname'];
    $sender_number = $_GET['Snumber'];
    $sender_address = $_GET['Saddress'];
    $sender_address1 = isset($_GET['Saddress1']) ? $_GET['Saddress1'] : '';
    $receiver_name = $_GET['Rname'];
    $receiver_number = $_GET['Rnumber'];
    $receiver_address = $_GET['Raddress'];
    $receiver_address1 = isset($_GET['Raddress1']) ? $_GET['Raddress1'] : '';
    $total_valuation = $_GET['price'];
    $weight = $_GET['weight'];
    $pieces = $_GET['pieces'];
    $name=$_GET['Bookby'];

    // Step 3: Construct SQL query
    $sql = "UPDATE domesticinfo SET 
            pactype = '$pactype',
            booking_date = '$booking_date',
            sender_name = '$sender_name',
            sender_number = '$sender_number',
            sender_address = '$sender_address',
            sender_address1 = '$sender_address1',
            receiver_name = '$receiver_name',
            receiver_number = '$receiver_number',
            receiver_address = '$receiver_address',
            receiver_address1 = '$receiver_address1',
            total_valuation = '$total_valuation',
            weight = '$weight',
            pieces = '$pieces'
            WHERE `CN No` = '$cn_no'";

    // Step 4: Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Step 5: Close database connection
mysqli_close($conn);
?>
