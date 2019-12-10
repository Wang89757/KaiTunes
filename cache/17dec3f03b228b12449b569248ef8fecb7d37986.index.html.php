<?php
/* Smarty version 3.1.30, created on 2018-06-20 04:52:11
  from "D:\chenxu\wamp64\www\migu3.0\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b29dd7bc26e81_12404160',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'af901dfc65ed084494195a7a998f5a6247256b88' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\index.html',
      1 => 1529424352,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b29dd7bc26e81_12404160 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="is_login"><a href="myControl.php">我的</a></li>
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
<div class="migu-contends">
        <div class="lunbotu">
            <div class="lunbotu-picture">
                                <a href="" style="z-index:1"><img src="../images/lunbotu1.jpg" alt=""></a>
                                <a href="" style="z-index:2"><img src="../images/lunbotu2.jpg" alt=""></a>
                                <a href="" style="z-index:3"><img src="../images/lunbotu3.jpg" alt=""></a>
                                <a href="" style="z-index:4"><img src="../images/lunbotu4.jpg" alt=""></a>
                             
            </div>
            <div class="lunbotu-buttom">
                <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                     
                </ul>
            </div>
            <div id="to-left"></div>
            <div id="to-right"></div>
        </div>
    <div class="tuijian">
        <div class="tuijian-song">
            <div class="biaoti">
                <h2><span class="bianhong">推荐</span>音乐</h2>
                <div class="change-songs">
                    换一批
                </div>
            </div>
            <div class="songs">
                
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommendsong']->value[0], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div class="song">
                    <span class="song-name"><?php echo $_smarty_tpl->tpl_vars['value']->value['songname'];?>
</span><span class="time"><?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
</span>
                    <div class="caozuo" singerImages="<?php echo $_smarty_tpl->tpl_vars['value']->value['singerImages'];?>
" singername="<?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
" songname="<?php echo $_smarty_tpl->tpl_vars['value']->value['songname'];?>
" songID="<?php echo $_smarty_tpl->tpl_vars['value']->value['songID'];?>
">
                        <span class="bofang" >></span>
                        <span class="addsong">+</span>
                    </div>
                </div>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
                 
            </div>
        </div>
        <div class="tuijian-singer">
            
            <div class="biaoti">
                <h2><span class="bianhong">推荐</span>歌手</h2>
                <div class="change-singers">
                    换一批
                </div>
            </div>
            <div class="singerplay">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommendsinger']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="singers" style="z-index:<?php echo array_search($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['recommendsinger']->value);?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'value1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->value) {
?>
                <div class="singer">
                    <a href="singerIndexControl.php?singerID=<?php echo $_smarty_tpl->tpl_vars['value1']->value['singerID'];?>
">
                        <img src="../images/<?php echo $_smarty_tpl->tpl_vars['value1']->value['singerImages'];?>
" alt="">
                        <div class="hui"></div>
                        <span class="singer-name"><?php echo $_smarty_tpl->tpl_vars['value1']->value['singername'];?>
</span>
                    </a>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="singer-buttom">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommendsinger']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <li></li>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
                </ul>
            </div>
            
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
    $(function(){
        $('.lunbotu ul li').eq(0).css({//使得加载后当前显示为第一个
            "width":"13px",
            "height":"13px"
        })
        $('#to-left,#to-right').hide();//加载时先隐藏左右切换按钮
       // $('.singers').eq(1).css('display','none');
        //$('.singers').eq(2).css('display','none');
    })////加载时初始化
    var t;
    var index=0;//记录当前图片显示的序号，序号等于图片在索引中的位置
    t=setInterval(play,3000);//设置定时器自动播放
    /*
    切换图片时要做出的改变*/
    function change(){
        $('.lunbotu-buttom ul li').eq(index).css({//.eq(index)可选出当前小原点对象
            "width":"13px",
            "height":"13px"
        }).siblings().css({//sibling()函数可选出除当前对象外的所有其他兄弟元素
            "width":"8px",
            "height":"8px"
        });
        $('.lunbotu-picture a').eq(index).fadeIn(1000).siblings().fadeOut(1000);//fadeIn()淡入fadeOut()淡出效果
    }
    /*
    自动播放函数*/
    function play(){
        index++;
        if(index>3){
            index=0;
        }
        change();
    }
    /*
    点击图片向左切换*/
    $('#to-left').click(function(){
        index--;
        if(index<0){
            index=3;
        }
        clearInterval(t);//点击切换时先清除定时器
        change();
        t=setInterval(play,3000);//完成后再恢复
    })
    /*
     点击图片向右切换*/
    $('#to-right').click(function(){
        index++;
        if(index>3){
            index=0;
        }
        clearInterval(t);
        change();
        t=setInterval(play,3000);
    })
    /*
     将鼠标放到原点上时切换图片*/
    $('.lunbotu-buttom ul li').hover(function(){
        if($(this).index()==index){//如果点击的是当前显示的原点，则不做变化直接返回
            return null;
        }else{
            index=$(this).index();//index()函数可获取当前对象在数组中的索引
            clearInterval(t);
            change();
            t=setInterval(play,3000);
        }
    })
    /*
    * 鼠标移上去时，将自动播放清除
    * 移下去时，重新设置定时器自动播放*/
    $('.lunbotu').hover(function(){
        $('#to-left,#to-right').fadeIn(500);
       // clearInterval(t);
    },function(){
        $('#to-left,#to-right').fadeOut(500);
        //t=setInterval(play,3000);
    })
    /*
    * */
    $('#to-left,#to-right').hover(function(){
        $(this).css({
            "background-color":"#e51373",
            "opacity":"0.4"
        })
    },function(){
        $(this).css({
            "background-color":"white",
            "opacity":"0.2"
        })
    })
    //播放歌曲
    $(document).on("click",".bofang",function(){
        var songinf=Array();
        songinf['songname']=$(this).parent().attr('songname');
        songinf['singername']=$(this).parent().attr('singername');
        songinf['singerImages']=$(this).parent().attr('singerImages');
        songinf['songPath']=songinf['singername']+" - "+songinf['songname'];
        parent.fu(songinf);
    })

   //添加喜欢的歌曲
   $(document).on("click",".addsong",function(){
       if($('input[name=userInf-ID]', window.parent.document).val()==""){
           alert("请先登录！");
       }else{
           //alert($('input[name=userInf-ID]', window.parent.document).val());
           var userID=$('input[name=userInf-ID]', window.parent.document).val();
           var songID=$(this).parent().attr('songID');
           $.post("../Control/SongFunctionControl.php",{userID:userID,songID:songID,flag:"0"},function(msg){             
               for(var key in msg){
                         alert(msg[key]);    
               }
           },"json")
       }
   })
