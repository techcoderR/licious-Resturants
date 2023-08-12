<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "customer";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo " "; //Connect Successful
    }
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    // Check whether this email exists
    $existSql = "select * from `signup` where email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        echo "<h1><center> Email already in use. </center></h1>";
    } else {
        if (strlen($password) == 8 or strlen($password) > 8) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `signup` (`name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            echo "<h1><center> You have successfully registered. </center></h1>";
        } else {
            echo "<h1><center> Your password is less than 8 characters. </center></h1>";
        }
    }
}