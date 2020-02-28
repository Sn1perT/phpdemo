<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if语句</title>
</head>
<body>
    <h3>if语句</h3>
    <?php 
        $t=date("H");
        if ($t<"20")
        {
            echo "Have a good day!";
        }
    ?>
    <hr>
    <h3>if...else语句</h3>
    <?php
        $t=date("H");
        if ($t<"20")
        {
            echo "Have a good day!";
        }
        else
        {
            echo "Have a good night!";
        }
    ?>
    <hr>
    <h3>if...elseif....else 语句</h3>
    <?php
        $t=date("H");
        if ($t<"10")
        {
            echo "Have a good morning!";
        }
        elseif ($t<"20")
        {
            echo "Have a good day!";
        }
        else
        {
            echo "Have a good night!";
        }
    ?>
</body>
</html>