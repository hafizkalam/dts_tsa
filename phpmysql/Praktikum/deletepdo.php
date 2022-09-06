<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM peserta WHERE id=2";

    // use exec() because no results are returened
    $conn->exec($sql);
    echo "Record deleted successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
