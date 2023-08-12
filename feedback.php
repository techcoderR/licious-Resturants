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

     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $areacode=$_POST['areacode'];
     $telephone=$_POST['telnum'];
     $email=$_POST['emailid'];
     $feedback=$_POST['feedback'];
    
     echo "<h1><center>Thank you for your feedback 👍</center></h1>";
} 
else {
    echo "<h1><center> Sorry! Some technical issue arries </center></h1>";
} 
?>
