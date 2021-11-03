<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0023)http://expert.nywlw.cn/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>农业专家系统</title>
    <script type="text/javascript" src="./css/jquery1.9.0.min.js.下载"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./css/layer.js.下载"></script>
    <link rel="stylesheet" href="./css/layer.css" id="layuicss-skinlayercss">
    
    <link href="./css/index.css" rel="stylesheet">

    <style>
        button {
            border: none;
        }

        .header .logoIcon {
            height: 40px;
            padding-top: 10px;
            float: left;
        }
        #footer{
    background-color: #FFFFFF;
    margin: 1px 0px 0px 0px;
    clear: both;
    position: relative;
    padding: 1px 0px 1px 0px;
    bottom: -40px;
}
#black{
    color: black;
    }
    #input{
        background-color: skyblue;
        width: 50px;
        margin-left: 20px;
    }
    </style>
</head>
<body >
    <input type="hidden" value="Index" id="pagecode">
    <div class="header">
        <img class="logoIcon" src="./css/logo.png">
        <h3>&nbsp;农业专家系统</h3>
        <div class="h_right">
                
        </div>
    </div>
    <div class="menu">
        <div class="nav">
            <a href="#" id="Index" class="nav_a current">首页</a>
            <a href="binghai/shouye.php" title="病害信息" target="_blank"  class="nav_a" target="_blank">病害信息</a>
            <a href="chonghai/shouye.php" title="虫害信息" target="_blank" class="nav_a">虫害信息</a>
            <a href="nongzuowu/shouye.php" title="农作物信息" target="_blank" class="nav_a">农作物信息</a>
            <a href="tuili/index.php" title="病害虫诊断" target="_blank" class="nav_a">病害虫诊断</a>
            <a href="chatroom/login.html" title="在线聊天" target="_blank" class="nav_a">在线聊天</a>
        </div>
    </div>
    
<div class="banner">
    <div class="qxmsg" style="display: none;">
        
        <div id="gongao">
            <div id="scroll_div">
                    
                <div id="scroll_end"></div>
            </div>
        </div>
    </div>
</div>
<div class="content">

    <div class="content900">
                <div class="content880">
                    <div class="c_title">
                        
                        <span id="black">参考资料</span>
                        <a target="_blank" href="#">查看更多》</a>
                    </div>
                    <div class="c_box">
                        <ul>
                                    <li>
                                        <a target="_blank" href="http://expert.nywlw.cn/Expert/zskContent?eid=152488550610935755">
                                            <div class="c_l_box">
                                                <p class="art_title"><a href="./ziliao/cankao/番茄生长趋势.htm">番茄生长趋势</a></p>
                                                <p class="art_type">
                                                    
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://expert.nywlw.cn/Expert/zskContent?eid=152488557451531638">
                                            <div class="c_l_box">
                                                <p class="art_title"><a href="./cankao/番茄生长趋势.docx">下载</a></p>
                                                <p class="art_type">
                                                    
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                     <li>
                                        <a target="_blank" href="http://expert.nywlw.cn/Expert/zskContent?eid=152488550610935755">
                                            <div class="c_l_box">
                                                <p class="art_title"><a href="./cankao/番茄虫害整理.htm">番茄虫害整理</a></p>
                                                <p class="art_type">
                                                    
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://expert.nywlw.cn/Expert/zskContent?eid=152488557451531638">
                                            <div class="c_l_box">
                                                <p class="art_title"><a href="./cankao/番茄虫害整理.docx">下载</a></p>
                                                <p class="art_type">
                                                    
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                        
                        </ul>
                    </div>

                </div>
                                   <!--在线留言-->
    <div class="cr300">
        <div class="content300">
            <div class="c_title">
                <span id="black">在线留言</span>
                <a href=""></a>
            </div>
            <div class="sys_right">
                <form action="messageboard/dopost.php" method="POST" target="nm_iframe" name="form1">
                <label for="name">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</label>
                <input type="text" name="name" id="name" placeholder="请输入您的姓名...">
                <label for="phone">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:</label>
                <input type="text" name="phone" id="phone" placeholder="请输入您的电话号码..."  onkeyup="this.value=this.value.replace(/\D/g,'')">
                <label for="">留言内容:</label>
                <textarea placeholder="请输入留言内容..." id="content" name="content"></textarea>
                <label></label>
                 <input id="input" type="submit" name=""  value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="input" type="reset" name="" value="重置">
                <div class=""></div>
                </form>
                <iframe id="id_frame" name="nm_iframe" style="display: none;"></iframe>
            </div>
            <div>
                <span>所有留言：</span>
                <iframe src="messageboard/selete.php" width="300px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
             
    

    <div class="clear"></div>
</div>
<div class="need_detail" style="display: none; min-height: 500px; height: auto;" id="showNeedDetail">
</div>
<div class="videodetail" style="display: none; min-height: 540px; height: auto;" id="videoDetail">
</div>


    </div>
 <!--footer-->
    <div id="footer" class="footer">
        <div>
            <a href="http://expert.nywlw.cn/" id="Index" class="nav_a current">首页</a>
            <a href="binghai/shouye.php" title="病害信息" target="_blank"  class="nav_a">病害信息</a>
            <a href="chonghai/shouye.php" title="虫害信息" target="_blank" class="nav_a">虫害信息</a>
            <a href="nongzuowu/shouye.php" title="农作物信息" target="_blank" class="nav_a">农作物信息</a>
            <a href="tuili/index.php" title="病害虫诊断" target="_blank" class="nav_a">病害虫诊断</a>
            <a href="chatroom/login.html" title="在线聊天" target="_blank" class="nav_a">在线聊天</a>

        </div>
        <p>建设单位：成农院有限公司 技术支持：成农院有限公司</p>
    </div>
    <script type="text/javascript" src="./css/common.js.下载"></script>
    <script src="./css/userFavourite.js.下载"></script>  
    <script src="./css/index.js.下载"></script>
    <script src="./css/videolist.js.下载"></script>




</body></html>