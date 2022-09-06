<html>

<head></head>

<body>
    <?php
    //percobaan 1
    // $myFile = "testFile.txt";
    // $fh = fopen($myFile, 'r');
    // $theData = fread($fh, 5);
    // fclose($fh);
    // echo $theData;

    //percobaan 2
    $myFile = "testFile.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);
    echo $theData;
    ?>
</body>

</html>