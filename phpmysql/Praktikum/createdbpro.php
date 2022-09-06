<?php
include "koneksi2.php";

// Create database
$sql = "CREATE DATABASE dbpro";
if (mysqli_query($conn, $sql)) {
    echo "Database createde successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
