<?php
/* Smarty version 3.1.30, created on 2018-06-21 06:45:07
  from "D:\chenxu\wamp64\www\migu3.0\adminView\song-find.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2b49738af315_10817553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55642010d94b55734e45a98cd11ed5fbe072bd93' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\adminView\\song-find.html',
      1 => 1529563450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b49738af315_10817553 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="item"><div class="title">歌曲搜索</div>
<div class="title-btn left"><a href="../adminControl/addSongControl.php">添加歌曲</a></div>
<div class="data-list clear">请输入查找关键字：
    <input type="text" name="name" style="margin-right: 20px;"><input type="button" name="sure" value="确定">
    <table border="1">
		
    </table>
	<div class="pagelist" style="margin-left: 0;width:700px;margin-top: 40px;">
               <div class="M-box2">
                </div>            
            </div>
</div>
</div>
	</div>
    <input type="hidden" name='findTotal' value="">
    <input type="hidden" name='currenName' value="">
</div>
</body>
</html>
<?php echo '<script'; ?>
>
   
    $(':input[name=sure]').click(function(){
        
    var name=$("input[name=name]").val();
    if(name==""){
        alert("请输入要搜索的信息！");
        return;
    }
    findAjax(name,0);
    
})
        function findAjax(name,yema){
          $.ajax({
                type:"GET",
                url:"../adminControl/singerindexfenyeControl.php",  
                data:{name:name,yema:yema,falg:3},  
                dataType:"json",
                success: function(msg){
                  for(var key in msg){
                      if(key==1){
                          alert(msg[key]);
                          return;
                      }
                  }
                     $('table').empty();
                     if(yema==0){
                         $('input[name=Total]').val(msg[2][0]['Total']);
                         $('input[name=currenName]').val(name);
                            $('.M-box2').pagination({
                            coping: true,
                            homePage: '首页',
                            endPage: '末页',
                            prevContent: '上页',
                            nextContent: '下页',
                            pageCount:((parseInt(msg[2][0]['Total'])-3)/2+1).toString(),
                            callback: function (api) {
                                var yema=parseInt(api.getCurrent())*2-1;
                                var name=$('input[name=currenName]').val();                               
                                if(yema==1){
                                    yema=0;
                                }
                                findAjax(name,yema);  
                            }
                        });    
                     }
                     var singerqian="<tr><th width='50'>歌曲ID</th><th width='150'>歌曲名字</th><th width='120'>歌手名字</th><th width='120'>专辑名字</th><th width='120'>操作</th></tr>";
                     $.each(msg[3],function(index){
                     singerqian+="<tr><td class='center'>"+msg[3][index]['songID']+"</td><td class='center'>"+msg[3][index]['songname']+"</td><td class='center'>"+msg[3][index]['singername']+"</td><td class='center'>"+msg[3][index]['albumname']+"</td><td class='center'><span class='remove'>删除</span></td></tr>"   
                         })
                     $('table').html(singerqian);
                     }
            })
     }  
     
     $('table').on('click','.remove',function(){
         if(confirm('该操作将删除该歌曲及媒体文件，确认删除？')){
              var songID=$(this).parents('tr').find('td').eq(0).text();   
              alert(songID);
            $.post('../adminControl/delControl.php',{songID:songID,falg:3},function(msg){
                for(var key in msg){
                    console.log(msg);
                    if(key==0){
                        $('td:contains('+songID+')').parents('tr').remove();   
                        alert(msg[key]);
                    }else{
                        alert(msg[key]);
                    }
                }
            },'json')
         }
     })
      //回车键监听
        $(document).keyup(function(event){
            if(event.keyCode ==13){
            $(':input[name=sure]').trigger("click");
         }
        });
    <?php echo '</script'; ?>
><?php }
}
