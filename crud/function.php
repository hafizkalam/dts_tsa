<?php
// conn$conn Database
$conn = mysqli_connect("localhost", "root", "", "dts_tsa");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // conn$conn database
    global $conn;

    $result = mysqli_query($conn, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama_pelanggan']);
    $produk = htmlspecialchars($data['nama_produk']);
    $jenis = $data['jenis_produk'];
    $qty = $data['qty'];
    $status = $data['status_pembayaran'];
    $waktu = htmlspecialchars($data['waktu_transaksi']);

    $sql = "INSERT INTO transaksi VALUES ('$id','$nama','$produk','$jenis','$qty','$status','$waktu')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama_pelanggan']);
    $produk = htmlspecialchars($data['nama_produk']);
    $jenis = $data['jenis_produk'];
    $qty = $data['qty'];
    $status = $data['status_pembayaran'];
    $waktu = $data['waktu_transaksi'];

    $sql = "UPDATE transaksi SET nama_pelanggan = '$nama', nama_produk = '$produk', jenis_produk = '$jenis', qty = '$qty', status_pembayaran = '$status', waktu_transaksi = '$waktu' WHERE id = $id";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM transaksi WHERE id = $id");
    return mysqli_affected_rows($conn);
}
