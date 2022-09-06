<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dts_tsa";
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tabel Produk</title>
    <style>
        /* ====GLOBAL STYLE==== */
        body {
            background-color: #F8F8F8;
        }

        div.container {
            width: 960px;
            padding: 10px 50px 50px;
            background-color: white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }

        h1 {
            text-align: center;
            font-family: Cambria, "Times New Roman", serif;
            clear: both;
        }

        /* ======TABLE====== */
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px black solid;
            width: 100%
        }

        th,
        td {
            padding: 8px 15px;
            border: 1px black solid;
        }

        tr:nth-child(2n+3) {
            background-color: #F2F2F2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Produk</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Merk Produk</th>
            </tr>
            <?php

            foreach ($isiTabelProduk as $data) {
                echo "<tr>";
                echo "<td>$data[id_produk]</td>";
                echo "<td>$data[nama_produk]</td>";
                echo "<td>$data[harga_produk]</td>";
                echo "<td>$data[merk_produk]</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>