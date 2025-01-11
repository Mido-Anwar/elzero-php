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
        <h3>data types</h3>
        <p>

            <?php
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



            ?>
            <br>
            <?php
            $x = (int) "15r67";
            // The number {0b110} is a binary representation of the-decimal number 6
            $c = 0b110;
            /**
             * In PHP, PHP_INT_MAX is a predefined 
             * constant that represents 
             * the maximum integer
             *  value that can be stored on the current system
             * 
             */
            $max = PHP_INT_MAX;
            $mido = [4, 3, 9];
            $cast = (int) "1_000_000";
            $withoutCast = "1_000_000";
            $nor= 1_000_000;
            /**
             *  INTEGERS
             */
            var_dump($x);
            echo "<br>";
            var_dump($c);
            echo "<br>";
            var_dump($cast);
            echo "<br>";
            var_dump($withoutCast);
            echo "<br>";
            var_dump($nor);
            echo "<br>";

            ?>
        </p>

    </div>

</body>

</html>