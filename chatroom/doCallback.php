<?php
    /* 
    撤回信息，其实就是删除数据库里面对应的ID字段
    */
    // 1.引入数据库处理函数
    include "./Tools/phpTools.php";
    // 2.接收从chat接收到的内容
    $Id = $_GET['msgId'];
    // echo $Id;
    // 3.准备sql语句
    $sql = "update chat_message set isDelete = 'yes' where Id = $Id";
    // echo $sql;
    // 4.执行sql语句
    $arr =  mysqli_excute_zsg($sql);
    if($arr > 0){
        // 软删除
        // 删除成功!
        header('location:./chat.php');
    }else {
        echo "删除失败!";
    }
?>