<?php
include "koneksi1.php";

// Create database
$sql = "CREATE DATABASE dboo";
if ($conn->query($sql) === TRUE) {
    echo "Database created sucessfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
