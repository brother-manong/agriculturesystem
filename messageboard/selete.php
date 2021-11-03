<meta charset="utf-8">

<body>
<?php 
include('config/config.php');
$conn = mysqli_connect(HOST, USER, PASS, DBNAME) or die("数据库服务器连接错误" . mysqli_connect_error());      //连接数据库
mysqli_query($conn,"set names utf8");    //设置编码格式
$sql="select *from liuyan";
$result = mysqli_query($conn,$sql);
if (!$result) {
printf("Error: %s\n", mysqli_error($conn));
exit();
}
 while($row=mysqli_fetch_array($result)){	 	
 	?>

	<table>
		<tr>
			<td width="50px"><?php echo $row["name"];?>:</td>
			<td width="250px"><?php echo $row["content"];?></td>
		</tr>
		<tr><br></tr>
	</table>
	
</body>
<?php
}?>