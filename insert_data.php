<?php
$host = "your-rds-endpoint.amazonaws.com";
$username = "admin";
$password = "intel123";
$dbname = "intel";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$info = "Test data";
$sql = "INSERT INTO data (info) VALUES ('$info')";
$conn->query($sql);
echo "Data inserted.";
$conn->close();
?>