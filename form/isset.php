<html>

<head>
</head>

<body>
    <?php
    if (isset($_GET["nama"]) and isset($_GET["email"]) and isset($_GET["telp"])) {
        echo "Halo " . $_GET["nama"] . "!!<br>";
        echo "Alamat emailmu adalah " . $_GET["email"] . "!!<br>";
        echo "No telponmu adalah adalah " . $_GET["telp"] . "!!<br>";
    } else {
        echo "Anda harus mengakases halaman ini dari myform.html";
    }
    ?>
</body>

</html>