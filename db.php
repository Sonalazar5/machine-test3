<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname,port: $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
