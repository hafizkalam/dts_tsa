<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE peserta SET email='farah@gmail.com' WHERE id=1";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Execute the query 
    $stmt->execute();

    // Echo a massage to say te UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
