<!doctype html>
<html>
<head>
<title>病害信息管理</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<?php
 include('config/config.php');     
 $conn = mysqli_connect(HOST,USER,PASS,DBNAME) or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                    //设置编码格式
$id = $_GET['id'];                                     //使用get方法接收欲编辑的病害id
$sql = "select * from binghai where id=$id";       //从数据库中查找病害id对应的病害信息
$result = mysqli_query($conn,$sql);                  //检索病害id对应的病害信息
$row = mysqli_fetch_object($result);                 //获取结果集
?>
<div class="bgimg"></div>
<div class="content">
    <div class="con_left">
        <div class="con_left1">
            <div class="con_header" style=""><div class="title" style=""><span>病害管理</span></div></div>
            <div class="">
                <ul><li><a href="add_news.php">添加病害信息</a></li></ul><hr/>
				<ul><li><a href="search_news.php">查询病害信息</a></li></ul><hr/>
                <ul><li><a href="main.php">返回前端</a></li></ul>
            </div>
        </div>
    </div>
    <div class="con_right">
        <div class="">
            <div class="">
                <div class="con_header"><div class="title"><span>后台管理系统</span></div></div>
                <div style="margin-top:100px;margin-left: 100px;">
                    <form name="form1" method="post" action="update_modify_ok.php" enctype="multipart/form-data">
                        <table width="550" height="212" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                                <td>图片</td>
                                <td><input type="file" name="myfile" id="img"></td>
                            </tr>
                            <tr>
                                <td width="87" align="center">病害代码：</td>
                                <td width="433" height="31"><input name="bid" type="text" id="txt_bid" size="40" value="<?php echo $row->bid;?>" required>
                                <input name="id" type="hidden" value="<?php echo $row->id;?>">
                                </td>
                            </tr>
                            <tr>
                                <td width="87" align="center">病害名称：</td>
                                <td width="433" height="31"><input name="bname" type="text" id="txt_bname" size="40" value="<?php echo $row->bname;?>" required>
                                <input name="id" type="hidden" value="<?php echo $row->id;?>">
                                </td>
                            </tr>
                            <tr>
                                <td height="124" align="center">病害症状：</td>
                                <td><textarea name="zhengzhuang" cols="50" required rows="8" ><?php echo $row->zhengzhuang;?></textarea></td>
                            </tr>
                            <tr>
                                <td height="124" align="center">防治手段：</td>
                                <td><textarea name="fangzhi" cols="50" required rows="8" ><?php echo $row->fangzhi;?></textarea></td>
                            </tr>
                            <tr>
                                <td height="40" colspan="2" align="center">
                                <input name="Submit" type="submit" class="btn_grey" value="修改" >
                                    &nbsp; <input type="reset" name="Submit2" value="重置"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

</body>
</html>