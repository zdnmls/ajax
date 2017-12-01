<?php
header('content-type:text/html;charset=utf8');
$user=$_POST['user'];
$pass=$_POST['pass'];
echo $user;
echo $pass;
if($user=='admin'){
    if($pass=='123456'){
        echo "登陆成功";
    }else{
        echo "密码错误";
    }
}else{
    echo "账号不存在";
};













