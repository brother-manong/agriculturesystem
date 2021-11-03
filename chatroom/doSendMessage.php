<?php
    header('content-type:text/html;charset=utf-8');
    session_start();
    $userId = $_SESSION['info']['Id'];
    if(is_uploaded_file($_FILES["myfile"]["tmp_name"])){
    $name=$_FILES["myfile"]["name"];
    $type=$_FILES["myfile"]["type"];
    $size=$_FILES["myfile"]["size"];
    $temp_name=$_FILES["myfile"]["tmp_name"];
    $error=$_FILES["myfile"]["error"];
    ?>
    <?php
    switch ($type) {
        case 'image/jpeg':$ok=1;break;
        case 'image/gif':$ok=1;break;
        case 'image/png':$ok=1;break;
        case 'application/octet-stream':$ok=1;break;
        case 'text/plain':$ok=1;break;
        default:
        echo "你不能上传这个文件";
            # code...
            break;
    }
    $name=iconv("utf-8", "gb2312", $name);
    if ($ok==1 and $error==0) {
        move_uploaded_file($temp_name, "chatimg/".$name);
        $picture="chatimg/".$name;
        echo "文件上传成功";
        # code...
    }
    # code...
}
    // 1.接受用户post的方式传递过来的 聊天内容
    $messageContent = $_POST['messageContent'];
    // 2.引入工具
    include_once "./Tools/phpTools.php";
    // 3.把这个聊天内容插入到chat_message数据表中
    $sql = "insert into chat_message(user_id,content,img) values('$userId','$messageContent','$picture')";
    // 4.执行sql语句
    $arr = mysqli_excute_zsg($sql);
    var_dump($arr);
    if($arr > 0){
        header("location:./chat.php");
    }else{
        echo "发送失败";
    }
?>