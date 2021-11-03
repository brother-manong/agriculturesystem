<meta charset="utf-8">
<title>病害</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<style type="text/css">
	a:link {

color:#000000;
text-decoration:none;
}
a:visited {
color:#00FF00;
text-decoration:none;
}
a:hover {
color:#FF0000;
text-decoration:none;
}
a:active {
color:#FFFFFF;
text-decoration:none;
}
img{
		height:150px;
		width: 170px;
		object-fit:cover;
		border-radius: 12px;
	}
body{
         
         height: 100%;
         border: 0;
         overflow: auto;
            }
</style>
<center>
	<div class="bgimg" >
		
	</div>
	<br>
	<div class="h1" align="right"><h1><a href="login.php">管理员登录</a></h1><h5 style="margin-left:1000px"><a href="../index.php">返回首页</a></h5></div>
	<body >
		<?php 
$conn=mysqli_connect("localhost","root","root","messageboard") or die("链接失败！");
		mysqli_query($conn,"set names utf8");
		
		 $sql="select *from binghai";
		 $result=mysqli_query($conn,$sql);
		 if (!$result) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
}
		 while($row=mysqli_fetch_array($result)){	 	
?>

	<form method="post">
		
		<table width="90%">
			
			<tr>
				<td width="10%" align="center"><?php echo $row["bid"];?></td>
				<td width="20%" height="" align="center"><img src="<?php echo $row["bimage"];?>"></td>
			<td width="25%" align="center" ><h1><a href="main.php?id=<?php echo $row["id"];?>" target="_blank" >
<?php
echo $row["bname"];
?>
</a></h1></td>	

			</tr>
		</table>
	</form>
	</body>
	</html>

<?php

}?>
</center>