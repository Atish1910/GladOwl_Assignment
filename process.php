<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$c_college = $_POST['c_college'];
$c_course = $_POST['c_course'];

// Insert data into database
$sql = "INSERT INTO users (name,email,phone,c_course, c_college) VALUES ('$name', '$email','$phone','$c_course','$c_college')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
