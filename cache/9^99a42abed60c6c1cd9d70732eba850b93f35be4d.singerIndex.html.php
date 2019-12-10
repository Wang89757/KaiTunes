<?php
/* Smarty version 3.1.30, created on 2018-06-18 13:21:28
  from "D:\chenxu\wamp64\www\migu3.0\view\singerIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b27b1d8431012_72364471',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'de15ca9f7265ced78ce9cb80389e20efebd5d5d7' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\singerIndex.html',
      1 => 1529316322,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b27b1d8431012_72364471 (Smarty_Internal_Template $_smarty_tpl) {
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
               <li><a id="on" href="indexControl.php">推荐</a></li>
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
                    <input type="text" value="听你喜欢">
                    <input class="yun" type="button" value="搜索">
                </div>
            </div>
    </div>
    <div class="header-footer">
    </div>
</div>
<div class="singer-index">
    <div class="singer-top">
        <div class="singer-picture"><img src="../images/singer9.jpg"></div>
        <div class="singer-info">
            <ul>
                <li>TFboys</li>
                <li>单曲：<span class="bianhong">0</span>&nbsp&nbsp&nbsp专辑：<span class="bianhong">0</span></li>
                <li><p><span>歌手简介：</span></p></li>
            </ul>
        </div>
    </div>
    <div class="singer-song">
        <div class="tab">
            <ul>
                <li class="tab1"><span>单曲</span></li><li class="tab2"><span>专辑</span></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="d-tab1">
                <div class="tablebox">
                    
                <table>
                <tr><th><input type="checkbox" class="checkAll" name="checked"/></th>
                    <th>歌曲</th><th>歌手</th><th>专辑</th><th></th></tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['singerSong']->value[3], 'value');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
                <tr><td><input type="checkbox" class="check" name="checked"/>&nbsp&nbsp<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['songname'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['albumname'];?>
</td><td>
                        <div class="chuli" singerImages="<?php echo $_smarty_tpl->tpl_vars['value']->value['singerImages'];?>
" singername="<?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
" songname="<?php echo $_smarty_tpl->tpl_vars['value']->value['songname'];?>
" songID="<?php echo $_smarty_tpl->tpl_vars['value']->value['songID'];?>
">
                            <span class="bofang" >></span>
                            <span class="addsong">+</span>
                        </div></td></tr>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
              
                </table>
                    
                <div class="piliangCaozuo">
                    <div><input type="checkbox" class="checkAll" name="checked"/>&nbsp&nbsp<span class="checkAll">全选</span></div>
                    <div class="likeAll"><span>+</span>&nbsp&nbsp收藏</div>
                </div>
               </div>
                <div class="fenye">
                    <div class="M-box2">
                    </div>
                <input type="hidden" name='singerID' value="9">
                </div>
            </div>
            <div class="d-tab2">
                <div class="albumbox">
                <ul>
                    
                </ul>
                </div>
               <div class="fenye">
                <div class="M-box2">
                </div>
               </div>
            </div>
        </div>
    </div>
    
</div>
<div class="migu-footer"></div>
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
    /*tab跳转*/
    $('.tab li').click(function(){
            $(this).css({
                'border-bottom':'2px solid #e51373',
                'color':'#e51373'
            }).siblings().css({
                'border-bottom':'none',
                'color':'#4B4B4B'
            });
            var a=$(this).attr('class');
            var b=$(this).siblings().attr('class');
            $('.d-'+b).css('display','none');
            $('.d-'+a).css('display','block');
    })
    //播放歌曲
    $(document).on('click','.bofang',function(){
        var songinf=Array();
        songinf['songname']=$(this).parent().attr('songname');
        songinf['singername']=$(this).parent().attr('singername');
        songinf['singerImages']=$(this).parent().attr('singerImages');
        songinf['songPath']=songinf['singername']+" - "+songinf['songname'];
        parent.fu(songinf);
    })
     //添加喜欢的歌曲
     $(document).on('click','.addsong',function(){
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
   var Total=parseInt(($('.singer-info .bianhong').eq(0).text()));
   var albumTotal=parseInt(($('.singer-info .bianhong').eq(1).text()));
       $('.d-tab1 .M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:(Math.ceil(Total/10)),
        callback: function (api) {
            var yema=(parseInt(api.getCurrent())-1)*10;
            var singerID=$(':input[name=singerID]').val();
            if(yema==1){
                yema=0;
            }
            singerAjax("singerID",singerID,yema);  
        }
    });
$('.d-tab2 .M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:(Math.ceil(albumTotal/10)),
        callback: function (api) {
            var yema=(parseInt(api.getCurrent())-1)*10;
            var singerID=$(':input[name=singerID]').val();
            if(yema==1){
                yema=0;
            }
            albumAjax(singerID,yema);  
        }
    });
    function albumAjax(singerID,yema){
          $.ajax({
                type:"GET",
                url:"../Control/singerFenyeControl.php",   
                data:{singerID:singerID,yema:yema,falg:2}, 
                dataType:"json",
                success: function(msg){
                var xuhao=parseInt(yema)+1;
                     $('.albumbox ul').empty();              
                        liebiaosinger="";  
                        $.each(msg[3],function(index){
                            liebiaosinger+="<li><a href='albumControl.php?albumID="+msg[3][index]['albumID']+"&singerID="+msg[3][index]['singerID']+"'><img src='../images/"+msg[3][index]['albumImages']+"'><span>"+msg[3][index]['albumname']+"</span></a></li>";
                    })
                     $('.albumbox ul').html(liebiaosinger);  
                 }
              })
     }    
    function singerAjax(attr,singerID,yema){
          $.ajax({
                type:"GET",
                url:"../Control/singerFenyeControl.php",   
                data:{attr:attr,singerID:singerID,yema:yema,falg:1}, 
                dataType:"json",
                success: function(msg){
                var xuhao=parseInt(yema)+1;
                     $('table').empty();              
                        liebiaosinger="<tr><th><input type='checkbox' class='checkAll'name='checked'/></th><th>歌曲</th><th>歌手</th><th>专辑</th><th></th></tr>";  
                        $.each(msg[3],function(index){
                            liebiaosinger+="<tr><td><input type='checkbox' class='check' name='checked'/>&nbsp&nbsp"+xuhao+++"</td><td>"+msg[3][index]['songname']+"</td><td>"+msg[3][index]['singername']+"</td><td>"+msg[3][index]['albumname']+"</td>\n\
                    <td><div class='chuli' singerImages='"+msg[3][index]['singerImages']+"' singername='"+msg[3][index]['singername']+"' songname='"+msg[3][index]['songname']+"'songID='"+msg[3][index]['songID']+"'><span class='bofang' >></span><span class='addsong'>+</span></div></td></tr>";
                        })
                     $('table').html(liebiaosinger);  
                 }
              })
     }   
</script><?php }
}
