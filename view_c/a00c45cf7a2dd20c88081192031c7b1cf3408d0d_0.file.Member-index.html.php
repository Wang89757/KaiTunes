<?php
/* Smarty version 3.1.30, created on 2018-06-21 06:43:44
  from "D:\chenxu\wamp64\www\migu3.0\adminView\Member-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2b49203609a3_64773099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00c45cf7a2dd20c88081192031c7b1cf3408d0d' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\adminView\\Member-index.html',
      1 => 1529563419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b49203609a3_64773099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>KaiTunes后台</title>
	<link href="../admincss/admin.css" rel="stylesheet" />
	<?php echo '<script'; ?>
 src="../adminjs/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../adminjs/jquery.pagination.js" ><?php echo '</script'; ?>
>
        <link href="../admincss/pagination.css" rel="stylesheet">
</head>
<body>
<div id="top">
	<h1 class="left">KaiTunes音乐 后台管理系统</h1>
	<ul class="right">
		<li>欢迎您：<?php echo $_SESSION['username'];?>
</li>
		<li>|</li><li><a href="../Control/playMusicControl.php" target="_blank">前台首页</a></li>
		<li>|</li><li><a href="../adminControl/nologin.php">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="../adminControl/adminLoginControl.php" id="Index_index">后台首页</a></li>
			<li><a href="../adminControl/addSingerControl.php" id="singer_add">歌手添加</a></li>
                        <li><a href="../adminControl/addAlbumControl.php" id="album_add">专辑添加</a></li>
                        <li><a href="../adminControl/addSongControl.php" id="song_add">歌曲添加</a></li>
                        <li><a href="../adminControl/singerIndexControl.php?tabSi=0" id="singer_index">歌手列表</a></li>
			<li><a href="../adminControl/album-indexControl.php" id="album-index">专辑列表</a></li>
                       	<li><a href="../adminControl/song-findControl.php" id="song-find">歌曲搜索</a></li>
			<li><a href="../adminControl/memberControl.php" id="Member_index">会员管理</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">会员列表</div>
<div class="data-list clear">
      
	<table border="1">    
		<tr><td>用户ID</td><td>用户昵称</td><td>出生日期</td><td>个性签名</td><td>操作</td></tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['memberInf']->value[2], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<tr><td class="userID"><?php echo $_smarty_tpl->tpl_vars['value']->value['userID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['shengri'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['qianming'];?>
</td><td><span class='remove'>删除</span></td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
            
                </table>
      
	<div class="pagelist" style="margin-left: 0;width:700px;margin-top: 40px;">
                <div class="M-box2">
                </div>            
            </div>
</div>
</div>
	</div>
    <input type="hidden" name='userTotal' value="<?php echo $_smarty_tpl->tpl_vars['memberInf']->value[3][0]['userTotal'];?>
">
</div>
</body>
</html>
<?php echo '<script'; ?>
>
     $('.M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:((parseInt($('input[name=userTotal]').val())-3)/2+1).toString(),
        callback: function (api) {
            var yema=parseInt(api.getCurrent())*2-1;
            if(yema==1){
                yema=0;
            }
            singerAjax(yema);  
        }
    });
    function singerAjax(yema){
          $.ajax({
                type:"GET",
                url:"../adminControl/singerindexfenyeControl.php",   
                data:{yema:yema,falg:2}, 
                dataType:"json",
                success: function(msg){
                     $('table').empty();
                     var singerqian="<tr><td>用户ID</td><td>用户昵称</td><td>出生日期</td><td>个性签名</td><td>操作</td></tr>";
                     $.each(msg[2],function(index){
                        singerqian+="<tr><td class='userID'>"+msg[2][index]['userID']+"</td><td>"+msg[2][index]['username']+"</td><td>"+msg[2][index]['shengri']+"</td><td>"+msg[2][index]['qianming']+"</td><td><span class='remove'>删除</span></td></tr>"
                        })
                     $('table').html(singerqian);
                     }
            })
     }  
    $('table').on('click','.remove',function(){
        if(confirm("确认要删除吗？")){
            var userID=$(this).parents('tr').find('.userID').text();
            $.post('../adminControl/delControl.php',{userID:userID,falg:0},function(msg){
                for(var key in msg){
                    if(key==0){
                        $('.userID:contains('+userID+')').parents('tr').remove();
                    }else{
                        alert(msg[key]);
                    }
                }
            },'json')
        }
    })
    
    <?php echo '</script'; ?>
><?php }
}
