<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage in Single Row</title>
    <style>
        .form-row {
            display: flex;
            align-items: center;
            gap: 20px; /* Space between elements */
        }
        .form-row td {
            padding: 10px;
        }
    </style>
</head>
<body>

<table>
    <tr class="form-row">
        <td id="cnno" class="float-left z2">
            <label class="z2" for="cn">
                CN NO:
                <p>Fast177 <span id="cn">00<?php echo $CN ?></span></p>
            </label>
        </td>
        <td>
            <label>Destination</label>
            <?php include 'inside/destination.php' ?>
        </td>
        <td>
            <label style="color: red;">Choose Packet Type:</label>
            <select class="form-control" name="pactype" required>
                <option value="">--None--</option>
                <option value="Document">Document</option>
                <option value="Parcel">Parcel</option>
            </select>
        </td>
        <td class="tabbed-text">
            Booking Date:<br>
            <input class="form-control-plaintext z1" type="text" name="date" id="realDateTextBox">
        </td>
    </tr>
</table>

</body>
</html>
