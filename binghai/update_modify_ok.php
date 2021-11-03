<?php 

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
        move_uploaded_file($temp_name, "upload/".$name);
        echo "文件上传成功";
        # code...
    }
    # code...
}
 include('config/config.php');     
 $conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                    //设置编码格式
$bid = $_POST['bid'];           
$bname = $_POST['bname'];       
$zhengzhuang= $_POST['zhengzhuang'];
$fangzhi= $_POST['fangzhi'];
$bimage="upload/".$name;                                  //获取新闻id
//应用mysqli_query()函数向MySQL数据库服务器发送修改新闻信息的SQL语句
$sql = "update binghai set bid='$bid',bname='$bname',bimage='$bimage',zhengzhuang='$zhengzhuang',fangzhi='$fangzhi' where bid=$bid";
$result = mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('修改成功！');window.location.href='search_news.php';</script>";
}else{
	echo "<script>alert('修改失败！');window.location.href='search_news.php';</script>";
}
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> 