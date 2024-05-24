<?php
include 'db.php';

$c_course = $_POST['c_course'];
$c_college = $_POST['c_college'];

// Insert data into database
$sql = "INSERT INTO course_name (c_course, c_college) VALUES ('$c_course','$c_college')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
