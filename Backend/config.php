<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname   );
mysql_set_charset($conn,"utf8");

$sql = "SELECT * FROM 'user'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo  $row['id'].'---'.$row['name'].'---'.$row['username'].'---'.$row['password'];
    echo '</br>';
  }

?>