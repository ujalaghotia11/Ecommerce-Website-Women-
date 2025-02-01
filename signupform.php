<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "sdb";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'sdb');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and escape it for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passward = mysqli_real_escape_string($conn, $_POST['passward']);
    
    // Insert data into the database
    $sql = "INSERT INTO registration(`name`,`lastname`,`email`,`passward`) VALUES ('$name', '$lastname','$email', '$passward')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registration form is submitted successfully.');
                window.location.href = 'login.php'; // To go to index.html or stay on the same page by commenting this line
              </script>";



    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>