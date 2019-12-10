<?php
/* Smarty version 3.1.30, created on 2018-06-21 06:45:07
  from "D:\chenxu\wamp64\www\migu3.0\adminView\singer-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2b49730be1c3_35201429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a460a88aa8ceb2e75548f01b9b318b5bc813f303' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\adminView\\singer-index.html',
      1 => 1529563456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b49730be1c3_35201429 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="item"><div class="title">歌手列表</div>
<div class="title-btn left"><a href="../adminControl/addSingerControl.php">添加歌手</a></div>
<div class="data-list clear">请选择商品分类：
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

        </select> <input type="button" name="tab-sure" value="确定">
    <table border="1">
		<tr><th width="50">歌手ID</th><th width="150">歌手名字</th><th width="120">歌手标签</th><th width="80">推荐</th><th width="120">操作</th></tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSinger']->value[2], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>                       
                <tr><td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['singerID'];?>
</td>
			<td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
</td>
                        <td class="center"><?php echo $_smarty_tpl->tpl_vars['value']->value['tabname'];?>
</td>
			<td class="center"><?php if ($_smarty_tpl->tpl_vars['value']->value['is_re_singer'] == 1) {?>是<?php } else { ?>否<?php }?></td>
                        <td class="center"><span class="remove">删除</span></td></tr>
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
    <input type="hidden" name='currenTabsi' value="<?php echo $_smarty_tpl->tpl_vars['tabSi']->value;?>
">
    <input type="hidden" name='singerTotal' value="<?php echo $_smarty_tpl->tpl_vars['resultSinger']->value[3][0]['singerTotal'];?>
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
        pageCount:((parseInt($('input[name=singerTotal]').val())-3)/2+1).toString(),
        callback: function (api) {
            var yema=parseInt(api.getCurrent())*2-1;
            var tabsi=$('input[name=currenTabsi]').val();
            if(yema==1){
                yema=0;
            }
            singerAjax(tabsi,yema)  
        }
    });
    $(':input[name=tab-sure]').click(function(){
    var tabsi=$("select :selected").val();
    singerAjax(tabsi,0);
    $('.M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:((parseInt($('input[name=singerTotal]').val())-3)/2+1).toString(),
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
                url:"../adminControl/singerindexfenyeControl.php",   //请求的url地址，即删除商品的控制器
                data:{tabSiID:tabsi,yema:yema,falg:0},  //请求时发送的数据，mid和gid
                dataType:"json",
                success: function(msg){
                  console.log(msg);
                     $('table').empty();
                     if(yema==0){
                         $('input[name=singerTotal]').val(msg[3][0]['singerTotal']);
                         $('input[name=currenTabsi]').val(tabsi);
                            $('.M-box2').pagination({
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
                     }
                     var singerqian="<tr><th width='50'>歌手ID</th><th width='150'>歌手名字</th><th width='120'>歌手标签</th><th width='80'>推荐</th><th width='120'>操作</th></tr>";
                     $.each(msg[2],function(index){
                     singerqian+="<tr><td class='center'>"+msg[2][index]['singerID']+"</td><td class='center'>"+msg[2][index]['singername']+"</td><td class='center'>"+msg[2][index]['tabname']+"</td><td class='center'><?php if ("+msg[2][index]['is_re_singer']+" == 1) {?>是<?php } else { ?>否<?php }?></td><td class='center'><span class='remove'>删除</span></td></tr>"   
                         })
                     $('table').html(singerqian);
                     }
            })
     }  
     
     $('table').on('click','.remove',function(){
         if(confirm('该操作将删除该歌手所有数据，包括专辑、歌曲等，确认删除？')){
              var singerID=$(this).parents('tr').find('td').eq(0).text();
              alert(singerID);
              //return;
              
            $.post('../adminControl/delControl.php',{singerID:singerID,falg:1},function(msg){
                for(var key in msg){
                    if(key==0){
                        $('td:contains('+singerID+')').parents('tr').remove();   
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
