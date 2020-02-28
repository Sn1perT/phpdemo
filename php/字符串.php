<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php字符串</title>
</head>
<body>
<?php
    $txt1="Hello world!";
    $txt2="What a nice day!";
    echo $txt1 . " " . $txt2;//(.) 并置运算符用于把两个字符串值连接起来
    echo "<br>";
    echo strlen("Hello world!");//strlen() 函数返回字符串的长度（字节数）
    echo "<br>";//strpos() 函数用于在字符串内查找一个字符或一段指定的文本。如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
    echo strpos("Hello world!","world");//字符串 "world" 的位置是 6。之所以是 6 而不是 7 的原因是，字符串中第一个字符的位置是 0，而不是 1。
?>
</body>
</html>