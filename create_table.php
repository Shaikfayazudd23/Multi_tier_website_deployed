<?php
$host = "your-rds-endpoint.amazonaws.com";
$username = "admin";
$password = "intel123";
$dbname = "intel";

$conn = new mysqli($host, $username, $password);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);
$conn->select_db($dbname);
$sql = "CREATE TABLE IF NOT EXISTS data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    info VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);
echo "Setup complete.";
$conn->close();
?>