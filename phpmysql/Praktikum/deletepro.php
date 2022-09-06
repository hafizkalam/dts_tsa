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

$sql = "DELETE FROM peserta WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
