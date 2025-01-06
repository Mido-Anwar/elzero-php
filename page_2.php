<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>loop</title>
</head>

<body>
    <div>
        <h3> while loop & do,while loop </h3>
        <div class="con">
            <?php
            $index = 0;
            while ($index <= 100) :
            ?>
                <span> <?= $index; ?></span>
            <?php
                $index += 5;
            endwhile;
            ?>

        </div>

        <h3>for loop</h3>
        <div class="con">
            <?php
            $index2 = 0;
            for (;; $index2++):
            ?>
                <?php if ($index2 >= 100) {

                    break;
                } ?>
                <span class="res"> <?= $index2 ?></span>
            <?php endfor ?>

        </div>

    </div>

</body>

</html>