$(document).on('click','.checkAll',function(){
       if(!$(this).is(':checked')){
           $('.tablebox :checkbox').prop("checked",false);
       }else{
           $('.tablebox :checkbox').prop("checked",true);
       }
   })
   $(document).on('click','.likeAll',function(){
       var hasCheck=0;
       var songID;
       var userID;
       var data="";
        if($('input[name=userInf-ID]', window.parent.document).val()==""){
           alert("请先登录！");
       }else{
           userID=$('input[name=userInf-ID]', window.parent.document).val();
           var songIDs=new Array(0);
           $.each($('td .check'),function(index){
               if($(this).is(':checked')){
                   hasCheck=1;
                   songID=$(this).parents('tr').find('.chuli').attr('songID');
                   songIDs[songIDs.length]=songID;
               }
           })
           if(hasCheck==0){
               alert('请先选中歌曲');
           }else{
               $.post("../Control/SongFunctionControl.php",{userID:userID,songIDs:songIDs,flag:"1"},function(msg){
                   alert(msg[0]);
               },"json")
           }
       }
   })
    //歌手推荐原点切换
    $('.singer-buttom').on("mouseover","li",function(){
         var on=$(this).index();
        $(this).css('background-color','#e51373').siblings().css('background-color','#a1a1a1');
        $('.singers').eq(2-on).fadeIn(500).siblings().fadeOut(500);
    })

    //换一批歌曲
    $('.change-songs').click(function(){
        var rnd_offset=rnd(0,15);
        $.get("../Control/recommendControl.php",{leixing:"song",offset:rnd_offset},function(msg){
            $('.songs').empty();
            var html="";
            for(var key in msg){
                html+="<div class='song'><span class='song-name'>"+msg[key]['songname']+"</span><span class='time'>"+msg[key]['singername']+"</span><div class='caozuo' singerImages='"+msg[key]['singerImages']+"' singername='"+msg[key]['singername']+"' songname='"+msg[key]['songname']+"' songID='"+msg[key]['songID']+"'><span class='bofang'>></span><span class='addsong'>+</span></div></div>";  
            }   
            $('.songs').append(html);
           },"json")     
    })
    //换一批歌手
    $('.change-singers').click(function(){
        var rnd_offset=rnd(0,9);
        $.get("../Control/recommendControl.php",{leixing:"singer",offset:rnd_offset},function(msg){
            $('.singerplay').empty();
            $('.singer-buttom').empty();
            var htmlsinger="";
            var htmlsinger2="";
            for(var key in msg){  
            htmlsinger+="<div class='singers' style='z-index: "+key+"'>";
               for(var key1 in msg[key]){
                htmlsinger+="<div class='singer'><a href='singerIndexControl.php?singerID="+msg[key][key1]['singerID']+"'><img src='../images/"+msg[key][key1]['singerImages']+"' alt=''><div class='hui'></div><span class='singer-name'>"+msg[key][key1]['singername']+"</span></a></div>"+"\n";
               }              
            htmlsinger+="</div>";
            } 
            htmlsinger+="</div>";
            htmlsinger2+="<ul>"
            for(var key in msg){ 
                htmlsinger2+="<li></li>";
            }
            htmlsinger+="</ul>";
            $('.singerplay').append(htmlsinger);
            $('.singer-buttom').append(htmlsinger2);
           },"json")     
    })
    function rnd(n,m){
        var random = Math.floor(Math.random()*(m-n+1)+n);
        return random;
    }
 $(document).keyup(function(event){
            if(event.keyCode ==13){
            $(':input[name=search]').trigger("click");
         }
        });
    $(':input[name=search]').click(function(){      
    var name=$("input[name=content]").val();
    if(name==""||name=="听你喜欢"){
        alert("请输入要搜索的信息！");
        return;
    }
    window.location.href="../Control/findResultControl.php?content="+name; 
})

</script><?php }
}
