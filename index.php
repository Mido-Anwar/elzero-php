<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>php elzero</title>
</head>

<body>
    <?php
    // single line comment
    /*
    multi line comment This method of using multi-line comments,
    allows you to use them in
    a line of code other than a single-line comment,
    as it cancels everything after it.
     */
    echo ("we love php")/* example */;
    ?>

    <?= "<br> short php tag for print string only simply shorthand for echo function"; ?>
    <h3>data types</h3>
    <?php
    echo gettype(true);
    echo "<br>";
    echo gettype(100);
    echo "<br>";
    echo gettype(52.50);
    echo "<br>";
    echo gettype("mido");
    echo "<br>";
    echo gettype([1, 2, 4]);
    echo "<br>";
    ?>
    <h3>type casting</h3>
    <?php
    echo (int) 1 + 3.9;
    echo "<br>";
    echo  gettype((int) 1 + 3.9);
    echo "<br>";
    echo (int) 1 + "3.9";
    echo "<br>";
    echo  gettype((int) 1 + "3.9");
    echo "<br>";
    echo (int) 1.5 + (float)7;
    echo "<br>";
    echo  gettype((int) 1.5 + (float) 7);
    echo "<h3>string escaping</h3>";
    echo "mido ' anwar !! ' ";
    echo "<br>";
    echo "\"mido\"";
    echo "<br>";
    echo "\"mido\\\"";
    
    ?>
</body>

</html>