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

$sql = "SELECT id,nama,email FROM peserta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
