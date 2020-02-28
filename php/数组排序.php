<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php数组排序</title>
</head>
<body>
sort() - 对数组进行升序排列<br>
rsort() - 对数组进行降序排列<br>
asort() - 根据关联数组的值，对数组进行升序排列<br>
ksort() - 根据关联数组的键，对数组进行升序排列<br>
arsort() - 根据关联数组的值，对数组进行降序排列<br>
krsort() - 根据关联数组的键，对数组进行降序排列<br>
<hr>
<?php
    $cars=array("Volvo","BMW","Toyota");
    sort($cars);//升序排列
    var_dump ($cars);
    echo "<br>";
    rsort($cars);//降序排列
    var_dump ($cars);
    echo "<br>";

    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    asort($age);//根据关联数组的值，对数组进行升序排列
    var_dump ($age);
    echo "<br>";
    arsort($age);//根据关联数组的值，对数组进行降序排列
    var_dump ($age);
    echo "<br>";
    ksort($age);//根据关联数组的键，对数组进行升序排列
    var_dump ($age);
    echo "<br>";
    krsort($age);//根据关联数组的键，对数组进行降序排列
    var_dump ($age);
    echo "<br>";
?>
</body>
</html>