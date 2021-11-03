<?php
 include('config/config.php');     
 $conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                   //设置编码格式
$fid = $_GET['fid'];                                      //获取新闻id
//应用mysqli_query()函数向MySQL数据库服务器发送删除新闻信息的SQL语句
$sql = mysqli_query($conn,"delete from zuowu where fid=$fid");
if($sql){
	echo "<script>alert('农作物信息删除成功！');window.location.href='search_news.php';</script>";
}else{
	echo "<script>alert('农作物信息删除失败！');window.location.href='search_news.php';</script>";
}
?>