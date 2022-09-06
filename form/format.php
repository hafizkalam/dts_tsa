<html>

<head>
    <title>PHP Form</title>
</head>

<body>
    <?php
    if (isset($_GET["name"]) and isset($_GET["email"]) and isset($_GET["phone"])) {
        $name =  $_GET["name"];
        $email = $_GET["email"];
        $phone =  $_GET["phone"];
        $val = "&name = $name &  email = $email & phone = $phone";
    } else {
        header("Location:form2.php?error=variable_not_set");
    }

    if (empty($name)) {
        header("Location:form2.php?error=name_empty" . $val);
    } else if (empty($email)) {
        header("Location:form2.php?error=email_empty" . $val);
    } else if (!preg_match("/^[a-zA-Z]*&/", $name)) {
        header("Location:form2.php?error=name_invalid" . $val);
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:form2.php?error=email_invalid" . $val);
    } else {
        echo "<h2>Name: $name <br> Email: $email <br> Phone: $phone </h2>";
    }
    ?>
</body>

</html>