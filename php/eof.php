<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP EOF(heredoc) 使用说明</title>
</head>
<body>
PHP EOF(heredoc)是一种在命令行shell（如sh、csh、ksh、bash、PowerShell和zsh）和程序语言（像Perl、PHP、Python和Ruby）里定义一个字符串的方法。<br>

使用概述：<br>

1. 必须后接分号，否则编译通不过。<br>
2. EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致。<br>
3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。<br>
4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。<br>
5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法。<br>
<hr>
<?php
/*echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;*/
// 结束需要独立一行且前后不能空格
$name="runoob";
$a= <<<EOF
        "abc"$name
        "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>
</body>
</html>