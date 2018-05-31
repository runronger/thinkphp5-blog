<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:28:"theme/admin/index/index.html";i:1526466499;s:46:"/home/rong/WEBROOT/tp5/theme/admin/layout.html";i:1527670863;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>cese</title>
    <meta name="keywords" content="cese">
    <meta name="description" content="cese">
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
                        <li><a class="" href="<?php echo url('/admin/article/articleList'); ?>"><span class="sub-menu-text"><?php echo lang('Article_list'); ?></span></a>
                        </li>
                        <li><a class="" href="<?php echo url('/admin/article/articleEdit'); ?>"><span class="sub-menu-text"><?php echo lang('Add_articles'); ?></span></a>
                        </li>
                        <li><a class="" href="<?php echo url('/admin/article/typeList'); ?>"><span class="sub-menu-text"><?php echo lang('type_list'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-picture-o fa-fw"></i> <span class="menu-text"><?php echo lang('Gallery'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub" style="display: none;">
                        <li><a class="" href="<?php echo url('/admin/gallery/photoList'); ?>"><span class="sub-menu-text"><?php echo lang('Gallery_list'); ?></span></a>
                        </li>
                        <li><a class="" href="<?php echo url('/admin/gallery/galleryList'); ?>"><span class="sub-menu-text"><?php echo lang('Gallery_type'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-file fa-fw"></i> <span class="menu-text"><?php echo lang('Resource'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo url('/admin/document/documentList'); ?>"><span class="sub-menu-text"><?php echo lang('Document_list'); ?></span></a>
                        </li>
                        <li><a class="" href="<?php echo url('/admin/document/documentType'); ?>"><span class="sub-menu-text"><?php echo lang('Document_type'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <li><a class="" href="calendar.html"><i class="fa fa-calendar fa-fw"></i>
                    <span class="menu-text"><?php echo lang('calendar'); ?>
                        <span class="tooltip-error pull-right" title="" data-original-title="3 New Events">
                            <span class="label label-success">New</span>
                        </span>
                    </span>
                </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-map-marker fa-fw"></i> <span class="menu-text"><?php echo lang('Map'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="google_maps.html"><span
                                class="sub-menu-text"><?php echo lang('Map_list'); ?></span></a></li>
                        <li><a class="" href="vector_maps.html"><span class="sub-menu-text"><?php echo lang('Add_labels'); ?></span></a>
                        </li>
                    </ul>
                </li>
                <!--<li><a class="" href=""><i class="fa fa-picture-o fa-fw"></i> <span
                        class="menu-text"><?php echo lang('Gallery'); ?></span></a>
                </li>-->
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-user fa-fw"></i> <span class="menu-text"><?php echo lang('member'); ?></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="login.html"><span
                                class="sub-menu-text"><?php echo lang('Member_list'); ?></span></a></li>
                        <li><a class="" href="login_bg.html"><span
                                class="sub-menu-text"><?php echo lang('Member_add'); ?></span></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <i class="fa fa-briefcase fa-fw"></i> <span class="menu-text"><?php echo lang('Authority'); ?><span
                            class="badge pull-right">3</span></span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="search_results.html"><span
                                class="sub-menu-text"><?php echo lang('Role_list'); ?></span></a>
                        </li>
                        <li><a class="" href="email_templates.html"><span
                                class="sub-menu-text"><?php echo lang('Add_role'); ?></span></a></li>

                    </ul>
                </li>
                <li><a class="" href="widgets_box.html"><i class="fa fa-lock fa-fw"></i> <span
                        class="menu-text">Admin</span></a>
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
                                    <li>数据统计</li>
                                </ul>
                                <!-- /BREADCRUMBS -->

                                <div class="description">数据统计描述
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /PAGE HEADER -->
                    数据统计描述
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

<script>
    jQuery(document).ready(function () {
        App.init(); //Initialise plugins and elements
    });
</script>

</body>
</html>