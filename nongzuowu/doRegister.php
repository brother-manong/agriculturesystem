<?php
    header("content-type:text/html;charset=utf-8");
    // 1.接收注册用户填写的用户名和用户密码
    $userName = $_POST['userName'];
    $password = $_POST['userPwd'];
    $userIcon = $_FILES['userIcon'];
    // echo $userName;
    // echo "<br><br>";
    // echo $password;
    // echo "<br><br>";
    // var_dump($userIcon);
    // utf-8格式的图片名字
    $oldName = $userIcon['name'];
    $tmp_path = $userIcon['tmp_name'];//原本的图片路径
    $newName = iconv('utf-8','gbk',$oldName);//gbk格式的新名字
    $new_path = './images/icon/'.$newName;//新路径
    $res = move_uploaded_file($tmp_path,$new_path);//转移到新的文件夹

    /* if($res > 0){
        echo "注册成功,<a href='./login.html'>点击登录</a> ";
    }else{
        echo "注册失败,<a href='./register.html'>重新注册</a> ";
    } */

    // 2.引入工具 增删改 mysqli_excute_zsg  查 mysqli_excute_select
    include_once "./Tools/phpTools.php";
    // 2.1准备一个sql语句
    $sql = "insert into chat_user(userName,userPass,userIcon) values('$userName','$password','$oldName')";
    // echo $sql;
    // 2.2调用工具函数执行sql语句 增删改的语句只会有true(1)和false(0)两种结果
    $rows = mysqli_excute_zsg($sql);
    if($rows > 0){
        echo "注册成功,<a href='./login.html'>点击登录</a> ";
    }else{
        echo "注册失败,<a href='./register.html'>重新注册</a> ";
    }

?>