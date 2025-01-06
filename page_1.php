<?php
$condition = 1;

?>
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

        <div>
            <?php
            if ($condition === 1): ?>
                <h3> if , ifelse , else </h3>
                <form action="" method="POST">
                    <input type="text" name="userName" id="">
                    <select name="lang" id="">
                        <option value="ar">arabic</option>
                        <option value="en">english</option>
                        <option value="es">espanish</option>
                    </select>
                    <button type="submit">go</button>
                </form>
            <?php elseif ($condition === 2) : ?>

                <h4>elseif altrnative syntax </h4>
            <?php else : ?>
                <p>else</p>
            <?php endif ?>

            <p>
                <?php
                $a = 5;
                $word = $a > 0 ? "good idea" : " bad";
                echo "ternary operator $word"  /*$a > 0 ? "good" : " bad"*/;
                ?>
            </p>
            <h3>switch case</h3>
            <p>
                <?php

                $day = "saturday";

                switch ($day) {
                    case  "saturday";
                        echo "hello today is $day";
                        break;

                    case "sunday";
                        echo "hello today is $day";
                        break;

                    case "monday";
                        "hello today is $day";
                        break;
                }
                ?>
            </p>

        </div>

</body>

</html>