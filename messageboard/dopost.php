<meta charset="utf-8">

<?php 
include('config/config.php');
$conn = mysqli_connect(HOST, USER, PASS, DBNAME) or die("数据库服务器连接错误" . mysqli_connect_error());      //连接数据库
mysqli_query($conn,"set names utf8");    //设置编码格式
$name=$_POST['name'];
$phone=$_POST['phone'];
$content=$_POST['content'];
$sql="insert into liuyan(name,phone,content)values('$name','$phone','$content')";
$result = mysqli_query($conn,$sql);
if ($result) {
 echo "<script>alert('添加成功!'); window.location.href = '../index.html';</script>";
} else {
    echo "<script>alert('添加失败!'); window.location.href = '../index.html';</script>";
}

mysqli_close($conn);                  //关闭MySQL数据库服务器
?>