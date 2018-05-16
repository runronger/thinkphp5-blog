<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"theme/admin/article/article_edit.html";i:1526443288;s:46:"/home/rong/WEBROOT/tp5/theme/admin/layout.html";i:1526381938;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>添加文章</title>
    <meta name="keywords" content="添加文章">
    <meta name="description" content="添加文章">
    <meta name="author" content="dengrongqiu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/cloud-admin.min.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/themes/default.min.css" id="skin-switcher">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.min.css">
    
<!-- blueimp Gallery styles -->
<!--<link rel="stylesheet" href="/static/lib/Gallery/css/blueimp-gallery.min.css">-->
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="/static/lib/jQueryFileUpload/css/jquery.fileupload.css">
<!--<link rel="stylesheet" href="/static/lib/jQueryFileUpload/css/jquery.fileupload-ui.css">-->
<!-- CSS adjustments for browsers with JavaScript disabled -->
<!--<noscript><link rel="stylesheet" href="/static/lib/jQueryFileUpload/css/jquery.fileupload-noscript.css"></noscript>-->
<!--<noscript><link rel="stylesheet" href="/static/lib/jQueryFileUpload/css/jquery.fileupload-ui-noscript.css"></noscript>-->
<link rel="stylesheet" type="text/css" href="/static/lib/daterangepicker/daterangepicker.css">

    <!-- STYLESHEETS --><!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="/static/lib/html5shiv/dist/html5shiv.min.js"></script>
    <script type="text/javascript" src="/static/lib/css3-mediaqueries-js/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <link href="/static/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="/static/lib/animate/animate.min.css"/>
    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="/static/lib/bootstrap/css/bootstrap.min.css"/>
