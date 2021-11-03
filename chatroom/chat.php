<?php
  /* 
  登录成功后会自动跳转到这个页面
  */
  header("content-type:text/html;charset=utf-8");
  // 开启session
  session_start();
  if(!isset($_SESSION['info'])){
    // 打回登录页面
    header('location:./login.html');
    return false;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>在线聊天</title>
  <style>
    html,
    body {
      height: 50%;
      box-sizing: border-box;
    }

    body {
      padding: 10px;
      margin: 0;
      /* padding: 20px; */
      display: flex;
      flex-direction: column;
      background-image: url(images/chatbj.jpg);
    }

    .clearfix::before,
    .clearfix::after {
      content: '';
      visibility: hidden;
      clear: both;
      line-height: 0;
      height: 0;
      display: block;
    }

    .clearfix {
      zoom: 1;
    }

    .f_l {
      float: left;
    }

    .f_r {
      float: right;
    }

    .container {
      margin: 20px auto 0;
      width: 38%;
      min-width: 400px;
      height: 560px;
      flex: 1;
      display: flex;
      flex-direction: column;
      background-color: white;
      border: 1px solid skyblue;
      border-radius: 10px;
    }

    .message {
      border-bottom: 1px solid skyblue;
      /* height: 400px; */
      flex: 1;
      overflow: scroll;
      padding: 20px;
      box-sizing: border-box;
      transition: all 2s;
      background-image: url(images/bi.jpg);
    }

    .control {
      height: 70px;
      display: flex;
      padding-left: 50px;
      padding-right: 50px;
    }

    .inputBox {
      height: 40px;
      margin-top: 20px;
      border-radius: 6px;
      outline: none;
      padding: 0;
      box-sizing: border-box;
      /* width: 500px; */
      flex: 1;
      font-size: 20px;
      box-shadow: 0 0 3px gray;
      border: 1px solid #ccc;
      transition: all .2s;
      padding-left: 10px;
    }

    .inputBox:focus {
      border-color: skyblue;
      box-shadow: 0 0 3px skyblue;
    }

    .sendButton {
      height: 40px;
      margin-top: 15px;
      margin-left: 20px;
      background-color: yellowgreen;
      width: 100px;
      border: none;
      outline: none;
      border-radius: 10px;
      color: white;
      font-size: 20px;
      font-family: '微软雅黑';
      cursor: pointer;
    }

    .charge {
      height: 70px;
      margin-top: 20px;
      margin-left: 20px;
      width: 120px;
      border: none;
      outline: none;
      border-radius: 10px;
      color: white;
      font-size: 20px;
      font-family: '微软雅黑';
      cursor: pointer;
    }

    .message>div>a {
      text-decoration: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: skyblue;
      text-align: center;
      line-height: 50px;
      color: white;
      font-size: 25px;
      font-weight: 700;
      font-family: '微软雅黑';
    }

    .message>.left>a {
      background-color: hotpink;
    }

    a>img {
      width: 100%;
      height: 100%;
    }


    h2 {
      margin: 0;
      padding-bottom: 5px;
      font-family: '微软雅黑';
    }

    .right h2 {
      text-align: right;
    }

    .user a {
      font-weight: 300;
      color: black;
    }

    .f_r a {
      font-size: 12px;
      text-decoration: none;
      border-radius: 5px;
      padding: 3px;
      background-image: linear-gradient(to bottom, #d9534f 0, #c12e2a 100%);
      color: white;
    }

    .f_l a{
      text-decoration:none;
      font-size:14px;
      color:black;
      margin-left:20px;
    }
    .img{
      width:150px;
      height:150px;
    }
#img{
  width: 50px;
  height: 50px;
}
  </style>
  </script>
</head>

<body>
<div class="title">
<!-- <h2><a href="./allUser.php">所有用户</a></h2> -->
    <div class="user f_r">
      <h2 class=""><?php echo $_SESSION['info']['userName']?></h2>
      <img id="img" src="./images/icon/<?php echo $_SESSION['info']['userIcon']?>" alt="">
      <a href="dologout.php">登出</a>
    </div>
    
  </div>

  <h3 align="center">聊天室</h3>
  <div class="container">
    <!-- 聊天框 分为左右 左边是别人说的 右边是登录的人说的话 -->
    <div class="message">
      <?php
        // 1.引入工具
        include_once "./Tools/phpTools.php";
        // 2.准备sql语句
        $sql = "select m.Id,m.user_id,m.img,m.content,u.userName,u.userIcon  from  chat_message m inner join  chat_user u on m.user_id = u.Id where isDelete = 'no' order by m.Id asc";
        $arr = mysqli_excute_select($sql);
        // var_dump($arr);
        // session_start();
        // var_dump($_SESSION['info']);
        // 3.这时候要判断左右两个聊天框的内容 如何判断
        for($i=0;$i<count($arr);$i++):
          // 判断当前这个遍历出来得userName是不是这个登录的人
          // 这部分div 使用 for 循环生成多个 div
          if($arr[$i]['userName'] != $_SESSION['info']['userName']):
      ?>
          <div class="left clearfix">
            <h2><?php echo $arr[$i]['userName']?></h2>
            <p class='f_l'>
              <?php 
              echo $arr[$i]['content'];?>
            <?php
               if($arr[$i]['img'] != null){
              ?>
                <img class="img" width="500px" src="<?php echo $arr[$i]['img']?>">
                <?php

              }
            ?>
            </p>
          </div>
        <?php else:?>
          <div class="right clearfix">
            <h2><?php echo $_SESSION['info']['userName']?></h2>
            <p class='f_r'><?php echo $arr[$i]['content']?>
              <?php
               if($arr[$i]['img'] != null){
              ?>
                <img class="img" onmouseover="bigger()" onmouseout="smaller()" src="<?php echo $arr[$i]['img']?>">
                <?php

              }
            ?>
            <a class="btn btn-default" href="./doCallback.php?msgId=<?php echo $arr[$i]['Id']?>">撤回</a>
            </p>
          </div>
        <?php endif;?>
      <?php endfor;?>
    </div>
    <form action="./doSendMessage.php" method="POST" enctype="multipart/form-data">
      <div class="control">
        <input type="text" name="messageContent" class='inputBox f_l'>
        <input type="file" name="myfile" class="charge" value="">
        <input type="submit"  class='sendButton f_r' value='发 送'>
      </div>
    </form>
  </div>
</body>

</html>
<!-- 导入JQ -->
<script src="./js/jquery.min-1.72.js"></script>
<script>
  $(function(){
    // 让聊天始终显示最新消息，要给当前的聊天窗口message设置一个scrollTop

    // 声明一个变量，记录message下面的所有子div的高度之和
    var totalHeight = 0;
    // 应该给message这个div下面的所有子div的高度之和
    $('.message>div').each(function(index,ele){
      // height();不包含 padding 只会计算内容的宽高
      // outerHeight()既计算内容也计算padding
      totalHeight += $(ele).outerHeight(true);
    });
    console.log(totalHeight);
    $('.message').scrollTop(totalHeight);
  });
</script>
