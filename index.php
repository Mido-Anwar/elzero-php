<?php

declare(strict_types=1);

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
        <h3>data types</h3>
        <p>

            <?=
            print " php version : " . PHP_VERSION;

            // scalar types
            # int 1,2,3,4,5; not decimal
            # double 1.5 , 0.5 , -2.4;
            # bool true 0r false;
            # string "mido", ""

            //compund types
            # array - to declare array() , []
            # object
            # callble
            # itrable

            //special types
            # resources
            # null
            // type casting
            $x = (int) "15r67";
var_dump($x)
            ?>
        </p>

    </div>

</body>

</html>