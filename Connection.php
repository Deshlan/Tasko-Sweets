
<?php
// Database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tasko_sweets";

// Create a mysqli object
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for connection errors
    if ($conn->connect_error) {
          die("Connection failed: " .$conn->connect_error);

    } 
    else{

    }
    ?>