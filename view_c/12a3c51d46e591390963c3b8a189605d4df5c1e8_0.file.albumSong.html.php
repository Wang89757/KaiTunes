<?php
/* Smarty version 3.1.30, created on 2018-06-20 05:17:13
  from "D:\chenxu\wamp64\www\migu3.0\view\albumSong.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b29e359a7c218_16528008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a3c51d46e591390963c3b8a189605d4df5c1e8' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\albumSong.html',
      1 => 1529424277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b29e359a7c218_16528008 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="../js/jquery.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/jquery.pagination.js" ><?php echo '</script'; ?>
>
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
<div class="album-index">
    <div class="album-top">
        <div class="album-picture"><img src="../images/<?php echo $_smarty_tpl->tpl_vars['albumSong']->value[3][0]['albumImages'];?>
"></div>
        <div class="album-info">
            <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['albumSong']->value[3][0]['albumname'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['albumSong']->value[3][0]['singername'];?>
</li>
                <li>收录单曲：<span class='bianhong'><?php echo $_smarty_tpl->tpl_vars['albumSong']->value['2']['0']['Total'];?>
</span>&nbsp首</li>
            </ul>
        </div>
    </div>
    <div class="album-songs">
            <h2><span class="bianhong">专辑</span>单曲</h2>
        <div class="album-song">
            <div class="tablebox">
                
                <table>
                <tr><th><input type="checkbox" class="checkAll" name="checked"/></th>
                    <th>歌曲</th><th>歌手</th><th>专辑</th><th></th></tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albumSong']->value[3], 'value');
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
                <div class="fenye">
                    <div class="M-box2">
                    </div>
                <input type="hidden" name='albumID' value="<?php echo $_smarty_tpl->tpl_vars['albumID']->value;?>
">
                </div>
            </div>
        </div>
            <div class='other-album'>
                <h2><span class="bianhong">推荐</span>歌手其它专辑</h2>
                     <div class="d-tab3" > 
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['singerOtherAlbum']->value, 'value');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
                    <li><a href="albumControl.php?albumID=<?php echo $_smarty_tpl->tpl_vars['value']->value['albumID'];?>
&singerID=<?php echo $_smarty_tpl->tpl_vars['value']->value['singerID'];?>
">
                            <img src="../images/<?php echo $_smarty_tpl->tpl_vars['value']->value['albumImages'];?>
" alt="">
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['albumname'];?>
</span>
                    </a></li>
                    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            </div>
    </div>
</div>
<div class="migu-footer"></div>
</body>
</html>
<?php echo '<script'; ?>
>
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
   var Total=parseInt($('.bianhong').text());
       $('.M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:(Math.ceil(Total/10)),
        callback: function (api) {
            var yema=(parseInt(api.getCurrent())-1)*10;
            var singerID=$(':input[name=albumID]').val();
            if(yema==1){
                yema=0;
            }
            singerAjax("albumID",albumID,yema);  
        }
    });
    
    function singerAjax(attr,singerID,yema){
          $.ajax({
                type:"GET",
                url:"../Control/singerFenyeControl.php",   
                data:{attr:attr,albumID:albumID,yema:yema,falg:3}, 
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
    <?php echo '</script'; ?>
><?php }
}
