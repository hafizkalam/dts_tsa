<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $merk = $harga = "";
$name_err = $merk_err = $harga_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a product name";
    } else {
        $name = $input_name;
    }

    // Validate merk
    $input_merk = trim($_POST["merk"]);
    if (empty($input_merk)) {
        $merk_err = "Please enter an product merk";
    } else {
        $merk = $input_merk;
    }

    // Validate harga
    $input_harga = trim($_POST["harga"]);
    if (empty($input_harga)) {
        $harga_err = "Please enter the salary amount.";
    } else if (!ctype_digit($input_harga)) {
        $harga_err = "Please enter a positive integer value.";
    } else {
        $harga = $input_harga;
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($address_err) && empty($salary_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO produk (nama_produk, merk_produk, harga_produk) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_merk, $param_harga);

            // Set parameters
            $param_name = $name;
            $param_merk = $merk;
            $param_harga = $harga;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambah Produk</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Jenis Produk</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($merk_err)) ? 'has-error' : ''; ?>">
                            <label>Merk</label>
                            <input name="merk" class="form-control"><?php echo $merk; ?></input>
                            <span class="help-block"><?php echo $merk_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($harga_err)) ? 'has-error' : ''; ?>">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>">
                            <span class="help-block"><?php echo $harga_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>