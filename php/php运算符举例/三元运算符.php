<?php
$test = 'hello';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody1';
echo $username, PHP_EOL;

// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody2';
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody3';

?>