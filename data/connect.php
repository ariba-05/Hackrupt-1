<?php
$user = 'root';
$password = 'root';
$db = 'sanjeevini';
$host = 'localhost';
$port = 8889;
$conn = new mysqli($host, $user, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$connect = 1;

?>
