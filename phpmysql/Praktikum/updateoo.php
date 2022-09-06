<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE peserta SET email='farah@gmail.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
