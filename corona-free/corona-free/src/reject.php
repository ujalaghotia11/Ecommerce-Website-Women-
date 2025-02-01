<?php
// Include the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Update the user's approval status to rejected (is_approved = 2)
    $query = "UPDATE registration SET is_approved = 2 WHERE id = $userId";
    if (mysqli_query($conn, $query)) {
        echo "User rejected successfully!";
    } else {
        echo "Error rejecting user: " . mysqli_error($conn);
    }
}

$conn->close();
?>
