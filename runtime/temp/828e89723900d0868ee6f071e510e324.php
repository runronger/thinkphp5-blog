<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"theme/admin/article/article_list.html";i:1526525704;s:46:"/home/rong/WEBROOT/tp5/theme/admin/layout.html";i:1526523131;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>文章列表</title>
    <meta name="keywords" content="文章列表">
    <meta name="description" content="文章列表">
    <meta name="author" content="dengrongqiu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/cloud-admin.min.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/themes/default.min.css" id="skin-switcher">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.min.css">
    <!-- STYLESHEETS --><!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="/static/lib/html5shiv/dist/html5shiv.min.js"></script>
    <script type="text/javascript" src="/static/lib/css3-mediaqueries-js/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <link href="/static/lib/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- ANIMATE -->
    <link rel="stylesheet" type="text/css" href="/static/lib/animate/animate.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="/static/lib/daterangepicker/daterangepicker.css">

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
                                    <li>文章列表</li>
                                </ul>
                                <!-- /BREADCRUMBS -->

                                <div class="description">文章列表描述
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /PAGE HEADER -->
                    
    <div class="row">
       <div class="col-xs-12 col-md-12 col-lg-12">
           <div class="box">
               <div class="box-title">
                   <h4><i class="fa fa-bars"></i>搜索</h4>

               </div>
               <div class="box-body big">
                   <div class="row">
                       <div class="widget-body floatleft">
                           <form role="form">

                               <div class="col-sm-3 no-padding">
                                   <div class="form-group">
                                       <label >编号</label>
                                       <input type="text" class="form-control" placeholder="编号" name="filter[order.id]" value="">
                                   </div>
                               </div>

                               <div class="col-sm-3">
                                   <div class="form-group">
                                       <label >标题</label>
                                       <input type="text" class="form-control" placeholder="标题" name="filter[order.order_sn]" value="">
                                   </div>
                               </div>

                               <div class="col-sm-3">
                                   <div class="form-group">
                                       <label >描述</label>
                                       <input type="text" class="form-control" placeholder="描述" name="filter[order.sign]" value="">
                                   </div>
                               </div>

                               <div class="col-sm-3 no-padding">
                                   <div class="form-group">
                                       <label >作者</label>
                                       <input type="email" class="form-control" placeholder="作者" name="filter[user.email]" value="">
                                   </div>
                               </div>

                               <div class="col-sm-3 no-padding">

                                   <div class="form-group">
                                       <label >添加时间</label>

                                       <div class="controls">
                                           <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span><input type="text" class="form-control" id="addTime" placeholder="添加时间" name="filter[article.add_times]" value="">
                                               <!--<div class="input-group-addon clearBtns">x</div>-->
                                           </div>
                                       </div>
                                   </div>

                               </div>

                               <div class="col-sm-3">

                                   <div class="form-group">
                                       <label >修改时间</label>

                                       <div class="controls">
                                           <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span><input type="text" class="form-control" id="editTime" placeholder="修改时间" name="filter[order.pay_times]" value="">
                                               <!--<div class="input-group-addon clearBtns">x</div>-->
                                           </div>
                                       </div>
                                   </div>
                               </div>



                               <div class="col-sm-3">
                                   <div class="form-group">
                                       <label >置顶</label>
                                       <!--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                                       <select id="e1" class="form-control" style="width:100%;" name="filter[order.status]">
                                           <option value="">请选择</option>
                                           <option value="0">未置顶</option>
                                           <option value="1">已置顶</option>
                                       </select>

                                   </div>
                               </div>



                               <div class="col-sm-12 no-padding">
                                   <button type="submit" name="doSearch" class="btn btn-primary">搜索</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>

    </div>


    <div class="row">
        <div class="col-xs-12 col-md-12 col-md-12">
            <!-- BOX -->
            <div class="box">
                <div class="box-title">
                    <h4><i class="fa fa-table"></i>文章列表</h4>
                    <div class="tools">
                        <a href="javascript:;" class="btn btn-xs btn-success" style="color: #ffffff;">导出
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th width="3%">编号</th>
                            <th width="3%" style="width: 60px; height: 60px">图片</th>
                            <th width="15%">标题</th>
                            <th width="35%">描述</th>
                            <th width="5%">置顶</th>
                            <th width="5%">作者</th>
                            <th width="8%">添加时间</th>
                            <th width="8%">修改时间</th>
                            <th width="15%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="/static/images/wall_page/1.jpg" style="width: 60px; height: 60px"></td>
                            <td>Laravel 的 Blade 模板引擎</td>
                            <td>Blade 是 Laravel 提供的一个简单而又强大的模板引擎。和其他流行的 PHP 模板引擎不同，Blade 并不限制你在视图中使用原生 PHP 代码。</td>
                            <td>admin</td>
                            <td>admin</td>
                            <td>2018-05-12 16:30:23</td>
                            <td>2018-05-12 16:30:23</td>
                            <td>
                                <a class="btn btn-primary">置顶</a>
                                <a class="btn btn-success">编辑</a>
                                <a class="btn btn-warning">删除</a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /BOX -->
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
<!--JQUERY COOKIE-->
<script type="text/javascript" src="/static/lib/jquery-cookie/src/jquery.cookie.js"></script>
<!-- BOOTSTRAP -->
<script type="text/javascript" src="/static/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPT -->
<script type="text/javascript" src="/static/admin/js/public.js"></script>
<!-- /JAVASCRIPTS -->

    <script src="/static/lib/daterangepicker/moment.min.js"></script>
    <script src="/static/lib/daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init(); //Initialise plugins and elements
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
            "opens":'center',
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
            "singleDatePicker": false,
            //（true / false）启用后，显示的两个日历将始终为连续两个月（即一月和二月），并且在点击日历上方的左侧或右侧箭头时，两者都将被提前。禁用时，两个日历可以单独进阶并显示任何月份/年份。
            "linkedCalendars": false,
            //（true / false）指示日期范围选择器是否应自动更新其<input>在初始化时以及选定日期更改时所附的元素的值。
            "autoUpdateInput": false,

        },
            function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                $("#addTime").val(start.format('YYYY-MM-DD HH:mm:ss') + ' - ' + end.format('YYYY-MM-DD HH:mm:ss'));
            }
        );
        $("#editTime").daterangepicker({
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
                "opens":'center',
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
                "singleDatePicker": false,
                //（true / false）启用后，显示的两个日历将始终为连续两个月（即一月和二月），并且在点击日历上方的左侧或右侧箭头时，两者都将被提前。禁用时，两个日历可以单独进阶并显示任何月份/年份。
                "linkedCalendars": false,
                //（true / false）指示日期范围选择器是否应自动更新其<input>在初始化时以及选定日期更改时所附的元素的值。
                "autoUpdateInput": false,

            },
            function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                $("#editTime").val(start.format('YYYY-MM-DD HH:mm:ss') + ' - ' + end.format('YYYY-MM-DD HH:mm:ss'));
            }
        );
    </script>

</body>
</html>