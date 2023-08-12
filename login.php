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
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    //to prevent from mysqli injection  
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select *from `signup` where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        echo "<h1><center> Login successful. </center></h1>";
    } else {
        echo "<h1><center> Login failed. Invalid email or password. </center></h1>";
    }
}
?>