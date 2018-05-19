<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"theme/admin/article/article_edit.html";i:1526730279;s:46:"/home/rong/WEBROOT/tp5/theme/admin/layout.html";i:1526634179;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章</title>
    <meta name="keywords" content="<?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章">
    <meta name="description" content="<?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章">
    <meta name="author" content="dengrongqiu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/cloud-admin.min.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/themes/graphite.css" id="skin-switcher">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.min.css">
    <!-- STYLESHEETS --><!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="/static/lib/html5shiv/dist/html5shiv.min.js"></script>
    <script type="text/javascript" src="/static/lib/css3-mediaqueries-js/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <link href="/static/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="/static/lib/animate/animate.min.css"/>
    

<link rel="stylesheet" type="text/css" href="/static/lib/webuploader/webuploader.css">
<link rel="stylesheet" type="text/css" href="/static/lib/webuploader/webuploader_demo.css">
<link rel="stylesheet" type="text/css" href="/static/lib/daterangepicker/daterangepicker.css">

</head>
<body>
<!-- HEADER -->
<header class="navbar clearfix" id="header">
    <div class="container">
        <div class="navbar-brand mini-menu">
            <!-- COMPANY LOGO -->
            <a href="/admin/index">
                <img src="/static/admin/images/logo/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="30"
                     width="120">
            </a>
            <!-- /COMPANY LOGO -->
            <!-- TEAM STATUS FOR MOBILE -->
            <div class="visible-xs">
                <a href="#" class="team-status-toggle switcher btn dropdown-toggle">
                    <i class="fa fa-users"></i>
                </a>
            </div>
            <!-- /TEAM STATUS FOR MOBILE -->
            <!-- SIDEBAR COLLAPSE -->
            <div id="sidebar-collapse" class="sidebar-collapse  btn">
                <i class="fa fa-bars"
                   data-icon1="fa fa-bars"
                   data-icon2="fa fa-bars"></i>
            </div>
            <!-- /SIDEBAR COLLAPSE -->
        </div>
        <!-- NAVBAR LEFT -->
        <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa fa-flag"></i>
                    <span class="name"><?php echo lang('Language'); ?></span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href='javascript:language("en-us");'><?php echo lang('EN'); ?></a>
                    </li>
                    <li><a href='javascript:language("zh-cn");'><?php echo lang('ZH'); ?></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                    <span class="name"><?php echo lang('Theme setting'); ?></span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu skins">
                    <li class="dropdown-title">
                        <span><i class="fa fa-leaf"></i> Theme Skins</span>
                    </li>
                    <li><a href="#" data-skin="default">Subtle (default)</a></li>
                    <li><a href="#" data-skin="night">Night</a></li>
                    <li><a href="#" data-skin="earth">Earth</a></li>
                    <li><a href="#" data-skin="utopia">Utopia</a></li>
                    <li><a href="#" data-skin="nature">Nature</a></li>
                    <li><a href="#" data-skin="graphite">Graphite</a></li>
                </ul>
            </li>
        </ul>
        <!-- /NAVBAR LEFT -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header-notification">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge">6</span>
                </a>
                <ul class="dropdown-menu notification">
                    <li class="dropdown-title">
                        <span><i class="fa fa-bell"></i> 6 Notifications</span>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-success"><i class="fa fa-user"></i></span>
                            <span class="body">
                                <span class="message">5 users online. </span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Just now</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary"><i class="fa fa-comment"></i></span>
                            <span class="body">
                                <span class="message">Martin commented.</span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>19 mins</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning"><i class="fa fa-lock"></i></span>
                            <span class="body">
                                <span class="message">DW1 server locked.</span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>32 mins</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-info"><i class="fa fa-twitter"></i></span>
                            <span class="body">
                                <span class="message">Twitter connected.</span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>55 mins</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-danger"><i class="fa fa-heart"></i></span>
                            <span class="body">
                                <span class="message">Jane liked. </span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>2 hrs</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span>
                            <span class="body">
                                <span class="message">Database overload.</span>
                                <span class="time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>6 hrs</span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="footer">
                        <a href="#">See all notifications <i class="fa fa-arrow-circle-right"></i></a>
                    </li>
                </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user" id="header-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img alt="" src="/static/admin/images/avatars/avatar3.jpg"/>
                    <span class="username">Rongqiu</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> <?php echo lang('My Profile'); ?></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <?php echo lang('Account Settings'); ?></a></li>
                    <li><a href="#"><i class="fa fa-eye"></i> <?php echo lang('Privacy Settings'); ?></a></li>
                    <li><a href="<?php echo url('admin/login/signout'); ?>"><i class="fa fa-power-off"></i> <?php echo lang('Log Out'); ?></a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
