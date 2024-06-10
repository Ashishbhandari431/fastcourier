<?php
$con = mysqli_connect("localhost", "root", "", "fastbtm");

// Check connection
if (!$con) {
    echo "Connection failed: " . mysqli_connect_error();
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['name'];
        $password = $_POST['password'];

        // Sanitize user input to prevent SQL injection
        $user = mysqli_real_escape_string($con, $user);

        // Construct the SQL query to select the user with the provided username
        $query = "SELECT name,email, password FROM SIGNUP WHERE name='$user'";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check if a row with the provided username exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Verify the password
            if ($password==$row['password']) {
                // Password is correct
                echo "Login Successful";
                header('Location: inside/dashboard.php');
            } else {
                echo "Incorrect password <br> please enter a correct password";
            }
        } else {
            // Username doesn't exist
            echo "User not found";
        }
    } else {
        echo "No POST request received";
    }
}

mysqli_close($con);
?>