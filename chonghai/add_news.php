<html>
<head>
<title>虫害信息管理</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<script language="javascript">
function check(form){
	if(form.txt_title.value==""){
		alert("请输入虫害名称!");form.txt_title.focus();return false;
	}
	if(form.txt_zhengzhuang.value==""){
		alert("请输入虫害症状!");form.txt_content.focus();return false;
	}
    if(form.txt_fangzhi.value==""){
        alert("请输入防治手段!");form.txt_content.focus();return false;
    }

    if(form.img.value==""){
        alert("请上传图片!");form.img.focus();return false;
    }
form.submit();
}
</script>
<div class="bgimg"></div>
<div class="content">
    <div class="con_left">
        <div class="con_left1">
            <div class="con_header" style=""><div class="title" style=""><span>虫害管理</span></div></div>
            <div class="">
                <ul><li><a href="add_news.php">添加虫害信息</a></li></ul><hr/>
				<ul><li><a href="search_news.php">查询虫害信息</a></li></ul><hr/>
                <ul><li><a href="shouye.php">返回前端</a></li></ul>
            </div>
        </div>
    </div>
    <div class="con_right">
        <div class="">
            <div class="">
                <div class="con_header"><div class="title"><span>专家管理系统</span></div></div>
                <div style="margin-top:100px;margin-left: 100px;">
                    <form name="form1" method="post" action="doAction.php" enctype="multipart/form-data">
                        <table width="100%" height="212" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                                <td width="87" align="center">虫害代码：</td>
                                <td width="433" height="31"><input required name="cid" type="text" id="txt_bid" size="40" ></td>
                            </tr>
                            <tr>
                                <td width="87" align="center">虫害名称：</td>
                                <td width="433" height="31"><input required name="cname" type="text" id="txt_title" size="40" ><font color="red">*</font></td>
                            </tr>
                            <tr>
                                <td height="124" align="center">虫害症状：</td>
                                <td><textarea name="zhengzhuang" cols="50" required rows="8" id="txt_content"></textarea><font color="red">*</font></td>
                            </tr>
                            <tr>
                                <td height="124" align="center">防治手段：</td>
                                <td><textarea name="fangzhi" cols="50" required rows="8" id="txt_content"></textarea><font color="red">*</font></td>
                            </tr>
                            
                            <tr>
            <td>图片</td>
            <td><input type="file" name="myfile" id="img"></td>
        </tr>
        
                            <tr>
                                <td height="40" colspan="2" align="center">
                                <input name="submit" type="submit" class="btn_grey" value="提交" onClick="return check(form1);">
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