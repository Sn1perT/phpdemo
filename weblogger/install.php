<?php

header("Content-Type: text/html;charset=utf-8");
session_start();//启动php会话
function getrandhash()//创建getrandhash函数
{
    return md5((string)(rand()).md5((string)(time())));//将时间戳hash加密后，与前面的随机数再共同进行hash
}
function _m_khashdir($dir)//创建_m_khashdir函数
{
    $hashdir = $dir.getrandhash().'/';//变量赋值
    if (!file_exists($hashdir)) {//检查目录是否存在，若不存在

        mkdir($hashdir, 0777, true);//创建目录并赋予777权限，设置递归
        echo "make dir ".$hashdir." ok \n";//输出提示信息
        return $hashdir;
    }
    else//若存在
        _m_kdir($hashdir);

}
function rep_weblogpro($content)//定义rep_weblogpro函数，字符串替换
{
    $content = str_replace('@@@@@@@@',$_SESSION['webdir'],$content);
    $content = str_replace('########',$_SESSION['databasedir'],$content);
    $content = str_replace('!!!!!!!!',$_SESSION['filesalt'],$content);
    $content = str_replace('********',$_SESSION['prvkey'],$content);
    $content = str_replace('%%%%%%%%',$_SESSION['getflagshell'],$content);
    $content = str_replace('^^^^^^^^',$_SESSION['webcomdir'],$content);
    return $content;
}

function rep_manage($content)//定义rep_manage函数，字符串替换
{
    $content = str_replace('********',$_SESSION['databasedir'].md5($_SESSION['prvkey'].$_SESSION['filesalt']).'/' ,$content);
    $content = str_replace('!!!!!!!!', $_SESSION['username'], $content);
    $content = str_replace('@@@@@@@@', $_SESSION['passwd'], $content);
    $content = str_replace('########', $_SESSION['databasedir'].'data.php', $content);
    return $content;
}

