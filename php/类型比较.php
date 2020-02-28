<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP类型比较</title>
</head>
<body>
    松散比较：使用两个等号 == 比较，只比较值，不比较类型。<br>
    严格比较：用三个等号 === 比较，除了比较值，也比较类型。<br>
    <?php
        if(42 == "42") {
            echo '1、值相等';
        }
 
        echo PHP_EOL; // 换行符
 
        if(42 === "42") {
            echo '2、类型相等';
        } else {
            echo '3、不相等';
        }
    ?>
</body>
</html>