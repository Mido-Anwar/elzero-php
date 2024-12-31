<?php
$courseName = "php osama elzero";
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
    </div>

    <div>
        <?= "<br> short php tag for print string only simply shorthand for echo function"; ?>
        <h2>data types</h2>
        <?php
        echo gettype(true);
        echo "<br>";
        echo gettype(98);
        echo "<br>";
        echo gettype(50.50);
        echo "<br>";
        echo gettype("mido");
        echo "<br>";
        echo gettype([-1, 2, 4]);
        echo "<br>";
        ?>
        <h2>type casting</h2>
        <?php
        echo (int) 0 + 3.9;
        echo "<br>";
        echo  gettype((int) 0 + 3.9);
        echo "<br>";
        echo (int) 0 + "3.9";
        echo "<br>";
        echo  gettype((int) 0 + "3.9");
        echo "<br>";
        echo (int) 0.5 + (float)7;
        echo "<br>";
        echo  gettype((int) 0.5 + (float) 7);
        echo "<h2>string escaping</h2>";
        echo "mido ' anwar !! ' ";
        echo "<br>";
        echo "\"mido\"";
        echo "<br>";
        echo "\"mido\\\"";

        ?>
    </div>


    <div>


        <h3>nl2br function</h3>

        <?php
        echo  nl2br("this multiline paragraph by nl2br function,
for Inserts HTML line breaks before all newlines in a string .");
        ?>
        <h3>heredoc & nowdoc</h3>
        <?php

        // here doc
        echo <<< "ul"
<h4>heredoc</h4>
<ul>
<li> mido </li>
<li> ahmed</li>
<li> hamo</li>
</ul>
ul;
        //nowdoc
        echo <<< 'now'
<h4>nowdoc</h4>
<ul>
<li> mido </li>
<li> ahmed</li>
<li> hamo</li>
</ul>
now;
        ?>
    </div>
    <div>
        <h3>variable variable</h3>
        <?php
        $name = "mido";
        $$name = "anwar";

        echo $name;
        echo "<br>";
        echo $$name;
        echo "<br>";
        echo $mido;
        echo "<br>";
        echo "ecma standard {$$name}";

        echo "<h3>assign by value & referance</h3>";
        //assing by value;
        $a = 4;
        $b = $a;
        echo "assign by referance {$b}";
        echo "<br>";
        // assign by referance;
        $c = 5;
        $d = &$c;
        $d = 10;
        echo "assign by referance {$d}";
        echo "<br>";
        ?>
    </div>
    <div>
        <h3>constant</h3>
        <?php

        echo php_uname($mode = "a");
        echo "<br>";
        echo "number script line";
        echo __LINE__;
        echo "<br>";
        echo __DIR__;
        echo "<br>";
        echo __FILE__;
        ?>
    </div>
    <div>

        <h3>arthimetc oprators</h3>
        <pre>
        <?php
        echo " 1172 + 50 = " . 1172 + 50;
        echo "<br>";
        echo " 1172 / 50 = " . 1172 / 50;
        echo "<br>";
        echo " 1172 * 50 = " . 1172 * 50;
        echo "<br>";
        echo " 1172 - 50 = " . 1172 - 50;
        echo "<br>";
        echo " 1172 % 50 = " . 1172 % 50;
        echo "<br>";
        echo " 1170 % 50 = " . 1170 % 50;
        echo "<br>";
        echo "الرفع الأسي -  Exponentiation";
        echo " 2 ** 5  = " . 2 ** 5;
        echo "<br>";
        echo "<h5>identity</h5>";
        echo "<br>";
        echo  "<h5>" . 'gettype(+"1170 % 50")' . "</h5>" . gettype(+"1170 % 50");
        echo "<br>";
        echo  "<h5>negation</h5>";
        echo "<br>";
        echo "-'-100'";
        echo "<br>";
        echo  "<h5>Assignment operator</h5>";
        echo "<br>";
        $g = 10;
        $g += 20;
        echo <<< 'assignmentOperator'
        this procese with all operators;
        $g= 10;
        $g +=20;
        echo $g;
        assignmentOperator;
        echo "<br>";
        echo $g;
        echo  "<h5>comparison operator</h5>";
        echo "var_dump(100 <> 100)<br> this exprission <> means not equal the result will be false ";
        echo "<br>";
        var_dump(100 <> 100);
        echo "<br>";
        echo "var_dump(100 <=> 200)<br> this exprission <=> 
        <br>
        means if result greater than the return will be 1 
        <br>
         if less than -1 
         <br> if equal 0";
        echo "<br>";
        var_dump(100 <=> 100);
        ?> 
 </pre>


    </div>
</body>

</html>