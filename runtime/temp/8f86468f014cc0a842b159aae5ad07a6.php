<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:29:"theme/portal/index/index.html";i:1526984385;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>标题</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="dengrongqiu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="/static/lib/bootstrap/css/bootstrap.min.css"/>
    <!-- STYLESHEETS --><!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="/static/lib/html5shiv/dist/html5shiv.min.js"></script>
    <script type="text/javascript" src="/static/lib/css3-mediaqueries-js/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <link href="/static/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="/static/lib/animate/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/portal_public.css"/>
    
</head>
<body>
<div class="haed">
    <div class="top">
        <ul class="top-nav centered">
            <a href="/ " target="_blank">Home</a>
            <a href="/ " target="_blank">官方微博</a>
            <a href="/ " target="_blank">关于我们</a>
        </ul>
    </div>
    <div class="top-bgline"></div>
    <div class="logo centered">
        <div class="logo-pic">
            <a href="/"><img src="/static/images/logo.png"></a>
        </div>
        <div class="search">
            <div class="push-right">
                <input class="search-input" type="text" name="keywords" placeholder="Search...">
                <button class="btn btn-success">搜索<i class=" fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="menu-ul centered">
            <li class="active"><a href="#">网站首页</a></li>
            <li><a href="#">JS开发</a></li>
            <li><a href="#">html</a></li>
            <li><a href="#">jquery</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">前端学习 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">html+css学习</a></li>
                    <li><a href="#">javascript学习</a></li>
                    <li><a href="#">jquery学习</a></li>
                    <li class="divider"></li>
                    <li><a href="#">bootstrap学习</a></li>
                    <li><a href="#">less/sass学习</a></li>
                    <li><a href="#">angularJS学习</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="pageBody">
    <div class="container">
        <div class="row">
            <div class="leftBody">
                <div class="row">
                    <div class="banner"></div>
                </div>
                <dev class="row">
                    <div class="pushInfo">
                    </div>
                </dev>
            </div>
            <div class="rightbody">
                <div class="row">
                    <div class="aboutUs">

                    </div>
                </div>
                <div class="row">
                    <div class="newsList"></div>
                </div>
                <div class="row">
                    <div class="tagYun"></div>
                </div>
                <div class="row">
                    <div class="newsPush"></div>
                </div>
                <div class="row">
                    <div class="link"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="row"></div>
</div>
</body>
<script src="/static/lib/jquery/jquery.min.js"></script>
<script>
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav");
        }
    })
</script>
</html>