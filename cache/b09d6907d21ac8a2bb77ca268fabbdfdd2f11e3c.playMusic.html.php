<?php
/* Smarty version 3.1.30, created on 2018-06-20 04:52:10
  from "D:\chenxu\wamp64\www\migu3.0\view\playMusic.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b29dd7acd5a02_14645909',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '10818e70a35b8ee3f67aebcae4ec68bfd92de322' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\playMusic.html',
      1 => 1529426364,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b29dd7acd5a02_14645909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>凯哥音乐</title>

<!--播放器样式-->
<link href="../css/player.css" rel="stylesheet" type="text/css" />
<link href="../css/login.css" rel="stylesheet" type="text/css" />
	<script>
		function SetWinHeight(obj)
		 {
		 var win=obj;
		 if (document.getElementById)
		 {
		 if (win && !window.opera)
		 {
		 if (win.contentDocument && win.contentDocument.body.offsetHeight)
		 win.height = win.contentDocument.body.offsetHeight;
		 else if(win.Document && win.Document.body.scrollHeight)
		 win.height = win.Document.body.scrollHeight;
		 }
		 }
		 }
	</script>

</head>

<body>
<input type='hidden' name='userInf-ID' value="<?php echo $_smarty_tpl->tpl_vars['userID']->value;?>
">
<input type='hidden' name='userInf-name' value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
<iframe width="100%" align="center" height="100%" id="win" name="win" onload="Javascript:SetWinHeight(this)" frameborder="0" scrolling="no" src="indexControl.php"></iframe>



<div class="bukedian"></div>
<div class="login-zhuce">
		<div class="login-img">
			<img src="../images/logo.png" alt="">
			<span>x</span>
		</div>
		<span class="msg"></span>
	<div class="login-window">
		<form action="" method="post">
			<div class="login-input">
				<div class="use-pwd">
					<input name="username" value="" type="text">
					<input name="pwd" value="" type="password">
				</div>
				<input type="button" value="登录">
				<!--<span>用户名</span>-->
				<!--<span>密码</span>-->
			</div>
		</form>
		<div class="login-buttom">
			<span>立即注册</span>
		</div>
	</div>
	<div class="zhuce-window">
		<div class="zhuce-input">
			<label>用户名：&nbsp</label><input name="username" value="" type="text"><br>
			<label>密码：&nbsp</label><input name="pwd" value="" type="password"><br>
			<label>确认密码：&nbsp</label><input name="pwdAgain" value="" type="password"><br>
		</div>
		<input type="button" value="注册">
		<div class="zhuce-buttom">
			<span>立即登录</span>
		</div>
	</div>
</div>
<!-- 左侧播放器 开始-->
<div id="jp_container_N" class="jp-video jp-video-270p jp-state-playing" role="application" aria-label="media player" style="left: 0px; height: 175px; bottom: 20px;">
	<div class="jp-type-playlist">
		<div id="jquery_jplayer_N" class="jp-jplayer" style="width: 90px; height: 90px;">

			<audio id="jp_audio_0" preload="metadata" src="http://music.163.com/song/media/outer/url?id=31473269.mp3" title="那英"></audio>
			<video id="jp_video_0" preload="metadata" title="那英" style="width: 0px; height: 0px;"></video>
		</div>
		<div class="jp-gui">
			<div class="jp-video-play" style="display: none;">
				<button class="jp-video-play-icon" role="button" tabindex="0">播放</button>
			</div>
			<div class="jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar" style="width: 100%;">
						<div class="jp-play-bar" style="overflow: hidden; width: 97.5219%;"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">04:11</div>
				<div class="jp-duration" role="timer" aria-label="duration">04:17</div>
				<div class="jp-controls-holder">
					<div class="jp-controls">
						<button class="jp-previous" role="button" tabindex="0">上一曲</button>
						<button class="jp-play" role="button" tabindex="0">播放</button>
						<button class="jp-next" role="button" tabindex="0">下一曲</button>
						<button class="jp-stop" role="button" tabindex="0">暂停</button>
					</div>
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">静音</button>
						<button class="jp-volume-max" role="button" tabindex="0">最大音量</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value" style="width: 10%;"></div>
						</div>
					</div>
					<div class="jp-toggles">
						<button class="jp-repeat" role="button" tabindex="0">重复</button>
						<button class="jp-shuffle" role="button" tabindex="0">随机</button>
						<!--<button class="jp-full-screen" role="button" tabindex="0">全屏</button>-->
					</div>
				</div>
				<div class="jp-details" style="display: none;">
					<div class="jp-title" aria-label="title">那英</div>
				</div>
			</div>
		</div>
		<div class="jp-playlist">
			<div class="jp-playlist-box" style="height: 80px;">
				<ul style="height: 1000px; display: block; top: 0px;">
					<li>
						<div>
							<a href="javascript:;" class="jp-playlist-item-remove">×</a>
							<a href="javascript:;" class="jp-playlist-item" tabindex="0">默 <span class="jp-artist" style="transform: rotate(180deg);"> - 那英</span></a>
						</div>
					</li>
					<li class="">
						<div>
							<a href="javascript:;" class="jp-playlist-item-remove">×</a>
							<a href="javascript:;" class="jp-playlist-item" tabindex="0">Ellens Gesang III D839 <span class="jp-artist" style="transform: rotate(180deg);"> - Geoffrey Parsons</span></a>
						</div>
					</li>
					<li>
						<div>
							<a href="javascript:;" class="jp-playlist-item-remove">×</a>
							<a href="javascript:;" class="jp-playlist-item" tabindex="0">Fire <span class="jp-artist" style="transform: rotate(180deg);"> - Said The Sky</span></a>
						</div>
					</li>
					<li class="jp-playlist-current" style="display: list-item;">
						<div>
							<a href="javascript:;" class="jp-playlist-item-remove">×</a>
							<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">兰若词 <span class="jp-artist" style="transform: rotate(180deg);"> - 刘亦菲</span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="jp-no-solution" style="display: none;">
			<span style="transform: rotate(180deg);">升级需要</span> 您浏览器赞不支持播放，请更新版本
			<a href="http://get.adobe.com/flashplayer" target="_blank">Flash插件</a>.
		</div>
	</div>
	<!--歌曲列表滚动条-->
	<div class="scrollBar" style="display: block;">
		<div class="bar" style="top: 0px;"></div>
	</div>
	<!--播放器展开隐藏按钮-->
	<button type="button" class="folded_bt" title="点击收缩" id="btnfold" style="top: 52px;">
  <span style="transform: rotate(180deg);"></span>
</button>
	<div id="listRemove" style="display: block;"></div>
	<!--移除全部歌曲按钮-->
	<div id="listClose"></div>
	<!--歌曲列表展开收缩按钮-->
</div>
<!-- 左侧播放器 结束-->
<script type="text/javascript" src="../js/jquery.min.js"></script>

<!--播放器js-->
<script src="../js/player.js"></script>
<script src="../js/playlist.js"></script>
<script src="../js/player_database.js"></script>
<!--播放器js-->

</body>
</html>
<script>
	function fu(data) {
		//var k=$(this).parent("li").index();
		myPlaylist.add({
			title:data['songname'], artist:data['singername'],
			//free:true,
			mp3:'../music/'+data['songPath']+'.mp3',
			//oga:"",
			poster:'../images/'+data['singerImages']
		});
		myPlaylist.play(-1);
	}
        $('.login-buttom span').click(function(){
		$('.login-window').css('display','none');
		$('.zhuce-window').css('display','block');
                $('.msg').text('');
                $('.zhuce-input input').val("");
	})
	$('.zhuce-buttom span').click(function(){
		$('.zhuce-window').css('display','none');
		$('.login-window').css('display','block');
                $('.msg').text('');
                $('.use-pwd input').val("");
	})
	$('.login-img span').click(function(){
		$('.login-zhuce').css('display','none');
		$('.bukedian').css('display','none');
	})
        
        //注册
       $('input[value=注册]').click(function(){
           var msg=$('.msg');
           var username=$('.zhuce-input input[name=username]').val();
           var pwd=$('.zhuce-input input[name=pwd]').val();
           if(username==""){
               msg.text('用户名不能为空！');
           }else if(pwd==""){
               msg.text('密码不能为空！');
           }else if($('.zhuce-input input[name=pwdAgain]').val()==""){
               msg.text('请再次确认密码！');
           }else if($('.zhuce-input input[name=pwdAgain]').val()!=pwd){
               msg.text('两次输入密码不一致！请重新输入');
           }else{
               msg.text('');
               zhuceAjax(username,pwd);
           } 
       })
       function zhuceAjax(username,pwd){
            $.ajax({
                type:"POST",
                url:"../Control/zhuceControl.php",   //请求的url地址，即删除商品的控制器
                data:{username:username,pwd:pwd},  //请求时发送的数据，mid和gid
                dataType:"json",
                success: function(msg){
                    for(var key in msg){
                        if(key==0)
                            alert(msg[key]); 
                        else
                        msg=$('.msg').text(msg[key]);   
                    }
                }
           })
        }
        //回车键监听
        $(document).keyup(function(event){
            if(event.keyCode ==13){
            $('input[value=登录]').trigger("click");
         }
        });
        $(document).keyup(function(event){
            if(event.keyCode ==13){
            $('input[value=注册]').trigger("click");
         }
        });
        
//        $('input[value=登录]').bind('keypress', function (event) { 
//            if (event.keyCode == "13") { 
//             $('input[value=登录]').click();
//         }
//         })
       
    $('input[value=登录]').click(function(){
           var msg=$('.msg');
           var username=$('.use-pwd input[name=username]').val();
           var pwd=$('.use-pwd input[name=pwd]').val();
           if(username==""){
               msg.text('请输入用户名！');
           }else if(pwd==""){
               msg.text('请输入密码！');
           }else{
               msg.text('');
               loginAjax(username,pwd);
           } 
       })
      function loginAjax(username,pwd){
            $.ajax({
                type:"POST",
                url:"../Control/loginControl.php",   
                data:{username:username,pwd:pwd},  
                dataType:"json",
                success: function(msg){
                    for(var key in msg){
                        if(key==0){
                            $('input[name=userInf-ID]').val(msg[key]['userID']);
                            $('input[name=userInf-name]').val(msg[key]['username']);
                            $('.login-zhuce').css('display','none');
                            $('.bukedian').css('display','none');
                            $('#win').contents().find(".login").css('display','none');  
                            $('#win').contents().find(".yonghu").css('display','block'); 
                            $('#win').contents().find(".yonghu span").text(msg[key]['username']);
                            window.location.href="playMusicControl.php";
                        }else if(key==2)
                        {
                            window.location.href="../adminControl/adminLoginControl.php";
                        }else{
                           msg=$('.msg').text(msg[key]);   
                        }
                    }
                }
           })
        }
</script><?php }
}