</head>
<body>
<!-- HEADER -->
<header class="navbar clearfix" id="header">
    <div class="container">
        <div class="navbar-brand ">
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
            <div id="sidebar-collapse" class="sidebar-collapse btn">
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
    <div id="sidebar" class="sidebar">
        <div class="sidebar-menu nav-collapse">
            <div class="divide-20"></div>
            <!-- SEARCH BAR -->
            <div id="search-bar">
                <input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
            </div>
            <!-- /SEARCH BAR -->

            <!-- SIDEBAR QUICK-LAUNCH -->
            <!-- <div id="quicklaunch">
            <!-- /SIDEBAR QUICK-LAUNCH -->

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
                        <li><a class="" href="<?php echo url('/admin/article/articleAdd'); ?>"><span class="sub-menu-text"><?php echo lang('Add articles'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-database fa-fw"></i> <span class="menu-text">资源管理</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="mini_sidebar.html"><span class="sub-menu-text">相册管理</span></a>
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
    <div id="main-content">
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
                                    <li>添加文章</li>
                                </ul>
                                <!-- /BREADCRUMBS -->

                                <div class="description">添加文章描述
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
                <div class="box border blue">
                    <div class="box-title">
                        <h4><i class="fa fa-bars"></i>添加文章</h4>
                        <div class="tools hidden-xs">
                            <a href="#box-config" data-toggle="modal" class="config">
                                <i class="fa fa-cog"></i>
                            </a>
                            <a href="javascript:;" class="reload">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <a href="javascript:;" class="collapse">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a href="javascript:;" class="remove">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="box-body big">
                        <h3 class="form-title">添加文章</h3>
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">标题</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">简介</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">作者</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="authoer">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">图片</label>
                                <div class="jquery-fileupload">
                                    <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        <!-- The file input field used as target for the file upload widget -->
                                        <input id="fileupload" type="file" name="files[]" multiple="">
                                    </span>
                                    <br>
                                    <br>
                                    <!-- The global progress bar -->
                                    <div id="progress" class="progress">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>
                                    <!-- The container for the uploaded files -->
                                    <div id="files" class="files"></div>


                                    <div>
                                        <img id="image" src="">
                                    </div>
                                    <div id="progressss">
                                        <div class="bar" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="divide-20"></div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">是否置顶</label>
                                    <select class="form-control">
                                        <option value="">请选择</option>
                                        <option value="1">置顶</option>
                                        <option value="0">不置顶</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">发布时间</label>
                                <div class="controls">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span><input type="text" class="form-control" id="addTime" placeholder="添加时间" name="filter[article.add_times]" value="">
                                        <!--<div class="input-group-addon clearBtns">x</div>-->
                                    </div>
                                </div>
                            </div>
                            <label for="exampleInputPassword1">内容</label>
                            <script id="container" name="content" type="text/plain">这里写你的初始化内容</script>
                            <div class="separator"></div>
                            <button type="submit" class="btn btn-success">提交</button>
                        </form>

                    </div>
                </div>
                <!-- /BASIC -->
            </div>
        </div>
    </div>
</div>


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
<!-- JQUERY UI-->
<script type="text/javascript" src="/static/lib/jquery-ui/jquery-ui.min.js"></script>
<!--JQUERY COOKIE-->
<script type="text/javascript" src="/static/lib/jquery-cookie/src/jquery.cookie.js"></script>
<!-- BOOTSTRAP -->
<script type="text/javascript" src="/static/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPT -->
<script type="text/javascript" src="/static/admin/js/script.js"></script>

<script src="/static/lib/jQueryFileUpload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>



<script src="/static/lib/jQueryFileUpload/js/jquery.iframe-transport.js"></script>
<script src="/static/lib/jQueryFileUpload/js/jquery.fileupload.js"></script>
<script src="/static/lib/jQueryFileUpload/js/jquery.fileupload-process.js"></script>
<script src="/static/lib/jQueryFileUpload/js/jquery.fileupload-image.js"></script>
<script src="/static/lib/jQueryFileUpload/js/jquery.fileupload-validate.js"></script>


<script src="/static/lib/daterangepicker/moment.min.js"></script>
<script src="/static/lib/daterangepicker/daterangepicker.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="/static/lib/ueditor/ueditor.config.js"></script>
 编辑器源码文件
<script type="text/javascript" src="/static/lib/ueditor/ueditor.all.min.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    /*jslint unparam: true, regexp: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : 'server/php/',
            uploadButton = $('<button/>')
                .addClass('btn btn-primary')
                .prop('disabled', true)
                .text('Processing...')
                .on('click', function () {
                    var $this = $(this),
                        data = $this.data();
                    $this
                        .off('click')
                        .text('Abort')
                        .on('click', function () {
                            $this.remove();
                            data.abort();
                        });
                    data.submit().always(function () {
                        $this.remove();
                    });
                });
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            autoUpload: false,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            maxFileSize: 999000,
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            previewMaxWidth: 100,
            previewMaxHeight: 100,
            previewCrop: true
        }).on('fileuploadadd', function (e, data) {
            data.context = $('<div/>').appendTo('#files');
            $.each(data.files, function (index, file) {
                var node = $('<p/>')
                    .append($('<span/>').text(file.name));
                if (!index) {
                    node
                        .append('<br>')
                        .append(uploadButton.clone(true).data(data));
                }
                node.appendTo(data.context);
            });
        }).on('fileuploadprocessalways', function (e, data) {
            var index = data.index,
                file = data.files[index],
                node = $(data.context.children()[index]);
            if (file.preview) {
                node
                    .prepend('<br>')
                    .prepend(file.preview);
            }
            if (file.error) {
                node
                    .append('<br>')
                    .append($('<span class="text-danger"/>').text(file.error));
            }
            if (index + 1 === data.files.length) {
                data.context.find('button')
                    .text('Upload')
                    .prop('disabled', !!data.files.error);
            }
        }).on('fileuploadprogressall', function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }).on('fileuploaddone', function (e, data) {
            $.each(data.result.files, function (index, file) {
                if (file.url) {
                    var link = $('<a>')
                        .attr('target', '_blank')
                        .prop('href', file.url);
                    $(data.context.children()[index])
                        .wrap(link);
                } else if (file.error) {
                    var error = $('<span class="text-danger"/>').text(file.error);
                    $(data.context.children()[index])
                        .append('<br>')
                        .append(error);
                }
            });
        }).on('fileuploadfail', function (e, data) {
            $.each(data.files, function (index) {
                var error = $('<span class="text-danger"/>').text('File upload failed.');
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            });
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });




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
    var ue = UE.getEditor('container');
</script>

<script>
    jQuery(document).ready(function () {
        App.setPage("index");  //Set current page
        App.init(); //Initialise plugins and elements
    });
</script>
<!-- /JAVASCRIPTS -->
</body>
</html>