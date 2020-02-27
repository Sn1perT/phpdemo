<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP输出</title>
</head>
<body>
    <?php
        //print
        print "print语句<br>";
        print "print输出字符串<br>";
        print "<h2>print输出可以包含html标签</h2><br>";

        $txt = "print输出变量<br>";
        $cars=array("数组","BMW","Toyota");
        print $txt;
        print "print输出 $cars[0] <br>";
        print "<hr>";
        
        //echo
        echo "echo语句<br>";
        echo "echo输出字符串<br>";
        echo "<h2>echo输出可以包含html标签</h2><br>";

        $txt1 = "echo输出变量<br>";
        $cars=array("数组","BMW","Toyota");
        echo $txt1;
        echo "echo","输出","连接","字符串","<br>";
        echo "echo输出 $cars[0] <br>";
        echo "<hr>";
    ?>
</body>
</html>