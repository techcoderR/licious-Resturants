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
    $numberofguests = $_POST['guests'];
    $section = $_POST['section'];
    $date = $_POST['date'];
    print($date);
    echo"<br>";
    $time = $_POST['time'];
    print($time);
   
    date_default_timezone_set('Asia/Calcutta');
    $originaldate = date('Y-m-d');
    print($originaldate);
    $originaltime= date('G:i:s');
    print($originaltime);
    $sql = "SELECT COUNT(*) FROM ereserve";
    $res = $conn->query($sql);
    
    // Insert data into the table
            if($originaldate<=$date){
               
                $sql = "INSERT INTO `ereserve` (`number_of_guests`, `section`, `date`, `time`) VALUES ( '$numberofguests', '$section', '$date', '$time')";
                $result = mysqli_query($conn, $sql);
                echo "<h1><center> The data successfully entered into the databases </center></h1>";}
            else{
                echo "<h1><center> enter the current date and time or after to make a table reserve<center><h1>";
            }
            
        } else {
            echo "<h1><center> Sorry! Some technical issue arries </center></h1>";
} 
?>

