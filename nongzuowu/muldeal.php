<meta charset="utf-8">
<center>
	<?php
	if (isset($_POST["check"])) {
		$mycheck=$_POST["check"];
		$count=count($mycheck);
		$conn=mysqli_connect("localhost","root","root","messageboard")or die("链接失败");
		mysqli_query($conn,"set names utf8");
		for ($i=0; $i <$count ; $i++) { 
			$sql="delete from zuowu where id=$mycheck[$i]";
			$result=mysqli_query($conn,$sql);
		if ($result) {
		echo "<script>
			alert('删除成功');
			location.href='search_news.php';
			</script>";
			# code...
		 }else{
			echo "<script>
		 	alert('删除失败');
			location.href='search_news.php';
		 	</script>";
		 }
			# code...
		}
		# code...
	}
	?>

</center>