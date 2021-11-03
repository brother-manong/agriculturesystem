<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="lib/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <style>
    .input-group {
      margin: 20px 0;
    }

    .form-group {
      display: flex;
    }

    .form-group>* {
      flex: 1;
      margin: 10px;
    }

    table {
      background-color: white;
    }

    a {
      text-decoration: none !important;
    }

    table {
      font-size: 25px;
    }

    td {
      vertical-align: middle !important;
    }

    tr td:last-child {
      text-align: center;
    }

    img {
      width: 140px !important;
    }
  </style>
</head>

<body class='bg-success'>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">用户管理--
          <span>首页</span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="./chat.php">首页</a>
          </li>
          <li>
            <a href="./register.html">新增</a>
          </li>
        </ul>
        <form class="navbar-form navbar-left" style="margin:0" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">搜索</button>
        </form>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div class="container">

    <table class="table table-bordered  table-striped">
      <thead>
        <tr>
          <th width='15%'>序号</th>
          <th width='15%'>姓名</th>
          <th width='15%'>密码</th>
          <th width='55%'>头像</th>
        </tr>
      </thead>
        <tbody>
            <?php
                header("contentg-type:text/html;charset=utf-8");
                // 1.引入php操作数据库的代码文件
                include "./Tools/phpTools.php";
                // 2.sql语句
                $sql = "select * from chat_user";
                // 执行sql
                $arr = mysqli_excute_select($sql);
                // var_dump($arr);
                for($i=0;$i<count($arr);$i++):
                ?>
                <tr>
                    <td><?php echo $arr[$i]['Id']?></td>
                    <td><?php echo $arr[$i]['userName']?></td>
                    <td><?php echo $arr[$i]['userPass']?></td>
                    <td>
                        <img src="./images/icon/<?php echo $arr[$i]['userIcon']?>" alt="">
                    </td>
                </tr>
                <?php endfor;?>
        </tbody>
    </table>
  </div>
</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/js/bootstrap.min.js"></script>