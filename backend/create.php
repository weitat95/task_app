<?php 

require_once('connect_database.php');

$sql = "create table tasks ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, taskName VARCHAR(30) NOT NULL, taskDetail VARCHAR(100) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


$conn->close();

?>
