<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE peserta SET email='farah@gmail.com' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
