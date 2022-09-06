<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO peserta (nama, email) VALUES 
        ('Andi','andi@gmail.com'),
        ('Hafiz','hafiz@gmail.com'),
        ('Kalam','kalam@gmail.com'),
        ('Hero','hero@gmail.com')";


    // use exec() because no results are returened
    $conn->exec($sql);
    echo "New record created successfully<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