if(!isset($_SESSION['step'])) {//若没有设置$_SESSION['step']变量
    //输出一个表单
    echo "<form action=\"\" method=\"POST\">
    输入数据存储路径: <input name=\"datadir\" value='/tmp/'></br>
    输入web根目录: <input name=\"webdir\" value = '/var/www/html/'></br>
    <input type=\"submit\">
</form>";
    if(isset($_POST['datadir'])&& isset($_POST['webdir']))//若设置了$_POST['datadir']和$_POST['webdir']变量
    {
        $_SESSION['datadir'] = $_POST['datadir'];//datadir 数据存储路径
        $_SESSION['webdir'] = $_POST['webdir'];//web根目录
        $_SESSION['step'] = 1;
        echo "<script>location.href = location.href;</script>";

    }

}
elseif($_SESSION['step'] === 1)
{
    $data_base_dir =  _m_khashdir($_SESSION['datadir']);//变量赋值，创建目录
    $_SESSION['databasedir'] = $data_base_dir;//变量赋值
    $web_base_dir = _m_khashdir($_SESSION['webdir']);//变量赋值，创建目录
    $web_com_dir = str_replace($_SESSION['webdir'],'',$web_base_dir);//字符串替换
    $_SESSION['webcomdir'] = $web_com_dir;//变量赋值
    $_SESSION['webbasedir']= $web_base_dir;//变量赋值
    $_SESSION['step'] = 2;
    echo "<script>location.href = location.href;</script>";
}
elseif($_SESSION['step'] === 2)
{
    //输出表单
    echo "<form action='' method = 'POST'>
            输入可以获取flag的bash命令: <input name = 'getflagshell' value = 'cat /flag'><br>
            输入管理账号: <input name = 'username'><br>
            输入管理密码: <input name = 'passwd'><br>
            <input type = 'submit'>
          </form>
     ";
    if(isset($_POST['username'])&&isset($_POST['passwd'])&&isset($_POST['getflagshell']))//判断是否传入了相应变量
    {
        //变量赋值
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['passwd'] = $_POST['passwd'];
        $_SESSION['getflagshell'] = $_POST['getflagshell'];
        $_SESSION['filesalt'] = getrandhash();
        $_SESSION['prvkey'] = getrandhash();
        $_SESSION['step'] = 3;
        echo "<script>location.href = location.href;</script>";
    }
}
elseif($_SESSION['step'] === 3)
{
    $weblogpro = file_get_contents('weblogpro.php');//file_get_contents()函数把文件读入字符串
    $weblogpro = rep_weblogpro($weblogpro);//使用rep_weblogpro函数进行字符串替换
    file_put_contents($_SESSION['databasedir'].'weblogpro.php',$weblogpro);//file_put_contents()函数把字符串写入文件中
    echo "weblogpro.php create ok \n";//输出提示信息
    //执行相应系统命令
    system('mv data.php '.$_SESSION['databasedir'].'data.php');//将 data.php 移动到 databasedir 目录下
    system('mv temp.php '.$_SESSION['databasedir'].'temp.php');//将 temp.php 移动到 databasedir 目录下
    system('mv  wupco_static '.$_SESSION['webbasedir'].'/wupco_static');//将 wupco_static 整个目录移动到 webbasedir 目录下
    $_SESSION['managedir'] = $_SESSION['webbasedir'].getrandhash().'/';//变量赋值
    mkdir($_SESSION['managedir'], 0777, true);//创建文件夹，文件夹名称为 $_SESSION['managedir'] 变量的值，权限为777，并设置递归模式
    $manage = file_get_contents('managelog.php');//变量赋值，file_get_contents()函数把文件读入字符串
    $manage = rep_manage($manage);//使用rep_weblogpro函数进行字符串替换
    file_put_contents($_SESSION['managedir'].'managelog.php',$manage);//file_put_contents()函数把字符串写入文件中
    $_SESSION['step'] = 4;
    echo "file moved ok \n";//输出提示信息，文件移动完成
    echo "<script>location.href = location.href;</script>";//
}
elseif ($_SESSION['step'] === 4)
{
    require_once($_SESSION['databasedir'].'weblogpro.php');//文件包含，require 引入的文件有错误时，执行会中断，并返回一个致命错误；
    $_SESSION['step'] = 5;
    //变量赋值，杀死www-data的所有进程，管道符表示把前面命令的输出作为后面命令的输入
    $killer = "while true\ndo\n ps aux | grep 'www-data'|grep -v $$|awk '{print $2}'|xargs kill -9\nsleep 0.1\ndone";
    $killername = $_SESSION['databasedir'].getrandhash().'.sh';//变量赋值，这是个文件
    file_put_contents($killername,$killer);//file_put_contents()函数把字符串写入文件中
    $killerphp = "<?php\nset_time_limit(1);\nsystem('nohup sh ".$killername." &');\n?>";//设置脚本运行时间，并在后台运行sh命令
    $killerphpname = $_SESSION['managedir'].'killer.php';//变量赋值，这是个文件
    file_put_contents($killerphpname,$killerphp);//file_put_contents()函数把字符串写入文件中
    file_put_contents($_SESSION['databasedir'].'tarlog.sh',"");//file_put_contents()函数把字符串写入文件中
    system('chmod -R 555 '.$_SESSION['webbasedir']);//给目录赋予555权限
    echo "<script>window.location.reload();</script>";//刷新页面
}
elseif ($_SESSION['step'] === 5)
{
    require_once($_SESSION['databasedir'].'weblogpro.php');//包含文件
    $_SESSION['step'] = 6;
    //输出提示信息
    echo ("all ok! please include ".$_SESSION['databasedir']."weblogpro.php <br> managepath : ".$_SESSION['managedir'].'managelog.php');
    session_unset();//释放cookie
    session_destroy();//销毁cookie
    system('sh rm_me.sh');//执行rm_me.sh文件
    exit();
}

