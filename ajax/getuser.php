<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
</head>

<body>
  <?php
  $con = mysqli_connect('localhost', 'root', '');
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }

  // $q = intval($_GET['q']);
  // mysqli_select_db($con, "dts_tsa");
  // $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
  // $result = mysqli_query($con, $sql);

  // echo "<table>
  // <tr>
  // <th>Username</th>
  // <th>Password</th>
  // <th>Role</th>
  // </tr>";
  // while ($row = mysqli_fetch_array($result)) {
  //   echo "<tr>";
  //   echo "<td>" . $row['username'] . "</td>";
  //   echo "<td>" . $row['password'] . "</td>";
  //   echo "<td>" . $row['role'] . "</td>";
  //   echo "</tr>";
  // }
  // echo "</table>";

  $q = $_GET['q'];
  mysqli_select_db($con, "dts_tsa");
  if ($q == '0')
    $sql = "SELECT * FROM produk";
  else
    $sql = "SELECT * FROM produk WHERE nama_produk = '" . $q . "'";
  $result = mysqli_query($con, $sql);
  $no = 0;
  echo $sql;
  echo $q;

  echo "<table>
  <tr>
  <th>Nama Produk</th>
  <th>Harga Produk</th>
  <th>Merk Produk</th>
  </tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nama_produk'] . "</td>";
    echo "<td>" . $row['harga_produk'] . "</td>";
    echo "<td>" . $row['merk_produk'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
  ?>
</body>

</html>