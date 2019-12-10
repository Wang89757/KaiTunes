<?php
/* Smarty version 3.1.30, created on 2018-06-19 15:59:05
  from "D:\chenxu\wamp64\www\migu3.0\view\albumSong.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b292849e85db0_71772906',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '12a3c51d46e591390963c3b8a189605d4df5c1e8' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\albumSong.html',
      1 => 1529423627,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 200,
),true)) {
function content_5b292849e85db0_71772906 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="album-picture"><img src="../images/<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 0 in D:\chenxu\wamp64\www\migu3.0\view_c\12a3c51d46e591390963c3b8a189605d4df5c1e8_0.file.albumSong.html.cache.php on line <i>92</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>242816</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1163712</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>12</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1164576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0371</td><td bgcolor='#eeeeec' align='right'>1236672</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0403</td><td bgcolor='#eeeeec' align='right'>1372272</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0442</td><td bgcolor='#eeeeec' align='right'>1412616</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0461</td><td bgcolor='#eeeeec' align='right'>1494296</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1529880</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1530504</td><td bgcolor='#eeeeec'>content_5b2927c77f8797_38633718(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
"></div>
        <div class="album-info">
            <ul>
                <li><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 0 in D:\chenxu\wamp64\www\migu3.0\view_c\12a3c51d46e591390963c3b8a189605d4df5c1e8_0.file.albumSong.html.cache.php on line <i>96</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>242816</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1163712</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>12</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1164576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0371</td><td bgcolor='#eeeeec' align='right'>1236672</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0403</td><td bgcolor='#eeeeec' align='right'>1372272</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0442</td><td bgcolor='#eeeeec' align='right'>1412616</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0461</td><td bgcolor='#eeeeec' align='right'>1494296</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1529880</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1530504</td><td bgcolor='#eeeeec'>content_5b2927c77f8797_38633718(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
</li>
                <li><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 0 in D:\chenxu\wamp64\www\migu3.0\view_c\12a3c51d46e591390963c3b8a189605d4df5c1e8_0.file.albumSong.html.cache.php on line <i>98</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>242816</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1163712</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Control\albumControl.php' bgcolor='#eeeeec'>...\albumControl.php<b>:</b>12</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0349</td><td bgcolor='#eeeeec' align='right'>1164576</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0371</td><td bgcolor='#eeeeec' align='right'>1236672</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0403</td><td bgcolor='#eeeeec' align='right'>1372272</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0442</td><td bgcolor='#eeeeec' align='right'>1412616</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0461</td><td bgcolor='#eeeeec' align='right'>1494296</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1529880</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0469</td><td bgcolor='#eeeeec' align='right'>1530504</td><td bgcolor='#eeeeec'>content_5b2927c77f8797_38633718(  )</td><td title='D:\chenxu\wamp64\www\migu3.0\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
</li>
                <li>收录单曲：<span class='bianhong'>0</span>&nbsp首</li>
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
                <input type="hidden" name='albumID' value="33">
                </div>
            </div>
        </div>
            <div class='other-album'>
                <h2><span class="bianhong">推荐</span>歌手其它专辑</h2>
                     <div class="d-tab3" > 
                <ul>
                                        <li><a href="albumControl.php?albumID=1&singerID=1">
                            <img src="../images/album1_8.jpg" alt="">
                    <span>意外</span>
                    </a></li>
                                        <li><a href="albumControl.php?albumID=3&singerID=1">
                            <img src="../images/album1_10.jpg" alt="">
                    <span>绅士</span>
                    </a></li>
                                        <li><a href="albumControl.php?albumID=4&singerID=1">
                            <img src="../images/album1_6.jpg" alt="">
                    <span>渡</span>
                    </a></li>
                                        <li><a href="albumControl.php?albumID=5&singerID=1">
                            <img src="../images/album1_5.jpg" alt="">
                    <span>像风一样</span>
                    </a></li>
                                        <li><a href="albumControl.php?albumID=6&singerID=1">
                            <img src="../images/album1_4.jpg" alt="">
                    <span>别</span>
                    </a></li>
                    
                </ul>
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
    </script><?php }
}
