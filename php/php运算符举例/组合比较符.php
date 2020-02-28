<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
如果 $a > $b, 则 $c 的值为 1。<br>
如果 $a == $b, 则 $c 的值为 0。<br>
如果 $a < $b, 则 $c 的值为 -1。<br>
<?php
// 整型
echo 1 <=> 1;// 0
echo "<br>"; 
echo 1 <=> 2; // -1
echo "<br>"; 
echo 2 <=> 1; // 1
echo "<br>"; 
 
// 浮点型
echo 1.5 <=> 1.5; // 0
echo "<br>"; 
echo 1.5 <=> 2.5; // -1
echo "<br>"; 
echo 2.5 <=> 1.5; // 1
echo "<br>"; 
 
// 字符串
echo "a" <=> "a"; // 0
echo "<br>"; 
echo "a" <=> "b"; // -1
echo "<br>"; 
echo "b" <=> "a"; // 1
echo "<br>"; 
?>
</body>
</html>