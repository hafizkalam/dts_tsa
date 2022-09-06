<?php
require 'function.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
                alert('Data transaksi berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
} else {
    echo "<script>
            alert('Data transaksi gagal dihapus!');
        </script>";
}
