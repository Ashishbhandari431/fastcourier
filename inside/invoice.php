<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Courier Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        table {
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .icon-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 20px;
        }

        .icon-container {
            background-color: #3b3b3b;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .icon-container i {
            color: white;
            font-size: 24px;
        }
        
        .icon-container:hover {
            background-color: #444;
        }
        table {
            width: 100%;
            margin: 20px 0;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        @media print {
            .icon-buttons {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="icon-buttons">
            <div class="icon-container" id="printBtn">
                <i class="fas fa-print"></i>
            </div>
        </div>
        <center>
        <h1>Fast Courier and cargo service</h1>
        <h2>Birtamode,jhapa</h2>
        <hr>
        </center>
        <br>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>CN No</th>
                    <th>Booking Date</th>
                    <th>Sender Name</th>
                    <th>Packet Type</th>
                    <th>Quantity</th>
                    <th>COD</th>
                    <th>Receiver Name</th>
                    <th>Receiver Address</th>
                    <th>Receiver Contact</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $conn = mysqli_connect("localhost", "root", "", "fastbtm");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Get the CN No values from the query string
                if (isset($_GET['items'])) {
                    $cnNos = explode(',', $_GET['items']);

                    // Prepare the SQL query to fetch records with the CN No values
                    $placeholders = implode(',', array_fill(0, count($cnNos), '?'));
                    $sql = "SELECT * FROM domesticinfo WHERE `CN No` IN ($placeholders)";
                    
                    // Prepare and execute the query
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, str_repeat('i', count($cnNos)), ...$cnNos);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    // Fetch and display the results
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>FAST177 0" . htmlspecialchars($row['CN No']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['Sname']) . "</td>";
                            
                            echo "<td>" . htmlspecialchars($row['pactype']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['pieces']) . "</td>";
                            echo "<td></td>";
                            echo "<td>" . htmlspecialchars($row['Rname']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['Raddress']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['Rnumber']) . "</td>";
                            echo "<td></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='10'>No records found</td></tr>";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <script>
    document.getElementById('printBtn').addEventListener('click', () => {
            window.print();
        });
        </script>
</body>
</html>
