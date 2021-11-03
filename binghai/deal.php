<?php session_start();?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<center>
    <?php 

    if (isset($_POST["uname"])) {
        $name=$_POST["uname"];
        # code...
    }
    if (isset($_POST["upass"])) {
        $pass=$_POST["upass"];
        # code...
    }
    //连接服务器
        $conn=mysqli_connect("localhost","root","root","messageboard") or die("链接失败！");
    //访问数据库
        mysqli_query($conn,"messageboard");
                        //执行sql语句
        $sql="select *from chat_user where userName='$name' and userPass='$pass'";
        mysqli_query($conn,"set names utf8");
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)) {
            echo "<script>
            alert('登陆成功');
            location.href='index.php';
            </script>";
            $_SESSION['uname'];
            $_SESSION['upass'];
            # code...
        }else{
            echo "<script>
            alert('登陆失败');
            location.href='login.php';
            </script>";
        }
    ?>

</center>