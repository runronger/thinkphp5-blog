<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:29:"theme/portal/index/index.html";i:1526899620;}*/ ?>
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
    <!--<link rel="stylesheet" type="text/css" href="/static/css/portal_public.css"/>-->
    
    <style type="text/css">
        html, body {width:100%;height:100%;} /*非常重要的样式让背景图片100%适应整个屏幕*/
        .bg {display: table;width: 100%;height: 100%;padding: 100px 0;text-align: center;color: #fff;background: url("/static/images/wall_page/11.jpg") no-repeat bottom center;background-color: #000;background-size: cover;}
        .my-navbar {padding:20px 0;transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;}
        .my-navbar a{background:transparent !important;color:#fff !important}
        .my-navbar a:hover {color:#45bcf9 !important;background:transparent;outline:0}
        .my-navbar a {transition: color 0.5s ease-in-out;}/*-webkit-transition ;-moz-transition*/
        .top-nav {padding:0;background:#000;}
        button.navbar-toggle {background-color:#fbfbfb;}/*整个背景都是transparent透明的，会看不到，所以再次覆盖一下*/
        button.navbar-toggle > span.icon-bar {background-color:#dedede}
    </style>
</head>
<body>


<nav class="navbar navbar-fixed-top my-navbar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">菜鸟教程</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">iOS</a></li>
                <li><a href="#">SVN</a></li>
                <li>
                    <a href="#">Asp.Net</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="bg"></div>
<br /><br /><br /><br /><br /><br /><br /><p><a href="www.xiandanke.com">闲蛋客</a></p>


<nav class = "navbar navbar-default" role = "navigation">
    <div class="navbar-header">
        <a class="navbar-brand">hello</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">网站首页</a></li>
        <li><a href="#">JS开发</a></li>
        <li><a href="#">html</a></li>
        <li><a href="#">jquery</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle = "dropdown">前端学习 <span class="caret"></span></a>

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
</nav>


<div class="haed">
        <div class="top">
            <ul class="topNav">
                <a href="/ " target="_blank">Home</a>
                <a href="/ " target="_blank">官方微博</a>
                <a href="/ " target="_blank">关于我们</a>
            </ul>
        </div>
        <div class="topBgLine"></div>
        <div class="logo">
            <div class="logoPic">
                <a href="/"><img src="/static/images/logo.png"></a>
            </div>
            <div class="search">
                <input class="form-group" type="text" name="keywords">
                <span class="fa fa-search"></span>
            </div>
        </div>
        <div class="nav nav-pills">
            <div class="container">
                <div class="navbar-header">
                    <ul>
                        <a href="index.html" target="_blank">网站首页</a>
                        <a href="news.html" target="_blank">新闻中心</a>
                        <a href="p.html" target="_blank">产品中心</a>
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>-->
                        <a href="a.html" target="_blank">关于我们</a>
                        <a href="c.html" target="_blank">联系我们</a>
                        <a href="b.html" target="_blank">网上留言</a>
                    </ul>
                </div>
            </div>
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
<script src="/static/lib/jquery/jquery.min.js" ></script>
<script>
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {$(".navbar-fixed-top").addClass("top-nav");
        }else {$(".navbar-fixed-top").removeClass("top-nav");}
    })
</script>
</html>