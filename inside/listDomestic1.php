<?php
$conn = mysqli_connect("localhost", "root", "", "fastbtm");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables to store user input
$searchReceiverName = "";
$searchSenderName = "";
$searchBookingDate = "";

// Check if form is submitted and process user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $searchReceiverName = mysqli_real_escape_string($conn, $_POST['Rname']);
    $searchSenderName = mysqli_real_escape_string($conn, $_POST['Sname']);
    $searchBookingDate = mysqli_real_escape_string($conn, $_POST['Date']);
}

// Construct the SQL query based on user input
$sql = "SELECT * FROM domesticinfo WHERE 1 ";

if (!empty($searchReceiverName)) {
    $sql .= " AND Rname LIKE '%$searchReceiverName%' ";
}

if (!empty($searchSenderName)) {
    $sql .= " AND Sname LIKE '%$searchSenderName%' ";
}

if (!empty($searchBookingDate)) {
    $sql .= " AND date LIKE '%$searchBookingDate%' ";
}

// Execute the query
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
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
            height: 70px;
        }
        #invoice {
            margin-left: 900px;
        }
        #bill {
            margin-left: 50px;
        }
        #checkbox {
            text-align: center;
            font-size: 80px;
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <br>
    <form action="Search.php" method="post">
        <label>Receiver name</label>
        <input type="text" name="Rname" value="<?php echo htmlspecialchars($searchReceiverName); ?>">
        &emsp14;
        <label>Sender Name:</label>
        <input type="text" name="Sname" value="<?php echo htmlspecialchars($searchSenderName); ?>">
        &emsp13;
        <label>Booking Date:</label>
        <input type="text" id="btn" name="Date" value="<?php echo htmlspecialchars($searchBookingDate); ?>">
        &emsp14;
        <input type="submit" value="Search" class="btn btn-danger">
    </form>

    <a href="domestic.php">
        <button type="button" class="btn btn-primary">Add Docket</button>
    </a>
    &emsp14;
    <a href="listDomestic.php">
        <button type="button" class="btn btn-primary">Refresh</button>
    </a>
    <a href="#" onclick="displaySelectedItems()">
        <img id="invoice" src="image/invoice.png" height="60px" width="60px" alt="Invoice">Invoice
    </a>
    <a href="Bill.php">
        <img id="bill" src="image/bill.png" height="60px" width="60px" alt="Bill">Bill
    </a>
    <br>
    <table border="3">
        <tr>
            <td>Select <input type="checkbox" id="selectAll" onclick="toggleSelectAll()"></td>
            <td><center>CN No</center></td>
            <td>Booking Date</td>
            <td>Sender Name</td>
            <td>Sender Address</td>
            <td>Sender Contact</td>
            <td>Packet Type</td>
            <td>Quantity</td>
            <td>Receiver Name</td>
            <td>Receiver Address</td>
            <td>Receiver Contact</td>
            <td>Remarks</td>
        </tr>
        
<?php
// Query the database
$sql = "SELECT * FROM domesticinfo ORDER BY `CN No` DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $color = ($row['CN No'] % 2 == 0) ? '#E7E7E7' : '#F7F7F7';
        echo "<tr style='background-color: $color;'>";
        echo "<td><input type='checkbox' class='items' data-cn='" . $row['CN No'] . "'></td>";
        echo "<td><a href='pdf.php?cn=" . $row['CN No'] . "'>FAST177 0" . $row['CN No'] . "</a></td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['Sname'] . "</td>";
        echo "<td>" . $row['Saddress'] . "</td>";
        echo "<td>" . $row['Snumber'] . "</td>";
        echo "<td>" . $row['pactype'] . "</td>";
        echo "<td><center>" . $row['pieces'] . "</center></td>";
        echo "<td>" . $row['Rname'] . "</td>";
        echo "<td>" . $row['Raddress'] . "</td>";
        echo "<td>" . $row['Rnumber'] . "</td>";
        echo "<td><a href='update.php?cn=" . $row['CN No'] . "&date=" . $row['date'] . "&sadd=" . $row['Saddress'] . "&price=" . $row['price'] . "&weight=" . $row['weight'] . "&pic=" . $row['pieces'] . "&sn=" . $row['Sname'] . "&sno=" . $row['Snumber'] . "&rn=" . $row['Rname'] . "&rno=" . $row['Rnumber'] . "&radd=" . $row['Raddress'] . "&name=" . $row['Bookby'] . "'>Edit</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='12'>No results found.</td></tr>";
}

mysqli_close($conn);
?>
    </table>
    <script>
        function toggleSelectAll() {
            const selectAllCheckbox = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.items');
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        function displaySelectedItems() {
            const checkboxes = document.querySelectorAll('.items');
            let selectedCNs = [];

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    selectedCNs.push(checkbox.getAttribute('data-cn'));
                }
            });

            if (selectedCNs.length > 0) {
                // Create query string from selected CN Nos
                const queryString = `items=${selectedCNs.join(',')}`;
                
                // Redirect to invoice.php with the query string
                window.location.href = 'invoice.php?' + queryString;
            } else {
                alert('No items selected!');
            }
        }
    </script>
</body>
</html>