</header>
<!--/HEADER -->
<!-- PAGE -->
<section id="page">
    <!-- SIDEBAR -->
    <div id="sidebar" class="sidebar mini-menu">
        <div class="sidebar-menu nav-collapse">
            <div class="divide-20"></div>
            <!-- SEARCH BAR -->
            <div id="search-bar">
                <input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
            </div>
            <!-- /SEARCH BAR -->
            <!-- SIDEBAR MENU -->
            <ul>
                <li class="active">
                    <a href="/admin/index">
                        <i class="fa fa-tachometer fa-fw"></i> <span class="menu-text"><?php echo lang('Statistics'); ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-cogs fa-fw"></i> <span class="menu-text"><?php echo lang('System settings'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="elements.html"><span
                                class="sub-menu-text"><?php echo lang('Website settings'); ?></span></a></li>
                        <li><a class="" href="buttons_icons.html"><span
                                class="sub-menu-text"><?php echo lang('Site settings'); ?></span></a></li>
                        <li><a class="" href="tabs_accordions.html"><span class="sub-menu-text"><?php echo lang('E-Mail settings'); ?></span></a>
                        </li>
                        <li><a class="" href="treeview.html"><span
                                class="sub-menu-text"><?php echo lang('data backup'); ?></span></a></li>
                        <li class="has-sub-sub">
                            <a href="javascript:;" class=""><span
                                    class="sub-menu-text"><?php echo lang('Multi-level menu'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-sub">
                                <li><a class="" href="#"><span class="sub-sub-menu-text"><?php echo lang('A menu'); ?></span></a>
                                </li>
                                <li><a class="" href="#"><span
                                        class="sub-sub-menu-text"><?php echo lang('Secondary menu'); ?></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="" href="/" target="_blank"><i class="fa fa-desktop fa-fw"></i>
                    <span class="menu-text"><?php echo lang('Reception preview'); ?></span></a>
                </li>
                <li><a class="" href="inbox.html"><i class="fa fa-envelope-o fa-fw"></i>
                    <span class="menu-text"><?php echo lang('Email'); ?></span></a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-th-list fa-fw"></i> <span class="menu-text"><?php echo lang('Order management'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="simple_table.html"><span
                                class="sub-menu-text"><?php echo lang('Order List'); ?></span></a>
                        </li>
                        <li><a class="" href="dynamic_tables.html"><span class="sub-menu-text"><?php echo lang('Order statistics'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-product-hunt fa-fw"></i> <span class="menu-text"><?php echo lang('Product'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="wizards_validations.html"><span class="sub-menu-text"><?php echo lang('Product list'); ?></span></a>
                        </li>
                        <li><a class="" href="rich_text_editors.html"><span
                                class="sub-menu-text"><?php echo lang('Add product'); ?></span></a></li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-buysellads fa-fw"></i> <span class="menu-text"><?php echo lang('Advertising'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="flot_charts.html"><span
                                class="sub-menu-text"><?php echo lang('Advertising list'); ?></span></a></li>
                        <li><a class="" href="xcharts.html"><span class="sub-menu-text"><?php echo lang('Add ads'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-book fa-fw"></i> <span class="menu-text"><?php echo lang('Article'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo url('/admin/article/articleList'); ?>"><span class="sub-menu-text"><?php echo lang('Article list'); ?></span></a>
                        </li>
                        <li><a class="" href="<?php echo url('/admin/article/articleEdit'); ?>"><span class="sub-menu-text"><?php echo lang('Add articles'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-database fa-fw"></i> <span class="menu-text">资源管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo url('/admin/photo/photoManagement'); ?>"><span class="sub-menu-text">相册管理</span></a>
                        </li>
                        <li><a class="" href="fixed_header.html"><span class="sub-menu-text">文档管理</span></a>
                        </li>
                    </ul>
                </li>
                <li><a class="" href="calendar.html"><i class="fa fa-calendar fa-fw"></i>
                    <span class="menu-text">日历
									<span class="tooltip-error pull-right" title="" data-original-title="3 New Events">
										<span class="label label-success">New</span>
									</span>
								</span>
                </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-map-marker fa-fw"></i> <span class="menu-text">地图管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="google_maps.html"><span class="sub-menu-text">店铺列表</span></a></li>
                        <li><a class="" href="vector_maps.html"><span class="sub-menu-text">添加标注</span></a></li>
                    </ul>
                </li>
                <li><a class="" href="gallery.html"><i class="fa fa-picture-o fa-fw"></i> <span
                        class="menu-text">相册</span></a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user fa-fw"></i> <span class="menu-text">会员管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="login.html"><span
                                class="sub-menu-text">管理员列表</span></a></li>
                        <li><a class="" href="login_bg.html"><span
                                class="sub-menu-text">管理员添加</span></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-briefcase fa-fw"></i> <span class="menu-text">权限管理<span
                            class="badge pull-right">3</span></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="search_results.html"><span class="sub-menu-text">角色列表</span></a>
                        </li>
                        <li><a class="" href="email_templates.html"><span
                                class="sub-menu-text">添加角色</span></a></li>

                    </ul>
                </li>
                <li><a class="" href="widgets_box.html"><i class="fa fa-lock fa-fw"></i> <span
                        class="menu-text">admin信息</span></a>
                </li>
            </ul>
            <!-- /SIDEBAR MENU -->
        </div>
    </div>
    <!-- /SIDEBAR -->
    <div id="main-content" class="margin-left-50">
        <!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
        <div class="container">
            <div class="row">
                <!--content-->
                <div id="content" class="col-lg-12">
                    <!-- PAGE HEADER-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <!-- STYLER -->

                                <!-- /STYLER -->
                                <!-- BREADCRUMBS -->
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a href="<?php echo url('/admin/index'); ?>"><?php echo lang('Home'); ?></a>
                                    </li>
                                    <li><?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章</li>
                                </ul>
                                <!-- /BREADCRUMBS -->

                                <div class="description"><?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章描述
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /PAGE HEADER -->
                    
<div class="row">
    <div class="col-xs-12 col-md-12 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <!-- BASIC -->
                <div class="box  ">
                    <div class="box-title">
                        <h4><i class="fa fa-bars"></i><?php if(($tag['edit'] == 1)): ?>添加<?php else: ?>编辑<?php endif; ?>文章</h4>
                    </div>
                    <div class="box-body big">
                        <form role="form" id="articlleForm" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="articleType">分类 <span style="color: red">*</span></label>
                                <select class="form-control" id="articleType" name="articleType">
                                    <option value="">请选择</option>

                                    <option value="1">Mysql</option>
                                    <option value="0">Linux</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="articleTitle">标题 <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="articleTitle" name="articleTitle" value="<?php echo $articleInfo['title']; ?>" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="articleDescription">简介 <span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="articleDescription" name="articleDescription" value="<?php echo $articleInfo['description']; ?>" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="articleAuthor">作者</label>
                                <input type="text" class="form-control" id="articleAuthor" name="articleAuthor" value="<?php echo $articleInfo['author']; ?>" placeholder="authoer">
                            </div>
                            <div class="form-group">
                                <label >图片 <span style="color: red">*</span></label>
                                <?php if(($tag['edit'] == 1)): ?>
                                <div class="page-container">
                                    <div id="uploader" class="wu-example">
                                        <div class="queueList">
                                            <div id="dndArea" class="placeholder">
                                                <div id="filePicker"></div>
                                                <p>或将照片拖到这里，单次最多可选300张</p>
                                            </div>
                                        </div>
                                        <div class="statusBar" style="display:none;">
                                            <div class="progress">
                                                <span class="text">0%</span>
                                                <span class="percentage"></span>
                                            </div><div class="info"></div>
                                            <div class="btns">
                                                <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <input type="hidden" name="id" value="<?php echo $tag['id']; ?>">
                                <div style="clear:both"></div>
                                <div class="panel-heading">
                                    <span class="panel-title"> 添加新图： </span>
                                    <div style="clear:both"></div>
                                    <input type="file"  name="file" onchange="PreviewImage(this)">
                                    <div style="clear:both"></div>
                                </div>
                                <div class="panel-heading">
                                    <span class="panel-title"> 图片预览：</span>
                                    <div style="clear:both"></div>
                                    <div id="imgPreview">
                                        <img id="img1" src="<?php echo $articleInfo['image']; ?>" class="img-rounded" alt="" width="100" height="100"/>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="divide-20"></div>
                            <div class="form-group">
                                <label for="isTop">是否置顶</label>
                                    <select class="form-control" style="width: 45%" name="isTop" id="isTop">
                                        <option value="">请选择</option>
                                        <option value="1">置顶</option>
                                        <option value="0">不置顶</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="addTime">发布时间</label>
                                <div class="controls">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        <input type="text" class="form-control" id="addTime"  name="addTime" value="<?php echo $articleInfo['add_time']; ?>" style="width: 44%" placeholder="添加时间">
                                        <!--<div class="input-group-addon clearBtns">x</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="container">内容 <span style="color: red">*</span></label>
                                <script id="container" name="container" type="text/plain"><?php echo htmlspecialchars($articleInfo['container']); ?></script>
                            </div>
                            <div class="separator"></div>
                            <button type="submit" class="btn btn-success">提交</button>
                            <button onclick="javascript:history.go(-1)" class="btn btn-primary">返回</button>
                        </form>
                    </div>
                </div>
                <!-- /BASIC -->
            </div>
        </div>
    </div>
</div>
<style>
    lablel > .error{color:red; border-color:red !important;}
</style>

                    <!-- /CALENDAR & CHAT -->
                </div>
                <div class="footer-text">
                        <span class="copyright-content">
                            Powered by <strong>cnit8</strong> v1.25 | Copyright <?php echo date("Y"); ?> &copy;
                            <a href="http://www.cnit8.com/" target="_blank">www.cnit8.com</a> All rights reserved.
                        </span>
                </div>
                <div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
                </div>
                <!-- /CONTENT-->
                <div class="separator"></div>
            </div>
        </div>
    </div>
</section>
<!--/PAGE -->
<!-- JAVASCRIPTS -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQUERY -->
<script type="text/javascript" src="/static/lib/jquery/jquery-2.1.4.min.js"></script>
<!--JQUERY COOKIE-->
<script type="text/javascript" src="/static/lib/jquery-cookie/src/jquery.cookie.js"></script>
<!-- BOOTSTRAP -->
<script type="text/javascript" src="/static/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPT -->
<script type="text/javascript" src="/static/admin/js/public.js"></script>
<!-- /JAVASCRIPTS -->

<!--webuploader-->
<script src="/static/lib/webuploader/webuploader.min.js"></script>
<script src="/static/lib/webuploader/webuploader_demo.js"></script>
<!--validation-->
<script src="/static/lib/validation/dist/jquery.validate.min.js"></script>
<script src="/static/lib/validation/dist/additional-methods.min.js"></script>
<script src="/static/lib/validation/dist/localization/messages_zh.min.js"></script>
<!--daterangepicker-->
<script src="/static/lib/daterangepicker/moment.min.js"></script>
<script src="/static/lib/daterangepicker/daterangepicker.js"></script>
<!-- ueditor配置文件 -->
<script type="text/javascript" src="/static/lib/ueditor/ueditor.config.js"></script>
 <!--ueditor编辑器源码文件-->
<script type="text/javascript" src="/static/lib/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init(); //Initialise plugins and elements
    });
    function PreviewImage(imgFile) {
        var filextension = imgFile.value.substring(imgFile.value.lastIndexOf("."), imgFile.value.length);
        filextension = filextension.toLowerCase();
        if ((filextension != '.jpg') && (filextension != '.gif') && (filextension != '.jpeg') && (filextension != '.png') && (filextension != '.bmp')) {
            alert("对不起，系统仅支持标准格式的照片，请您调整格式后重新上传，谢谢 !");
            imgFile.focus();
        }
        else {
            var path;
            if (document.all)//IE
            {
                imgFile.select();
                path = document.selection.createRange().text;
                document.getElementById("imgPreview").innerHTML = "";
                document.getElementById("imgPreview").style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='scale',src=\"" + path + "\")";//使用滤镜效果
            }
            else//FF
            {
                path = window.URL.createObjectURL(imgFile.files[0]);// FF 7.0以上
                //path = imgFile.files[0].getAsDataURL();// FF 3.0
                document.getElementById("imgPreview").innerHTML = "<img id='img1'  class='img-rounded' alt='' width='100px' height='100px' src='" + path + "'/>";
                //document.getElementById("img1").src = path;
            }
        }
    }
    //set time
    $("#addTime").daterangepicker({
            //日期或字符串）最初选择的日期范围的开始日期。如果您提供了一个字符串，它必须与您的locale设置中设置的日期格式字符串匹配。
            "startDate": moment().subtract(29, 'days'),
            //（日期或字符串）最初选择的日期范围的结束日期。
            "endDate": moment(),
            //（日期或字符串）用户可以选择的最早日期。
            "minDate":'01/01/2017',
            // （日期或字符串）用户可以选择的最新日期。
            "maxDate": '12/31/2019',
            //(对象）所选开始和结束日期之间的最大跨度。maxSpan在配置生成器中检查一个如何使用它的例子。您可以提供该moment库允许您添加到日期的任何对象。
            "maxSpan": {
                "days": 60
            },
            //（true / false）显示日历上方的年份和月份选择框，以跳转到特定的月份和年份。
            "showDropdowns": true,
            //（数字）下拉列表中显示的最小年份showDropdowns设置为true。
            "minYear":'2010',
            //(数字）下拉列表中显示的最大年份showDropdowns设置为true。
            "maxYear":'2020',
            //(true / false）在日历的每周开始时显示本地化的星期编号。
            "showWeekNumbers": true,
            //（真/假）在日历上的每周开始时显示ISO星期数。
            "showISOWeekNumbers":false,
            //（true / false）添加选择框以选择日期以外的时间。
            "timePicker": true,
            //（数字）分钟选择列表的时间增量（即30，只允许选择以0或30结尾的时间）
            "timePickerIncrement":1,
            //（true / false）使用24小时而不是12小时的时间，取消AM / PM选择
            "timePicker24Hour": true,
            //true / false）在timePicker中显示秒数
            "timePickerSeconds": true,
            //设置用户可以从中选择的预定义日期范围。每个键都是范围的标签，其值是一个数组，其中两个日期代表范围的界限。
            "ranges": {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //（true / false）ranges使用该选项时，在预定范围列表的末尾显示“Custom Range” 。只要当前日期范围选择与预定义的范围之一不匹配，该选项就会突出显示。点击它将显示日历以选择新的范围。
            "showCustomRangeLabel": true,
            //（true / false）通常，如果您使用该ranges选项指定预定义日期范围，则用户单击“自定义范围”之前，不会显示用于选择自定义日期范围的日历。当此选项设置为true时，将始终显示用于选择自定义日期范围的日历。
            "alwaysShowCalendars": true,
            //（'left'/'right'/'center'）该选择器是否显示在左侧，右侧或与其相连的HTML元素对齐的位置。
            "opens":'right',
            //（'down'/'up'）选择器是否出现在下面（默认）或高于它所连接的HTML元素。
            "drops":'down',
            //（字符串）将被添加到应用和取消按钮的CSS类名称。
            "buttonClasses":'btn btn-default',
            //（字符串）将仅添加到应用按钮的CSS类名称。
            "applyButtonClasses":'btn-small btn-primary',
            //（string）将仅添加到取消按钮的CSS类名称。
            "cancelButtonClasses":'btn-small btn-primary',
            //（object）允许您为按钮和标签提供本地化的字符串，自定义日期格式，并更改日历的第一个星期几。locale在配置生成器中检查以了解如何自定义这些选项。
            "locale": {
                "format": "YYYY/MM/DD HH:mm:ss",
                "separator": " - ",
                "applyLabel": "应用",
                "cancelLabel": "取消",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "Su",
                    "Mo",
                    "Tu",
                    "We",
                    "Th",
                    "Fr",
                    "Sa"
                ],
                "monthNames": [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ],
                "firstDay": 1
            },
            //true / false）隐藏应用和取消按钮，并在点击两个日期后自动应用新的日期范围。
            "autoApply":false,
            //（true / false）仅显示一个日历来选择一个日期，而不是具有两个日历的范围选择器。提供给您的回调的开始日期和结束日期将选择相同的单一日期。
            "singleDatePicker": true,
            //（true / false）启用后，显示的两个日历将始终为连续两个月（即一月和二月），并且在点击日历上方的左侧或右侧箭头时，两者都将被提前。禁用时，两个日历可以单独进阶并显示任何月份/年份。
            "linkedCalendars": false,
            //（true / false）指示日期范围选择器是否应自动更新其<input>在初始化时以及选定日期更改时所附的元素的值。
            "autoUpdateInput": false,

        },
        function(start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            $("#addTime").val(start.format('YYYY-MM-DD HH:mm:ss'));
        }
    );
    //get user Language
     function lang() {
        if ($.cookie('think_var') == 'en-us'){
            return 'en';
        } else {
            return 'zh-cn'
        }
    }
    //set uedit
    var ue = UE.getEditor('container',{
        toolbars: [
            [
                'fullscreen', 'source', '|', 'undo', 'redo', '|',
                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                'directionalityltr', 'directionalityrtl', 'indent', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
                'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', '|',
                'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
                'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
                'print', 'preview', 'searchreplace', 'drafts', 'help'
            ]
        ],
        autoHeightEnabled: false,
        autoFloatEnabled: true,
        // lang:(navigator.language||navigator.browserLanguage ||navigator.userLanguage).toLowerCase(),
        lang:lang(),
        langPath:"/static/lib/ueditor/lang/",
        initialFrameHeight:400,
    });
   /* ue.ready(function() {
        //设置编辑器的内容
        // ue.setContent('hello');
        //获取html内容，返回: <p>hello</p>
        var html = ue.getContent();
        //获取纯文本内容，返回: hello
        var txt = ue.getContentTxt();
        var lang = ue.getOpt('lang');
        console.log(lang);
    });*/

    /*************************插件新功能-设置插件validator的默认参数*****************************************/
    $.validator.setDefaults({
        /*关闭键盘输入时的实时校验*/
        onkeyup: null,
        /*添加校验成功后的执行函数--修改提示内容，并为正确提示信息添加新的样式(默认是valid)*/
        success: function(label){
            /*label的默认正确样式为valid，需要通过validClass来重置，否则这里添加的其他样式不能被清除*/
            label.text('').addClass('valid');
        },
        /*/!*重写校验元素获得焦点后的执行函数--增加[1.光标移入元素时的帮助提示,2.校验元素的高亮显示]两个功能点*!/
        onfocusin: function( element ) {
            this.lastActive = element;

            /!*1.帮助提示功能*!/
            this.addWrapper(this.errorsFor(element)).hide();
            var tip = $(element).attr('tip');
            //alert(tip);
            if(tip && $(element).parent().children(".tip").length === 0){
                $(element).parent().append("<label class='tip'>" + tip + "</label>");
            }

            /!*2.校验元素的高亮显示*!/
            $(element).addClass('highlight');

            // Hide error label and remove error class on focus if enabled
            if ( this.settings.focusCleanup ) {
                if ( this.settings.unhighlight ) {
                    this.settings.unhighlight.call( this, element, this.settings.errorClass, this.settings.validClass );
                }
                this.hideThese( this.errorsFor( element ) );
            }
        },
        /!*重写校验元素焦点离开时的执行函数--移除[1.添加的帮助提示,2.校验元素的高亮显示]*!/
        onfocusout: function( element ) {
            /!*1.帮助提示信息移除*!/
            $(element).parent().children(".tip").remove();

            /!*2.校验元素高亮样式移除*!/
            $(element).removeClass('highlight');

            /!*3.替换下面注释的原始代码，任何时候光标离开元素都触发校验功能*!/
            //this.element( element );

            if ( !this.checkable( element ) && ( element.name in this.submitted || !this.optional( element ) ) ) {
                this.element( element );
            }
        }*/
    });

    //自定义方法，完成手机号码的验证
    //name:自定义方法的名称，method：函数体, message:错误消息
  /*  $.validator.addMethod("phone", function(value, element, param){
        //方法中又有三个参数:value:被验证的值， element:当前验证的dom对象，param:参数(多个即是数组)
        //alert(value + "," + $(element).val() + "," + param[0] + "," + param[1]);
        return new RegExp(/^1[3458]\d{9}$/).test(value);

    }, "手机号码不正确");*/
   $(document).ready(function () {
        $("#articlleForm").validate({
            // debug:true,
            rules:{
                articleType:{
                    required:true,
                },
                articleTitle:{
                    required:true,
                },
                articleDescription:{
                    required:true,
                },
                articleImage:{
                    required:true,
                }
            }
        });
   });
</script>

</body>
</html>