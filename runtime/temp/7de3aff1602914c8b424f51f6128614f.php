<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:22:"theme/admin/login.html";i:1526018368;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="description" itemprop="description" content="">
    <meta name="keywords" content=""/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="generator" content="cnit8.com"/>
    <meta name="author" content="dengrongqiu"/>
    <meta name="copyright" content="cnit8.com"/>
    <meta itemprop="image" content="/static/images/common/ico.png"/>
    <link href="/static/images/common/ico.ico" rel="Shortcut Icon" type="image/x-icon">
    <link href="/static/images/common/ico.ico" rel="icon" type="image/x-icon">
    <link href="/static/css/common.css" rel="stylesheet"/>
    <link href="/static/lib/FontAwesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/css/login.css" rel="stylesheet">
</head>
<body>
<div class="background"></div>
<div class="loginbox animated-500 fadeInDown aero">
    <div class="title">
        <div class="logo"><i class="icon-cloud"></i>Information</div>
        <div class='info'>cnit8一个高科技技术教程网站</div>
        <div class="menu-group">
            <a id='footer-language' data-toggle="dropdown"  class="topbar-menu">
                <i class='font-icon fa fa-flag'></i><?php echo lang('Language'); ?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu footer-language pull-left animated menuShow" role="menu" aria-labelledby="footer-language">
                <li><a href='javascript:language("en-us");' style="color: white"><?php echo lang('EN'); ?></a>
                </li>
                <li><a href='javascript:language("zh-cn");' style="color: white"><?php echo lang('ZH'); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="form">
        <form action="#">
            <div class="inputs">
                <div>
                    <i class="font-icon fa fa-user"></i>
                    <input id="username"  type="text" placeholder="<?php echo lang('Login account'); ?>"
                           required autocomplete="on"/>
                </div>
                <div>
                    <i class="font-icon  fa fa-key"></i>
                    <input id="password"  type="password" placeholder="<?php echo lang('Password'); ?>"
                           required autocomplete="on"/>
                </div>
                <div class='check-code'>
                    <i class="font-icon fa fa-unlock-alt"></i>
                    <input id='checkCode' class="check-code" type="text" placeholder="<?php echo lang('Verification'); ?>" required
                           autocomplete="off"/>
                    <img id="verify" src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+new Date().getTime()"/>
                </div>
            </div>

            <div class="actions">
                <label for='rm'>
                    <input type="checkbox" class="checkbox" name="rememberPassword" id='rm'/>
                    <?php echo lang('Remember me'); ?> </label>
                <a href="javascript:void(0);" class="forget-password"><?php echo lang('Forget Password'); ?></a>
                <br/>
                <input type="submit" id="submit" value="<?php echo lang('Login'); ?>"/>
            </div>
            <div class="msg"></div>
        </form>
    </div>
</div>
<div class="common-footer aero">
    <span class="copyright-content">Powered by www.cnit8 v1.25 | Copyright ©
        <a href="http://www.cnit8.com/" target="_blank">cnit8.com</a> All rights reserved.
    </span>
</div>
</body>
<script src="/static/lib/jquery/jquery.min.js"></script>
<script src="/static/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/lib/layer/layer.js"></script>
<script>
    jQuery(document).ready(function() {
        $("#submit").click(function () {
            if($("#username").val() == ''){
                layer.msg("<?php echo lang('Login name cannot be blank'); ?>", {
                    icon: 2,
                    time: 2000
                });
                $("#username").focus();
                return false;
            }
            if($("#password").val() == ''){
                layer.msg("<?php echo lang('Login password cannot be blank'); ?>", {
                    icon: 2,
                    time: 2000
                });
                $("#password").focus();
                return false;
            }
            if($("#checkCode").val() == ''){
                layer.msg("<?php echo lang('verification code must be filled'); ?>", {
                    icon: 2,
                    time: 2000
                });
                $("#checkCode").focus();
                return false;
            }
            $.ajax({
                url: "<?php echo url('/admin/login/doLogin'); ?>",
                data: {username: $("#username").val(), password: $("#password").val(),captcha:$("#checkCode").val()},
                type: 'POST',
                dataType: 'json',
                success: function (e) {
                    if (e.status == 0) {
                        layer.msg(e.msg, {
                            icon: 2,
                            time: 2000
                        });
                        $("#verify").attr("src","<?php echo captcha_src(); ?>?'+new Date().getTime()");
                        $("#checkCode").focus();
                    }
                    if (e.status == 1) {
                        layer.msg(e.msg, {
                            icon: 2,
                            time: 2000
                        });
                        $("#verify").attr("src","<?php echo captcha_src(); ?>?'+new Date().getTime()");
                        $("#username").focus();
                    }
                    if (e.status == 2) {
                        layer.msg(e.msg, {
                            icon: 2,
                            time: 2000
                        });
                        $("#verify").attr("src","<?php echo captcha_src(); ?>?'+new Date().getTime()");
                        $("#password").focus();
                    }
                    if (e.status == 3) {
                        layer.msg(e.msg, {
                            icon: 1,
                            time: 2000
                        });
                        window.location.href = "<?php echo url('/admin/index'); ?>";
                    }
                },
                error: function (e) {
                    layer.msg(e.msg);
                }
            });
        });
    });

    //语言切换
    function language(lang){
        var data = {'lang':lang};
        $.get("/admin/login/setLang",data,function(){
            location.reload();
        })
    }
</script>
</html>
