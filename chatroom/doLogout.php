<?php
    /* 
    登出就是删除对应的session，
    能不能加功能，第二次登录可以添加上自己的账号密码，直接点击登录就行了
    */
    // 开启session
    session_start();
    // 删除session
    unset($_SESSION['info']);
    // 回到登录页面
    header('location:./login.html');
?>