<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE peserta (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    // use exec() because no results are returened
    $conn->exec($sql);
    echo "Table peserta created successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
