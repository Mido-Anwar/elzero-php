<?php
$courseName = "php with gio";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style></style>
    <title><?= $courseName; ?></title>
</head>

<body>


    <div>
        <?php

        // single line comment
        /*
    multi line comment This method of using multi-line comments,
    allows you to use them in
    a line of code other than a single-line comment,
    as it cancels everything after it.
      */
        echo ("<h2>we love php</h2>")/* example */;

        ?>
        <br>
        <p>

            <?=
            print " php version : " . PHP_VERSION;
            ?>
        </p>

    </div>

</body>

</html>