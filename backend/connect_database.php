
<?php
    $servername = "localhost";
    //$username = "root";
    //$password = "password";
    $username = "b41c604898f785";
    $password = "91c130f6"
    $dbname = "neoasia";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
