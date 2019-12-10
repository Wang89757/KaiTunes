<?php
/* Smarty version 3.1.30, created on 2018-06-21 02:24:40
  from "D:\chenxu\wamp64\www\migu3.0\view\userInf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2b0c6870d929_53025345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f5834d3a7c5c76c4c6a86c2e2f5b68d7edf743' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\migu3.0\\view\\userInf.html',
      1 => 1529424337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2b0c6870d929_53025345 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="../js/jquery.min.js" ><?php echo '</script'; ?>
>
    <link href="../css/index-css.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
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
    
    <div class="user-inf">
        <div class='my-images'><img src="../images/<?php echo $_smarty_tpl->tpl_vars['userinf']->value['userImages'];?>
" style="width: 240px;height:240px"><br>
            <span>我的头像</span>
        </div>
<div class="infbox">
	<form method="post" enctype="multipart/form-data" onsubmit="return checkfrom(this)" >
            <div class='inf-edit'>
                <div><span>用户名：</span><input type="text" name="uname" value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['username'];?>
"/><span class="msg" style="color:red;font-size: 1.5em;"></span></div>	
                <div><span>密码：</span><input type="text" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['pwd'];?>
"/><span class="msg" style="color:red;font-size: 1.5em;"></span></div>			
                <div><span>生日：</span><select name="year"><option value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][0];?>
"><?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][0];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 2018+1 - (1918) : 1918-(2018)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1918, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                        <?php if ((1918+(2018-$_smarty_tpl->tpl_vars['var']->value)) != $_smarty_tpl->tpl_vars['userinf']->value['shengri'][0]) {?>
                        <option value="<?php echo 1918+(2018-$_smarty_tpl->tpl_vars['var']->value);?>
"><?php echo 1918+(2018-$_smarty_tpl->tpl_vars['var']->value);?>
</option>
                        <?php }?>
                        <?php }
}
?>

                    </select>
                    <select name="mouth"><option value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][1];?>
"><?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][1];?>
</option>
                     <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                        <?php if (1918+(2018-$_smarty_tpl->tpl_vars['var']->value) != $_smarty_tpl->tpl_vars['userinf']->value['shengri'][1]) {?>
                        <option value="<?php echo 1+(12-$_smarty_tpl->tpl_vars['var']->value);?>
"><?php echo 1+(12-$_smarty_tpl->tpl_vars['var']->value);?>
</option>
                           <?php }?>
                        <?php }
}
?>

                    </select>
                    <select name="day"><option value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][2];?>
"><?php echo $_smarty_tpl->tpl_vars['userinf']->value['shengri'][2];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                        <?php if (1918+(2018-$_smarty_tpl->tpl_vars['var']->value) != $_smarty_tpl->tpl_vars['userinf']->value['shengri'][2]) {?>
                        <option value="<?php echo 1+(31-$_smarty_tpl->tpl_vars['var']->value);?>
"><?php echo 1+(31-$_smarty_tpl->tpl_vars['var']->value);?>
</option>
                        <?php }?>
                        <?php }
}
?>

                    </select><span class="msg" style="color:red;font-size: 1.5em;"></div>
                <input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['userinf']->value['userImages'];?>
">
                <div><span>我的头像：</span><input type="file" name="thumb" class="file" /></div>	
                <div><span>个性签名：</span><textarea name="description" style='vertical-align: middle'><?php echo $_smarty_tpl->tpl_vars['userinf']->value['qianming'];?>
</textarea></div>				      
            </div>
            <div class='submitbox'>
                <input type="submit" name='sure' value="确定" />
                <input type="reset" value="重置" />
            </div>
        </form>
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
    
        function checkfrom(form){
        if($(':input[name=gname]').val()==""||$(':input[name=aname]').val()==""){
           if($(':input[name=gname]').val()==""){
               $('.msg').eq(0).text("*");           
           }else{
                $('.msg').eq(0).text("");   
           }
            if($(':input[name=aname]').val()==""){
               $('.msg').eq(1).text("*");           
           }else{
                $('.msg').eq(1).text("");   
           }
           return false;
        }else
           return true;
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
