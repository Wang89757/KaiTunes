<?php
/* Smarty version 3.1.30, created on 2019-04-09 16:24:16
  from "D:\chenxu\wamp64\www\kaimusic\KaiTunes--src\adminView\addSinger.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cacc73047ebb3_50153618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bdf864d5728cc4ba581384fcc2360135aabad7' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\kaimusic\\KaiTunes--src\\adminView\\addSinger.html',
      1 => 1529563486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cacc73047ebb3_50153618 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="item"><div class="title">歌手添加</div>
<div class="data-edit clear">
	<form method="post" enctype="multipart/form-data" onsubmit="return checkfrom(this)" >
	<input type="hidden" value="16" name="cid" />
	<table>
            <tr><th>歌手标签：</th><td>
                <select name="cid">
		<option value="0">全部</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tabsi']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['tabsiID'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['value']->value['tabname'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
                </td><th class="msg" style="color:red;font-size: 1.5em;"></th></tr>
		<tr><th>歌手姓名：</th><td><input type="text" name="gname" /></td><th class="msg" style="color:red;font-size: 1.5em;"></th></tr>		
		<tr><th>歌手图片：</th><td><input type="file" name="thumb" class="file" /></td><th class="msg" style="color:red;font-size: 1.5em;"></th></tr>
		<tr><th>首页推荐：</th><td><select name="is_best"><option value="0">否</option><option value="1">是</option></select></td></tr>
		<tr><th>歌手介绍：</th><td><textarea name="description"></textarea></td></tr>
				<tr class="tr_btn center">
			<td colspan="2"><input type="submit" name='sure' value="确定" /><input type="reset" value="重置" /></td>
		</tr>
	</table>
	</form>
</div></div>
	</div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    
    function checkfrom(form){
        if($('select :selected').val()==0||$(':input[name=gname]').val()==""||$(':input[name=thumb]').val()==""){
           if($('select :selected').val()==0){
               $('.msg').eq(0).text("*");           
           }else{
               $('.msg').eq(0).text("");  
           }
           if($(':input[name=gname]').val()==""){
               $('.msg').eq(1).text("*");           
           }else{
                $('.msg').eq(1).text("");   
           }
           if($(':input[name=thumb]').val()==""){
               $('.msg').eq(2).text("*");          
           }else{
                $('.msg').eq(2).text("");  
           }
           return false;
        }else
           return true;
    }
    <?php echo '</script'; ?>
>
<?php }
}
