<?php
/* Smarty version 3.1.30, created on 2019-04-20 17:27:14
  from "D:\chenxu\wamp64\www\kaimusic\KaiTunes--src\adminView\album-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cbb56728cd9a6_99830687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e097172e92b38b50cd8e2d5a8942509277f65a' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\kaimusic\\KaiTunes--src\\adminView\\album-index.html',
      1 => 1529563444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb56728cd9a6_99830687 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="item"><div class="title">专辑列表</div>
<div class="title-btn left"><a href="../adminControl/addAlbumControl.php">添加专辑</a></div>
<div class="data-list clear">请输入歌手名：
    <input type="text" name="singername" style="margin-right: 20px;"><input type="button" name="tab-sure" value="确定">
    <table border="1">
		
    </table>
	<div class="pagelist" style="margin-left: 0;width:700px;margin-top: 40px;">
               <div class="M-box2">
                </div>            
            </div>
</div>
</div>
	</div>
    <input type="hidden" name='currenSingerID' value="">
    <input type="hidden" name='albumTotal' value="">
</div>
</body>
</html>
<?php echo '<script'; ?>
>
   
    $(':input[name=tab-sure]').click(function(){
    var singername=$("input[name=singername]").val();
    if(singername==""){
        alert("请输入歌手名！");
        return;
    }
    singerAjax(singername,"-1",0);
})
        function singerAjax(singername,singerID,yema){
          $.ajax({
                type:"GET",
                url:"../adminControl/singerindexfenyeControl.php",  
                data:{singername:singername,singerID:singerID,yema:yema,falg:1},  
                dataType:"json",
                success: function(msg){
                    console.log(msg);
                  for(var key in msg){
                      if(key==1){
                          alert(msg[key]);
                          return;
                      }
                  }
                     $('table').empty();
                     if(yema==0){
                         $('input[name=albumTotal]').val(msg[3][0]['albumTotal']);
                         $('input[name=currenSingerID]').val(msg[4][0]);
                            $('.M-box2').pagination({
                            coping: true,
                            homePage: '首页',
                            endPage: '末页',
                            prevContent: '上页',
                            nextContent: '下页',
                            pageCount:((parseInt(msg[3][0]['albumTotal'])-3)/2+1).toString(),
                            //callback()： PageCallback
                            callback: function (api) {
                                var yema=parseInt(api.getCurrent())*2-1;
                                var singerID=$('input[name=currenSingerID]').val();                               
                                if(yema==1){
                                    yema=0;
                                }
                                singerAjax("测试",singerID,yema);  
                            }
                        });    
                     }
                     var singerqian="<tr><th width='50'>专辑ID</th><th width='150'>专辑名字</th><th width='120'>歌手名字</th><th width='120'>操作</th></tr>";
                     $.each(msg[2],function(index){
                     singerqian+="<tr><td class='center'>"+msg[2][index]['albumID']+"</td><td class='center'>"+msg[2][index]['albumname']+"</td><td class='center'>"+msg[2][index]['singername']+"</td><td class='center'><span class='remove'>删除</span></td></tr>"   
                         })
                     $('table').html(singerqian);
                     }
            })
     }  
     
     $('table').on('click','.remove',function(){
         if(confirm('该操作将删除专辑、以及所属歌曲等，确认删除？')){
              var albumID=$(this).parents('tr').find('td').eq(0).text();   
            $.post('../adminControl/delControl.php',{albumID:albumID,falg:2},function(msg){
                for(var key in msg){
                    if(key==0){
                        $('td:contains('+albumID+')').parents('tr').remove();   
                        alert(msg[key]);
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
