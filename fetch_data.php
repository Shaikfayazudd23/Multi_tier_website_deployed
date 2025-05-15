<?php
$host = "your-rds-endpoint.amazonaws.com";
$username = "admin";
$password = "intel123";
$dbname = "intel";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$result = $conn->query("SELECT * FROM data");
while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Info: " . $row["info"]. " - Created At: " . $row["created_at"] . "<br>";
}
$conn->close();
?>