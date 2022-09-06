<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataSiswa diklik maka
if (isset($_POST['dataTransaksi'])) {
    $output = '';

    // mengambil data siswa dari nis yang berasal dari dataSiswa
    $sql = "SELECT * FROM transaksi WHERE id = '" . $_POST['dataTransaksi'] . "'";
    $result = mysqli_query($conn, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '
                        <tr>
                            <th width="40%">ID</th>
                            <td width="60%">' . $row['id'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Pelanggan</th>
                            <td width="60%">' . $row['nama_pelanggan'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Produk</th>
                            <td width="60%">' . $row['nama_produk'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jenis Produk</th>
                            <td width="60%">' . $row['jenis_produk'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">QTY</th>
                            <td width="60%">' . $row['qty'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Status Pembayaran</th>
                            <td width="60%">' . $row['status_pembayaran'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Waktu Transaksi</th>
                            <td width="60%">' . $row['waktu_transaksi'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
