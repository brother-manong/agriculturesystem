<?php
    header("content-type:text/html;charset=utf-8");
    // 1.接收用户post方式传递过来的用户名和密码
    $userName = $_POST['userName'];
    $userPwd = $_POST['userPwd'];
    // 2.去数据库中查询有没有这样的用户名和密码，如果有就表示账户密码没有问题，就登录成功
    // 2.1引入工具 增删改mysqli_excute-zsg  查mysqli_excute_select
    include_once("./Tools/phpTools.php");
    // 2.2准备一个sql语句
    $sql = "select * from chat_user where userName = '$userName' and userPass = '$userPwd'";
    // 2.3调用工具函数执行sql 查
    $arr = mysqli_excute_select($sql);
    // 3.判断
    if(count($arr) > 0){
        // 账号密码正确，登录成功
        header('location:./chat.php');
        // 登录成功，用session记录一下登录的信息，来维持登录状态
        // 开启session
        session_start();
        // 用session来记录登录人的这一条信息(用户名密码和头像)
        $_SESSION['info'] = $arr[0];
    }else{
        echo "账号或者密码错误,请<a href='login.html'>重新登录</a>";
    }
?>