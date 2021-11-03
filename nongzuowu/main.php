<!doctype html>
<html>
<head>
<title>农作物信息管理</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
#wai{ width:100%; padding:10px; overflow:hidden}
.divleft{ float:left; width:30%; }
.divright{ float:right; width:70%; }
</style>
</head>

<body>
	<center>
<?php
 include('config/config.php');     
 $conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                    //设置编码格式
  $id  = $_GET['id']; //取得url中id的值
  $sql = "select * from zuowu where id =".$id; //拼接sql数据库命令
$result = mysqli_query($conn,$sql);                  //检索新闻id对应的新闻信息
if (!$result) {
printf("Error: %s\n", mysqli_error($conn));
exit();
}
$row = mysqli_fetch_object($result);             //获取结果集
?>
<div class="rdimg" >
	<img src="image/rdimg.jpg" width="100%" height="80%">
	</div>
	<div class="h1" align="right">
		<h1><a href="shouye.php">返回前面</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">管理员登录</a></h1></div>
<div id="wai">
<div class="divleft">
 
					<img src="<?php echo $row->image;?>" width="400" height="300">
				
				</div>
				<div class="divright">
				 <table width="100%"  border="0" cellpadding="0" cellspacing="0" >
					<br>
					<tr>
						<td><font color="red">生长<br>条件</font></td>
					<td><?php echo $row->grow;?></td>
					</tr>
					<tr>
						<th><br></th>
					</tr>
					<tr>
						<td><font color="red">贮藏<br>条件</font></td>
					<td><?php echo $row->zhucang;?></td>
					
				</tr>

                        </table>
                    </form>
          </div>    
</div>
</center>
</body>
</html>