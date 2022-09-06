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

$sql = "SELECT id,nama,email FROM peserta";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
