<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php超级全局变量</title>
</head>
<body>
    <h3>PHP 超级全局变量列表:</h3>
    <ul>
	<li>$GLOBALS</li>
	<li>$_SERVER</li>
	<li>$_REQUEST</li>
	<li>$_POST</li>
	<li>$_GET</li>
	<li>$_FILES</li>
	<li>$_ENV</li>
	<li>$_COOKIE</li>
	<li>$_SESSION</li>
    </ul>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    <br>
    <a href="超全局变量.php?subject=PHP&web=phpdemo.com">测试 $_GET</a>
    
</form>
<?php 
    //PHP $GLOBALS
    echo "PHP \$GLOBALS"."<br>";
    $x = 75; 
    $y = 25;
    function addition() 
    { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    }
    addition(); 
    echo $z; 

    //PHP $_SERVER
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    //echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";

    $name = $_REQUEST['fname']; 
    echo $name; 
    echo "<br>";

    $name = $_POST['fname']; 
    echo $name; 
    echo "<br>";

    echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];
?>

</form>
</body>
</html>