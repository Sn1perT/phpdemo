<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php常量</title>
</head>
<body>
    设置php常量时使用define()函数，该函数语句如下：<br>
    <h3>bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )</h3><br>
    <hr>
    该函数有三个参数:
    name：必选参数，常量名称，即标志符。<br>
    value：必选参数，常量的值。<br>
    case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。<br>
<?php
    // 区分大小写的常量名
    define("GREETING", "Hello world");
    echo GREETING;    // 输出 "Hello world"
    echo '<br>';
    define("greeting","默认区分大小写");
    echo greeting;   // 输出 "greeting"
    echo "<br>常量是全局的";
?>
</body>
</html>