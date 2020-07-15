
<?php
    //$servername = "localhost";
    ////$username = "root";
    ////$password = "password";
    //$username = "b41c604898f785";
    //$password = "91c130f6";
    //$dbname = "neoasia";
    //
    //// Create connection
    //$conn = new mysqli($servername, $username, $password, $dbname);
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
