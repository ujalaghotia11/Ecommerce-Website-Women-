<?php
// Include the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdb";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'sdb');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Update the user's approval status to approved (is_approved = 1)
    $query = "UPDATE registration SET is_approved = 1 WHERE id = $userId";
    if (mysqli_query($conn, $query)) {
        echo "User approved successfully!";
    } else {
        echo "Error approving user: " . mysqli_error($conn);
    }
}

$conn->close();
?>
