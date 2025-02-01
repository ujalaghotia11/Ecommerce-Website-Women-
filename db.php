<?php
$host = "localhost";  // Database host (usually 'localhost')
$db = "sdb"; // Database name
$user = "root";       // MySQL username
$pass = "";           // MySQL password

// Create connection
$conn = new mysqli('localhost', 'root', '','sdb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
