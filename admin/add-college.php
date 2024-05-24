<?php
include 'db.php';

$c_name = $_POST['c_name'];

// Insert data into database
$sql = "INSERT INTO college_name (c_name) VALUES ('$c_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
