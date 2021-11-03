
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1786038_m62pqneyrzf.css">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        html {
            height: 100%;
        }
        
        body {
            height: 100%;
            font-family: JetBrains Mono Medium;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-color: #0e92b3; */
            background: url('image/btn.jpg') no-repeat;
            background-size: 100% 100%;
        }
        
        .form-wrapper {
            width: 300px;
            background-color: rgba(41, 45, 62, .8);
            color: #fff;
            border-radius: 2px;
            padding: 50px;
        }
        
        .form-wrapper .header {
            text-align: center;
            font-size: 35px;
            text-transform: uppercase;
            line-height: 100px;
        }
        
        .form-wrapper .input-wrapper input {
            background-color: rgb(41, 45, 62);
            border: 0;
            width: 100%;
            text-align: center;
            font-size: 15px;
            color: #fff;
            outline: none;
        }
        
        .form-wrapper .input-wrapper input::placeholder {
            text-transform: uppercase;
        }
        
        .form-wrapper .input-wrapper .border-wrapper {
            background-image: linear-gradient(to right, #e8198b, #0eb4dd);
            width: 100%;
            height: 50px;
            margin-bottom: 20px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-wrapper .input-wrapper .border-wrapper .border-item {
            height: calc(100% - 4px);
            width: calc(100% - 4px);
            border-radius: 30px;
        }
        
        .form-wrapper .action {
            display: flex;
            justify-content: center;

        }
        
        .form-wrapper .action .btn {
            width: 60%;
            text-transform: uppercase;
            border: 2px solid #0e92b3;
            text-align: center;
            line-height: 50px;
            border-radius: 30px;
            cursor: pointer;
            background-image: linear-gradient(120deg, #84fab0 0%, #9c2895 100%);
        }
        
        .form-wrapper .action .btn:hover {
            background-image: linear-gradient(120deg, #84fab0 0%, #9c2895 100%);
        }
        
        .form-wrapper .icon-wrapper {
            text-align: center;
            width: 60%;
            margin: 0 auto;
            margin-top: 20px;
            border-top: 1px dashed rgb(146, 146, 146);
            padding: 20px;
        }
        
        .form-wrapper .icon-wrapper i {
            font-size: 20px;
            color: rgb(187, 187, 187);
            cursor: pointer;
            border: 1px solid #fff;
            padding: 5px;
            border-radius: 20px;
        }
        
        .form-wrapper .icon-wrapper i:hover {
            background-color: #0e92b3;
        }
    </style>
</head>
 
<body>
    <form name="form1" action="deal.php" method="post" >
    <div class="form-wrapper">
        <div class="header">
           管理员登录
        </div>
        <div class="input-wrapper">
            <div class="border-wrapper">
                <input type="text" name="uname" onkeyup="this.value=this.value.replace(/[^\w_]/g,'');" maxlength="40" placeholder="用户名"class="border-item" autocomplete="off">
            </div>
            <div class="border-wrapper">
                <input type="password" name="upass" onkeyup="this.value=this.value.replace(/[^\w_]/g,'');" maxlength="20" placeholder="密码" class="border-item" autocomplete="off">
            </div>
        </div>
       <div class="action">
            <table width="100%">
                <tr>
                    <td align="center"><input type="submit" name="" value="登录" class="btn" ></td>
                    <td align="center"><input type="reset" name="" value="重置" class="btn" ></td>
                </tr>

            </table>
        </div>
        <h3 align="center"><a href="register.php" >注册？请点击这里</a></h3>
    </div>
</form>
</body>
 
</html>
