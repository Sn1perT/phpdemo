<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>算数运算符</title>
</head>
<body>
<?php
    $x=10; 
    $y=6;
    echo ($x + $y); // 输出16
    echo '<br>';  // 换行
     
    echo ($x - $y); // 输出4
    echo '<br>';  // 换行
     
    echo ($x * $y); // 输出60
    echo '<br>';  // 换行
     
    echo ($x / $y); // 输出1.6666666666667
    echo '<br>';  // 换行
     
    echo ($x % $y); // 输出4
    echo '<br>';  // 换行
     
    echo -$x;//取反，输出-10
    echo '<br>';

    $m="hello";
    $n="world";
    echo $m.$n;
    echo '<br>';

    var_dump(intdiv(10, 3));//整除运算符，返回商的整数部分
?>
</body>
</html>
