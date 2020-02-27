<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP变量</title>
</head>
<body>
1.变量以 $ 符号开始，后面跟着变量的名称<br>
2.变量名必须以字母或者下划线字符开始<br>
3.变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）<br>
4.变量名不能包含空格<br>
5.变量名是区分大小写的（$y 和 $Y 是两个不同的变量）<br>
    <?php
        $x=5; // 全局变量

        function myTest()
        {
            $y=10; // 局部变量
            echo "<p>测试函数内变量:<p>";
            echo "变量 x 为: $x";
            echo "<br>";
            echo "变量 y 为: $y";
        } 
        
        myTest();
        
        echo "<p>测试函数外变量:<p>";
        echo "变量 x 为: $x";
        echo "<br>";
        echo "变量 y 为: $y";
    ?>
</body>
</html>