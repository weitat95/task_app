<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

require_once('connect_database.php');

$sql = "SELECT * FROM tasks";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>