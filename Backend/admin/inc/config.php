<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Backend_db";
$port = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>