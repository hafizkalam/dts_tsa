<?php
require 'function.php';

if (isset($_POST['simpan'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data transaksi berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data transaksi gagal ditambahkan!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Tambah Data Transaksi</title>
</head>

<body>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase">&nbsp;Tambah Data Transaksi</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control form-control-md w-50" id="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" name="nama_pelanggan" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control w-50" id="nama_produk" placeholder="Masukkan Nama Produk" name="nama_produk" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_produk" class="form-label">Jenis Produk</label>
                        <select class="form-select w-50" id="jenis_produk" name="jenis_produk">
                            <option disabled selected value>Pilih Jenis Produk</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">QTY</label>
                        <input type="text" class="form-control w-50" id="qty" placeholder="Masukkan QTY" name="qty" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label>Status Pembayaran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="sudah" value="Sudah">
                            <label class="form-check-label" for="sudah">Sudah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="belum" value="Belum">
                            <label class="form-check-label" for="belum">Belum</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_transaksi" class="form-label">Waktu Transaksi</label>
                        <input type="datetime-local" class="form-control w-50" id="waktu_transaksi" name="waktu_transaksi" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>