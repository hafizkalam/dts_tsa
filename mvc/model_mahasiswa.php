<?php
// Create connection
function buatKoneksi()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dts_tsa";
    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

function getTableMahasiswa()
{
    $link = buatKoneksi();
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

// echo "<pre>";
// print_r(getTableMahasiswa());
// echo "</pre>";
