<?php
/* Smarty version 3.1.30, created on 2018-06-20 02:09:38
  from "D:\chenxu\wamp64\www\migu3.0\view\nologin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b29b762179c84_23404699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e22d8bdde265cc33e2f9da972b4d9d57b2070bc7' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\nologin.html',
      1 => 1529424309,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b29b762179c84_23404699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/jquery.min.js" ></script>
    <link href="../css/index-css.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

</head>
<body>
<div class="migu-header">
        <div class="header-top">
            <div class="logo">
                <img src="../images/logo.png" alt="">
            </div>
            <div class="header-left">
                <ul>
                    <li><a href="indexControl.php">推荐</a></li>
                    <li><a href="singerControl.php?tabSi=0">歌手</a></li>
                    <li><a href="myControl.php">我的</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="user">
                    <div class="login">
                        <span>登录</span>
                        <span>注册</span>
                    </div>
                    <div class="yonghu">
                        <img src="../images/default-head.png" alt="">
                        <span></span>
                        <ul>
                            <li>退出</li>
                        </ul>
                    </div>
                    <!--<span id="ppp">|作者 ></span>

                    <div class="zuozhe">
                        <a href=""><img src="images/default-head.png" alt=""></a>
                        <div class="menu">
                            <ul>
                                <li>姓名：王云凯</li>
                                <li>学号：201526203068</li>
                                <li>手机：18979545800</li>
                                <li>邮箱：18979545800@163.com</li>
                            </ul>
                        </div>
                    </div>-->
                </div>
                <div class="find">
                    <input type="text" name="content" value="听你喜欢">
                    <input class="yun" name="search" type="button" value="搜索">
                </div>
            </div>
        </div>
        <div class="header-footer">
            </div>
</div>
    <div class="nologin" style="height:480px;width:800px;margin:0 auto;">
        <img src="../images/nologin.jpg" style="display: block;padding-top: 80px;margin:0 auto;">
    </div>
    <div style="height:50px;width:100%;background-color: black"></div>
</body>
</html>
<script>
     //点击登录弹出登录框
    $('.user span:first-child').click(function(){
        $('.bukedian', window.parent.document).css('display','block');
        $('.login-zhuce', window.parent.document).css('display','block');
        $('.zhuce-window', window.parent.document).css('display','none');
        $('.login-window', window.parent.document).css('display','block');
        $('.msg', window.parent.document).text("");
        $('.use-pwd input',window.parent.document).val("");
    })
    //点击注册弹出注册框
    $('.user span:last-child').click(function(){
        $('.bukedian', window.parent.document).css('display','block');
        $('.login-zhuce', window.parent.document).css('display','block');
        $('.login-window', window.parent.document).css('display','none');
        $('.zhuce-window', window.parent.document).css('display','block');
        $('.msg', window.parent.document).text("");
        $('.zhuce-input input',window.parent.document).val("");
    })
     //点击退出，用户登出
    $('.yonghu li').click(function(){
        $('input[name=userInf-name]', window.parent.document).val("");
        $('input[name=userInf-ID]', window.parent.document).val("");
        $('.yonghu').css('display','none');
        $('.login').css('display','block'); 
        clearSession();
    })
    
    $(':input[name=search]').click(function(){      
    var name=$("input[name=content]").val();
    if(name==""||name=="听你喜欢"){
        alert("请输入要搜索的信息！");
        return;
    }
    window.location.href="../Control/findResultControl.php?content="+name; 
})
 $(document).keyup(function(event){
            if(event.keyCode ==13){
            $(':input[name=search]').trigger("click");
         }
        });
    </script><?php }
}
