<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>27</title>
</head>

<body>
    <div>
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

        <div>
            <h3>Error Control Operator</h3>

            <?php
            $a = 7;
            $b = @$a or die("the variable not found"); // @ error operator 

            echo "<h5>  $b : if variable not found ,<br>
             the error control operator will be display or die function message !!!! </h5>";
            echo "<br>";



            $f = @file("mido.txt");

            echo "<pre>";
            print_r($f);
            echo "</pre>";
            echo "<br>";

      
            echo "<h4> Operator Precedence</h4>";

            $c = 10 || false;
            echo "10 || false = "  . $c;
            echo "<br>";
            $d = 10 or false;
            echo "<br>";
            echo "10 or false = "  . $d;


            ?>

        </div>
</body>

</html>