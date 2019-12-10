<?php
/* Smarty version 3.1.30, created on 2018-06-20 04:52:15
  from "D:\chenxu\wamp64\www\migu3.0\view\singer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b29dd7f310fb6_88952191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d894e9509afefd0a47af017ed861693bbd827d8' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\singer.html',
      1 => 1529424316,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b29dd7f310fb6_88952191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/jquery.min.js" ></script>
    <script src="../js/jquery.pagination.js" ></script>
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/pagination.css" rel="stylesheet">
    <link href="../css/index-css.css" rel="stylesheet">
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
                        <span>好久不..</span>
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
<div class="singerPage-contents">
        <div class="singer-fenlei">
            <ul>
                <li id="hong" tabSi="0">全部歌手</li>
                                <li tabSi="1">华语男歌手</li>
                                <li tabSi="2">华语女歌手</li>
                                <li tabSi="3">华语组合</li>
                                <li tabSi="4">日韩男歌手</li>
                                <li tabSi="5">日韩女歌手</li>
                                <li tabSi="6">日韩组合</li>
                                <li tabSi="7">欧美男歌手</li>
                                <li tabSi="8">欧美女歌手</li>
                                <li tabSi="9">欧美组合</li>
                                <li tabSi="10">其它</li>
                
            </ul>
        </div>
        <div class="singer-liebiao">
            <input type="hidden" name='currenTabsi' value="0">
            <div class="singerDisplay">
                <div class="singer-qian">
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=1">
                        <img src="../images/singer1.jpg">
                        <span>薛之谦</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=2">
                        <img src="../images/singer2.jpg">
                        <span>林俊杰</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=3">
                        <img src="../images/singer3.jpg">
                        <span>张学友</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=4">
                        <img src="../images/singer4.jpg">
                        <span>张杰</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=5">
                        <img src="../images/singer5.jpg">
                        <span>毛不易</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=6">
                        <img src="../images/singer6.jpg">
                        <span>刘德华</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=7">
                        <img src="../images/singer7.jpg">
                        <span>陈奕迅</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=8">
                        <img src="../images/singer8.jpg">
                        <span>陈小春</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=9">
                        <img src="../images/singer9.jpg">
                        <span>TFboys</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=10">
                        <img src="../images/singer10.jpg">
                        <span>李荣浩</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=11">
                        <img src="../images/singer11.jpg">
                        <span>莫文蔚</span>
                    </a>
                </div>
                                    <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=12">
                        <img src="../images/singer12.jpg">
                        <span>张惠妹</span>
                    </a>
                </div>
                    

            </div>
            <div class="liebiao-singer">
                <ul>
                                         <li><a href="singerIndexControl.php?singerID=13">五月天</a></li>
                                        <li><a href="singerIndexControl.php?singerID=14">S.H.E</a></li>
                                        <li><a href="singerIndexControl.php?singerID=15">王力宏</a></li>
                                        <li><a href="singerIndexControl.php?singerID=17">田馥甄</a></li>
                                        <li><a href="singerIndexControl.php?singerID=18">邓紫棋</a></li>
                                        <li><a href="singerIndexControl.php?singerID=19">邓丽君</a></li>
                                        <li><a href="singerIndexControl.php?singerID=20">刘若英</a></li>
                                        <li><a href="singerIndexControl.php?singerID=21">张碧晨</a></li>
                                        <li><a href="singerIndexControl.php?singerID=22">那英</a></li>
                                        <li><a href="singerIndexControl.php?singerID=23">韩红</a></li>
                                        <li><a href="singerIndexControl.php?singerID=24">梁静茹</a></li>
                                        <li><a href="singerIndexControl.php?singerID=25">凤凰传奇</a></li>
                         
                </ul>
            </div>
            </div>
            <div class="fenye">
                <div class="M-box2">
                </div>
                <input type="hidden" name='singerTotal' value="80">
            </div>
        </div>
</div>   
<div class="migu-footer">
</div>
</body>
</html>
<script>
   $(function(){
        var userInf_name=$('input[name=userInf-name]', window.parent.document).val();
        if(userInf_name!=""){
            $('.login').css('display','none');
            $('.yonghu').css('display','block');
            $('.yonghu span').text(userInf_name);
        }
    })
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
    function clearSession(){
        $.get("../Control/clearSessionControl.php");
    }
    $('.singerPage-contents .M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:((parseInt($('input[name=singerTotal]').val())-3)/2+1).toString(),
        //callback()： PageCallback
        callback: function (api) {
            var yema=parseInt(api.getCurrent())*2-1;
            var tabsi=$('input[name=currenTabsi]').val();
            if(yema==1){
                yema=0;
            }
            singerAjax(tabsi,yema)  
        }
    });

$('.singer-fenlei li').click(function(){
    var tabsi=$(this).attr('tabSi');
    singerAjax(tabsi,0);
    $('.singerPage-contents .M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:((parseInt($('input[name=singerTotal]').val())-3)/2+1).toString(),
        //callback()： PageCallback
        callback: function (api) {
            var yema=parseInt(api.getCurrent())*2-1;
            var tabsi=$('input[name=currenTabsi]').val();
            if(yema==1){
                yema=0;
            } 
            singerAjax(tabsi,yema)  
        }
    });
})
     function singerAjax(tabsi,yema){
          $.ajax({
                type:"GET",
                url:"../Control/singerFenyeControl.php",   //请求的url地址，即删除商品的控制器
                data:{tabSiID:tabsi,yema:yema,falg:0},  //请求时发送的数据，mid和gid
                dataType:"json",
                success: function(msg){
                  //console.log(msg);
                     $('.singerDisplay').empty();
                     if(yema==0){
                         $('input[name=singerTotal]').val(msg[4][0]['singerTotal']);
                         $('input[name=currenTabsi]').val(tabsi);
                            $('.singerPage-contents .M-box2').pagination({
                            coping: true,
                            homePage: '首页',
                            endPage: '末页',
                            prevContent: '上页',
                            nextContent: '下页',
                            pageCount:((parseInt($('input[name=singerTotal]').val())-3)/2+1).toString(),
                            //callback()： PageCallback
                            callback: function (api) {
                                var yema=parseInt(api.getCurrent())*2-1;
                                var tabsi=$('input[name=currenTabsi]').val();
                                if(yema==1){
                                    yema=0;
                                } 
                                singerAjax(tabsi,yema)  
                            }
                        });
                         var singerqian="<div class='singer-qian'>";
                          $.each(msg[2],function(index){                        
                                  singerqian+=singerqian+"<div class='singer-demo'><a href='singerIndexControl.php?singerID="+msg[2][index]['singerID']+"'><img src='../images/"+msg[2][index]['singerImages']+"'><span>"+msg[2][index]['singername']+"</span></a></div>";
                               })
                              singerqian+="</div><div class='liebiao-singer'><ul>";
                          $.each(msg[3],function(index){                        
                              singerqian+="<li><a href='singerIndexControl.php?singerID="+msg[3][index]['singerID']+"'>"+msg[3][index]['singername']+"</li>";
                               })    
                          singerqian+="</ul></div>";
                        $('.singerDisplay').html(singerqian);
                     }else{
                        liebiaosinger="<div class='liebiao-singer'><ul>";  
                        $.each(msg[0],function(index){
                        liebiaosinger+="<li><a href='singerIndexControl.php?singerID="+msg[0][index]['singerID']+"'>"+msg[0][index]['singername']+"</li>";
                     })
                        liebiaosinger+="</ul></div>";
                     $('.singerDisplay').html(liebiaosinger);
                     }  
              }
            })
     }   
    
    $('.singer-fenlei ul li').click(function(){
        $(this).css({
            'background-color': '#e51373',
            'color':'white'
        }).siblings().css({
            'background-color': 'white',
            'color':'#4f4f4f'
        })
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
