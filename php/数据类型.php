<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP数据类型</title>
</head>
<body>
String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。<br>
<hr>

<?php
    //字符串    
    $x = "Hello world";
    var_dump ($x);
    echo "<br>"; 
    
    //整型
    $x = 5985;
    var_dump($x);
    echo "<br>"; 
    $x = -345; // 负数 
    var_dump($x);
    echo "<br>"; 
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);
    
    //浮点型
    $x = 10.365;
    var_dump($x);
    echo "<br>"; 
    $x = 2.4e3;
    var_dump($x);
    echo "<br>"; 
    $x = 8E-5;
    var_dump($x);
    
    //布尔型
    $x=true;
    $y=false;
    var_dump ($x);
    echo "<br>";
    
    //数组
    $cars=array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";

    //对象
    class Car
    {
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
    }
    function print_vars($obj) {
        foreach (get_object_vars($obj) as $prop => $val) {
          echo "\t$prop = $val\n";
        }
     }
     // 实例一个对象
     $herbie = new Car("white");
     // 显示 herbie 属性
     echo "\therbie: Properties\n";
     print_vars($herbie);
     echo "<br>";

    //NULL值
    $x=null;
    var_dump($x);
    ?>
</body>
</html>