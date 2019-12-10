<?php
/* Smarty version 3.1.30, created on 2018-06-21 18:30:44
  from "D:\chenxu\wamp64\www\KaiTunes\view\singer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2beed4737877_76918546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce116df204fbd2c9c233d051b8017e523e3a46d' => 
    array (
      0 => 'D:\\chenxu\\wamp64\\www\\KaiTunes\\view\\singer.html',
      1 => 1529561292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2beed4737877_76918546 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <span>好久不..</span>
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
<div class="singerPage-contents">
        <div class="singer-fenlei">
            <ul>
                <li id="hong" tabSi="0">全部歌手</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['singertab']->value[0], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <li tabSi="<?php echo $_smarty_tpl->tpl_vars['value']->value['tabsiID'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['tabname'];?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div class="singer-liebiao">
            <input type="hidden" name='currenTabsi' value="0">
            <div class="singerDisplay">
                <div class="singer-qian">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSinger']->value[3], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div class="singer-demo">
                    <a href="singerIndexControl.php?singerID=<?php echo $_smarty_tpl->tpl_vars['value']->value['singerID'];?>
">
                        <img src="../images/<?php echo $_smarty_tpl->tpl_vars['value']->value['singerImages'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
</span>
                    </a>
                </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            </div>
            <div class="liebiao-singer">
                <ul>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultSinger']->value[4], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <li><a href="singerIndexControl.php?singerID=<?php echo $_smarty_tpl->tpl_vars['value']->value['singerID'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['singername'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
                </ul>
            </div>
            </div>
            <div class="fenye">
                <div class="M-box2">
                </div>
                <input type="hidden" name='singerTotal' value="<?php echo $_smarty_tpl->tpl_vars['resultSinger']->value[2][0]['singerTotal'];?>
">
            </div>
        </div>
</div>   
<div class="migu-footer">
</div>
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
    $('.singerPage-contents .M-box2').pagination({
        coping: true,
        homePage: '首页',
        endPage: '末页',
        prevContent: '上页',
        nextContent: '下页',
        pageCount:((parseInt($('input[name=singerTotal]').val())-36)/48+1).toString(),
        //callback()： PageCallback
        callback: function (api) {
            var yema=parseInt(api.getCurrent())*48-60;
            var tabsi=$('input[name=currenTabsi]').val();
            if(yema==-12){
                yema=0;
            }
            singerAjax(tabsi,yema)  
        }
    });

$('.singer-fenlei li').click(function(){
    var tabsi=$(this).attr('tabSi');
    singerAjax(tabsi,0);
})
     function singerAjax(tabsi,yema){
          $.ajax({
                type:"GET",
                url:"../Control/singerFenyeControl.php",   //请求的url地址，即删除商品的控制器
                data:{tabSiID:tabsi,yema:yema,falg:0},  //请求时发送的数据，mid和gid
                dataType:"json",
                success: function(msg){
                     $('.singerDisplay').empty();
                     if(yema==0){
                         $('input[name=currenTabsi]').val(tabsi);
                          var singerTotal=msg[2][0]['singerTotal'];
                             $('.singerPage-contents .M-box2').pagination({
                                coping: true,
                                homePage: '首页',
                                endPage: '末页',
                                prevContent: '上页',
                                nextContent: '下页',
                                pageCount:Math.ceil((singerTotal-36)/48+1),
                                //callback()： PageCallback
                                callback: function (api) {
                                    var yema=parseInt(api.getCurrent())*48-60;
                                    var tabsi=$('input[name=currenTabsi]').val();
                                    if(yema==-12){
                                        yema=0;
                                    }
                                    singerAjax(tabsi,yema)  
                                }
                            });
                         var singerqian="<div class='singer-qian'>";
                          $.each(msg[3],function(index){  
                                  singerqian+="<div class='singer-demo'><a href='singerIndexControl.php?singerID="+msg[3][index]['singerID']+"'><img src='../images/"+msg[3][index]['singerImages']+"'><span>"+msg[3][index]['singername']+"</span></a></div>";
                               })
                              singerqian+="</div><div class='liebiao-singer'><ul>";
                          $.each(msg[4],function(index){                        
                              singerqian+="<li><a href='singerIndexControl.php?singerID="+msg[4][index]['singerID']+"'>"+msg[4][index]['singername']+"</li>";
                            })    
                          singerqian+="</ul></div>";
                        $('.singerDisplay').html(singerqian);
                     }else{
                        liebiaosinger="<div class='liebiao-singer'><ul>";  
                        $.each(msg[0],function(index){
                        liebiaosinger+="<li><a href='singerIndexControl.php?singerID="+msg[0][index]['singerID']+"'>"+msg[0][index]['singername']+"</li>";
                     if(index==17||index==35){
                         for(var i=0;i<6;i++){
                         liebiaosinger+="<li style='height:20px'></li>";
                     }
                     }
                        })
                        liebiaosinger+="</ul></div>";
                     $('.singerDisplay').html(liebiaosinger);
                     }  
              }
            })
     }   
    
    $('.singer-fenlei ul li').click(function(){
        $(this).css({
            'background-color': '#e51373',
            'color':'white'
        }).siblings().css({
            'background-color': 'white',
            'color':'#4f4f4f'
        })
    })
    
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
