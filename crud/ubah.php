<?php
require 'function.php';

$id = $_GET['id'];

$transaksi = query("SELECT * FROM transaksi WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data transaksi berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data transaksi gagal diubah!');
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

    <title>Ubah Data Transaksi</title>
</head>

<body>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Transaksi</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control w-50" id="id" value="<?= $transaksi['id']; ?>" name="id" autocomplete="off" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control w-50" id="nama_pelanggan" value="<?= $transaksi['nama_pelanggan']; ?>" name="nama_pelanggan" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control w-50" id="nama_produk" value="<?= $transaksi['nama_produk']; ?>" name="nama_produk" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_produk" class="form-label">Jenis Produk</label>
                        <select class="form-select w-50" id="jenis_produk" name="jenis_produk">
                            <option disabled selected value>Pilih Jenis Produk</option>
                            <option value="Makanan" <?php if ($transaksi['jenis_produk'] == 'Makanan') { ?> selected='' <?php } ?>>Makanan</option>
                            <option value="Minuman" <?php if ($transaksi['jenis_produk'] == 'Minuman') { ?> selected='' <?php } ?>>Minuman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">QTY</label>
                        <input type="text" class="form-control w-50" id="qty" value="<?= $transaksi['qty']; ?>" name="qty" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label>Status Pembayaran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="Sudah" value="Sudah" <?php if ($transaksi['status_pembayaran'] == 'Sudah') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Sudah">Sudah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_pembayaran" id="Belum" value="Belum" <?php if ($transaksi['status_pembayaran'] == 'Belum') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Belum">Belum</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_transaksi" class="form-label">Waktu Transaksi</label>
                        <input type="datetime-local" class="form-control w-50" id="waktu_transaksi" value="<?= $transaksi['waktu_transaksi']; ?>" name="waktu_transaksi" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>