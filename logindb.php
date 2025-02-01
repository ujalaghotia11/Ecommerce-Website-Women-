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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Fetch the email and password entered by the user
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if email and password match, and if the user is approved
        $query = "SELECT * FROM registration WHERE email='$email' AND passward='$password'";
        $result = mysqli_query($conn, $query);

        // Check if query execution was successful
        if ($result === false) {
            echo "Error in query: " . mysqli_error($conn);
            exit;
        }

        // Check if there is a matching record
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Check if the user is approved
            if ($row['is_approved'] == 1) {
                echo "Login successful!";
            } elseif ($row['is_approved'] == 0) {
                echo "Your account is awaiting approval.";
            } else {
                echo "Your account has been rejected.";
            }
        } else {
            echo "Invalid email or password!";
        }
    } else {
        echo "Email or password not set!";
    }

    // Close the connection
    $conn->close();
}
?>
