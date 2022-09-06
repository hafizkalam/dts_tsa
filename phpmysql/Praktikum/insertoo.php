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

$sql = "INSERT INTO peserta (nama, email)
VALUES ('Farah','farah@gemail.com'),('Andi','andi@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
