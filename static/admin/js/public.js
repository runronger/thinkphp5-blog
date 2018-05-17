var App = function () {
    var currentPage = ''; // current page
    var collapsed = false; //sidebar collapsed
    var is_mobile = false; //is screen mobile?
    var is_mini_menu = false; //is mini-menu activated
    var is_fixed_header = false; //is fixed header activated
    var responsiveFunctions = []; //responsive function holder
    /*-----------------------------------------------------------------------------------*/
    /*	Runs callback functions set by App.addResponsiveFunction()
    /*  运行由App.addResponsiveFunction（）设置的回调函数
    /*-----------------------------------------------------------------------------------*/
    var runResponsiveFunctions = function () {
        // reinitialize other subscribed elements
        for (var i in responsiveFunctions) {
            var each = responsiveFunctions[i];
            each.call();
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	To get the correct viewport width based on  http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/
    /*  根据http://andylangton.co.uk/articles/javascript/get-viewport-size-javascript/获取正确的视口宽度
    /*-----------------------------------------------------------------------------------*/
    var getViewPort = function () {
        var e = window, a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Check layout size 检查布局大小
    /*-----------------------------------------------------------------------------------*/
    var checkLayout = function () {
        //Check if sidebar has mini-menu
        is_mini_menu = $('#sidebar').hasClass('mini-menu');
        //Check if fixed header is activated
        is_fixed_header = $('#header').hasClass('navbar-fixed-top');
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Sidebar & Main Content size match
    /*-----------------------------------------------------------------------------------*/
    var handleSidebarAndContentHeight = function () {
        var content = $('#content');
        var sidebar = $('#sidebar');
        var body = $('body');
        var height;

        if (body.hasClass('sidebar-fixed')) {
            height = $(window).height() - $('#header').height() + 1;
        } else {
            height = sidebar.height() + 20;
        }
        if (height >= content.height()) {
            content.attr('style', 'min-height:' + height + 'px !important');
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Sidebar 侧边栏
    /*-----------------------------------------------------------------------------------*/
    var handleSidebar = function () {
        jQuery('.sidebar-menu .has-sub > a').click(function () {
            var last = jQuery('.has-sub.open', $('.sidebar-menu'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);

            var thisElement = $(this);
            var slideOffeset = -200;
            var slideSpeed = 200;

            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
                sub.slideUp(slideSpeed, function () {
                    if ($('#sidebar').hasClass('sidebar-fixed') == false) {
                        App.scrollTo(thisElement, slideOffeset);
                    }
                    handleSidebarAndContentHeight();
                });
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(slideSpeed, function () {
                    if ($('#sidebar').hasClass('sidebar-fixed') == false) {
                        App.scrollTo(thisElement, slideOffeset);
                    }
                    handleSidebarAndContentHeight();
                });
            }
        });

        // Handle sub-sub menus
        jQuery('.sidebar-menu .has-sub .sub .has-sub-sub > a').click(function () {
            var last = jQuery('.has-sub-sub.open', $('.sidebar-menu'));
            last.removeClass("open");
            jQuery('.arrow', last).removeClass("open");
            jQuery('.sub', last).slideUp(200);

            var sub = jQuery(this).next();
            if (sub.is(":visible")) {
                jQuery('.arrow', jQuery(this)).removeClass("open");
                jQuery(this).parent().removeClass("open");
                sub.slideUp(200);
            } else {
                jQuery('.arrow', jQuery(this)).addClass("open");
                jQuery(this).parent().addClass("open");
                sub.slideDown(200);
            }
        });
    }

    /*-----------------------------------------------------------------------------------*/
    /*	Collapse Sidebar Programatically 以编程方式折叠侧边栏
    /*-----------------------------------------------------------------------------------*/
    var collapseSidebar = function () {
        var iconElem = document.getElementById("sidebar-collapse").querySelector('[class*="fa-"]');
        var iconLeft = iconElem.getAttribute("data-icon1");
        var iconRight = iconElem.getAttribute("data-icon2");
        /* For Navbar */
        jQuery('.navbar-brand').addClass("mini-menu");
        /* For sidebar */
        jQuery('#sidebar').addClass("mini-menu");
        jQuery('#main-content').addClass("margin-left-50");
        jQuery('.sidebar-collapse i').removeClass(iconLeft);
        jQuery('.sidebar-collapse i').addClass(iconRight);
        /* Remove placeholder from Search Bar */
        jQuery('.search').attr('placeholder', '');
        collapsed = true;
        /* Set a cookie so that mini-sidebar persists */
        $.cookie('mini_sidebar', '1');
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Responsive Sidebar Collapse 响应式侧边栏折叠
    /*-----------------------------------------------------------------------------------*/
    var responsiveSidebar = function () {
        //Handle sidebar collapse on screen width
        var width = $(window).width();
        if (width < 768) {
            is_mobile = true;
            //Hide the sidebar completely
            jQuery('#main-content').addClass("margin-left-0");
        }
        else {
            is_mobile = false;
            //Show the sidebar completely
            jQuery('#main-content').removeClass("margin-left-0");
            var menu = $('.sidebar');
            if (menu.parent('.slimScrollDiv').size() === 1) { // destroy existing instance before resizing
                menu.slimScroll({
                    destroy: true
                });
                menu.removeAttr('style');
                $('#sidebar').removeAttr('style');
            }
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Sidebar Collapse 侧边栏折叠
    /*-----------------------------------------------------------------------------------*/
    var handleSidebarCollapse = function () {
        var viewport = getViewPort();
        if ($.cookie('mini_sidebar') === '1') {
            /* For Navbar */
            jQuery('.navbar-brand').addClass("mini-menu");
            /* For sidebar */
            jQuery('#sidebar').addClass("mini-menu");
            jQuery('#main-content').addClass("margin-left-50");
            collapsed = true;
        }
        //Handle sidebar collapse on user interaction
        jQuery('.sidebar-collapse').click(function () {
            //Handle mobile sidebar toggle
            if (is_mobile && !(is_mini_menu)) {
                //If sidebar is collapsed
                if (collapsed) {
                    jQuery('body').removeClass("slidebar");
                    jQuery('.sidebar').removeClass("sidebar-fixed");
                    //Add fixed top nav if exists
                    if (is_fixed_header) {
                        jQuery('#header').addClass("navbar-fixed-top");
                        jQuery('#main-content').addClass("margin-top-100");
                    }
                    collapsed = false;
                    $.cookie('mini_sidebar', '0');
                }
                else {
                    jQuery('body').addClass("slidebar");
                    jQuery('.sidebar').addClass("sidebar-fixed");
                    //Remove fixed top nav if exists
                    if (is_fixed_header) {
                        jQuery('#header').removeClass("navbar-fixed-top");
                        jQuery('#main-content').removeClass("margin-top-100");
                    }
                    collapsed = true;
                    $.cookie('mini_sidebar', '1');
                    handleMobileSidebar();
                }
            }
            else { //Handle regular sidebar toggle
                var iconElem = document.getElementById("sidebar-collapse").querySelector('[class*="fa-"]');
                var iconLeft = iconElem.getAttribute("data-icon1");
                var iconRight = iconElem.getAttribute("data-icon2");
                //If sidebar is collapsed
                if (collapsed) {
                    /* For Navbar */
                    jQuery('.navbar-brand').removeClass("mini-menu");
                    /* For sidebar */
                    jQuery('#sidebar').removeClass("mini-menu");
                    jQuery('#main-content').removeClass("margin-left-50");
                    jQuery('.sidebar-collapse i').removeClass(iconRight);
                    jQuery('.sidebar-collapse i').addClass(iconLeft);
                    /* Add placeholder from Search Bar */
                    jQuery('.search').attr('placeholder', "Search");
                    collapsed = false;
                    $.cookie('mini_sidebar', '0');
                }
                else {
                    /* For Navbar */
                    jQuery('.navbar-brand').addClass("mini-menu");
                    /* For sidebar */
                    jQuery('#sidebar').addClass("mini-menu");
                    jQuery('#main-content').addClass("margin-left-50");
                    jQuery('.sidebar-collapse i').removeClass(iconLeft);
                    jQuery('.sidebar-collapse i').addClass(iconRight);
                    /* Remove placeholder from Search Bar */
                    jQuery('.search').attr('placeholder', '');
                    collapsed = true;
                    $.cookie('mini_sidebar', '1');
                }
                $("#main-content").on('resize', function (e) {
                    e.stopPropagation();
                });
            }
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handle Fixed Sidebar on Mobile devices
    /*-----------------------------------------------------------------------------------*/
    var handleMobileSidebar = function () {
        var menu = $('.sidebar');
        if (menu.parent('.slimScrollDiv').size() === 1) { // destroy existing instance before updating the height
            menu.slimScroll({
                destroy: true
            });
            menu.removeAttr('style');
            $('#sidebar').removeAttr('style');
        }
        menu.slimScroll({
            size: '7px',
            color: '#a1b2bd',
            opacity: .3,
            height: "100%",
            allowPageScroll: false,
            disableFadeOut: false
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handle Fixed Sidebar
    /*-----------------------------------------------------------------------------------*/
    var handleFixedSidebar = function () {
        var menu = $('.sidebar-menu');

        if (menu.parent('.slimScrollDiv').size() === 1) { // destroy existing instance before updating the height
            menu.slimScroll({
                destroy: true
            });
            menu.removeAttr('style');
            $('#sidebar').removeAttr('style');
        }

        if ($('.sidebar-fixed').size() === 0) {
            handleSidebarAndContentHeight();
            return;
        }

        var viewport = getViewPort();
        if (viewport.width >= 992) {
            var sidebarHeight = $(window).height() - $('#header').height() + 1;

            menu.slimScroll({
                size: '7px',
                color: '#a1b2bd',
                opacity: .3,
                height: sidebarHeight,
                allowPageScroll: false,
                disableFadeOut: false
            });
            handleSidebarAndContentHeight();
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Windows Resize function
    /*-----------------------------------------------------------------------------------*/
    jQuery(window).resize(function () {
        setTimeout(function () {
            checkLayout();
            handleSidebarAndContentHeight();
            responsiveSidebar();
            handleFixedSidebar();
            handleNavbarFixedTop();
            runResponsiveFunctions();
        }, 50); // wait 50ms until window resize finishes.
    });
    /*-----------------------------------------------------------------------------------*/
    /* Box tools
    /*-----------------------------------------------------------------------------------*/
    var handleBoxTools = function () {
        //Collapse
        jQuery('.box .tools .collapse, .box .tools .expand').click(function () {
            var el = jQuery(this).parents(".box").children(".box-body");
            if (jQuery(this).hasClass("collapse")) {
                jQuery(this).removeClass("collapse").addClass("expand");
                var i = jQuery(this).children(".fa-chevron-up");
                i.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                el.slideUp(200);
            } else {
                jQuery(this).removeClass("expand").addClass("collapse");
                var i = jQuery(this).children(".fa-chevron-down");
                i.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                el.slideDown(200);
            }
        });
        /* Close */
        jQuery('.box .tools a.remove').click(function () {
            var removable = jQuery(this).parents(".box");
            if (removable.next().hasClass('box') || removable.prev().hasClass('box')) {
                jQuery(this).parents(".box").remove();
            } else {
                jQuery(this).parents(".box").parent().remove();
            }
        });
        /* Reload */
        jQuery('.box .tools a.reload').click(function () {
            var el = jQuery(this).parents(".box");
            App.blockUI(el);
            window.setTimeout(function () {
                App.unblockUI(el);
            }, 1000);
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Alerts
    /*-----------------------------------------------------------------------------------*/
    var handleAlerts = function () {
        $(".alert").alert();
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Popovers 鼠标指向提示
    /*-----------------------------------------------------------------------------------*/
    var handlePopovers = function () {
        //Default (Right)
        $('.pop').popover();
        //Bottom
        $('.pop-bottom').popover({
            placement: 'bottom'
        });
        //Left
        $('.pop-left').popover({
            placement: 'left'
        });
        //Top
        $('.pop-top').popover({
            placement: 'top'
        });
        //Trigger hover
        $('.pop-hover').popover({
            trigger: 'hover'
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	SlimScroll
    /*-----------------------------------------------------------------------------------*/
    var handleSlimScrolls = function () {
        if (!jQuery().slimScroll) {
            return;
        }

        $('.scroller').each(function () {
            $(this).slimScroll({
                size: '7px',
                color: '#a1b2bd',
                height: $(this).attr("data-height"),
                alwaysVisible: ($(this).attr("data-always-visible") == "1" ? true : false),
                railVisible: ($(this).attr("data-rail-visible") == "1" ? true : false),
                railOpacity: 0.1,
                disableFadeOut: true
            });
        });
    }

    /*-----------------------------------------------------------------------------------*/
    /*	Handle Box Sortable  可以拖动的小框，类似qq空间设置模块
    /*-----------------------------------------------------------------------------------*/
    var handleBoxSortable = function () {
        $('.box-container').sortable({
            connectWith: '.box-container',
            items:'> .box',
            opacity:0.8,
            revert:true,
            forceHelperSize:true,
            placeholder: 'box-placeholder',
            forcePlaceholderSize:true,
            tolerance:'pointer'
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Custom tabs
    /*-----------------------------------------------------------------------------------*/
    var handleCustomTabs = function () {
        var adjustMinHeight = function (y) {
            $(y).each(function () {
                var A = $($($(this).attr("href")));
                var z = $(this).parent().parent();
                if (z.height() > A.height()) {
                    A.css("min-height", z.height())
                }
            })
        };
        $("body").on("click", '.nav.nav-tabs.tabs-left a[data-toggle="tab"], .nav.nav-tabs.tabs-right a[data-toggle="tab"]', function () {
            adjustMinHeight($(this))
        });
        adjustMinHeight('.nav.nav-tabs.tabs-left > li.active > a[data-toggle="tab"], .nav.nav-tabs.tabs-right > li.active > a[data-toggle="tab"]');
        if (location.hash) {
            var w = location.hash.substr(1);
            $('a[href="#' + w + '"]').click()
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handle Backstretch  背景切换
    /*-----------------------------------------------------------------------------------*/
    var handleBackstretch = function () {
        $.backstretch([
            "/admin/images/login/1.jpg"
            , "/admin/images/login/2.jpg"
            , "/admin/images/login/3.jpg"
            , "/admin/images/login/4.jpg"
        ], {duration: 3000, fade: 750});
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handle Active Toggle 问题折叠
    /*-----------------------------------------------------------------------------------*/
    var handleActiveToggle = function () {
        $('#list-toggle .list-group a').click(function () {
            $('#list-toggle .list-group > a.active').removeClass('active');
            $(this).addClass('active');
        })
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handles the go to top button at the footer 点击页脚top跳回顶端
    /*-----------------------------------------------------------------------------------*/
    var handleGoToTop = function () {
        $('.footer-tools').on('click', '.go-top', function (e) {
            App.scrollTo();
            e.preventDefault();  //阻止元素发生默认的行为
        });
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handles navbar fixed top  处理导航栏固定顶部
    /*-----------------------------------------------------------------------------------*/
    var handleNavbarFixedTop = function () {
        if (is_mobile && is_fixed_header) {
            //Manage margin top
            $('#main-content').addClass('margin-top-100');
        }
        if (!(is_mobile) && is_fixed_header) {
            //Manage margin top
            $('#main-content').removeClass('margin-top-100').addClass('margin-top-50');
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Handles theme skin switches  设置主题
    /*-----------------------------------------------------------------------------------*/
    var handleThemeSkins = function () {
        // Handle theme colors
        var setSkin = function (color) {
            $('#skin-switcher').attr("href", "/static/admin/css/themes/" + color + ".css");
            $.cookie('skin_color', color);
        }
        $('ul.skins > li a').click(function () {
            var color = $(this).data("skin");
            setSkin(color);
        });

        //Check which theme skin is set
        if ($.cookie('skin_color')) {
            setSkin($.cookie('skin_color'));
        }
    }
    /*-----------------------------------------------------------------------------------*/
    /*	Uniform 单选多选美化
    /*-----------------------------------------------------------------------------------*/
    var handleUniform = function () {
        $(".uniform").uniform();
    }
    /*-----------------------------------------------------------------------------------*/
    /*	All Checkboxes 全选美化
    /*-----------------------------------------------------------------------------------*/
    var handleAllUniform = function () {
        $("select, input[type='checkbox']").uniform();
    }
    return {
        //Initialise theme pages
        init: function () {
            /*if (App.isPage("widgets_box")) {
                handleBoxSortable(); //Function to handle Box sortables
            }
            if (App.isPage("fixed_header_sidebar")) {
                handleFixedSidebar();	//Function to display fixed sidebar
            }*/
            checkLayout();	//Function to check if mini menu/fixed header is activated
            handleSidebar(); //Function to display the sidebar
            handleSidebarCollapse(); //Function to hide or show sidebar
            handleSidebarAndContentHeight();  //Function to hide sidebar and main content height
            responsiveSidebar();		//Function to handle sidebar responsively
            handleBoxTools(); //Function to handle box tools
            handleSlimScrolls(); //Function to handle slim scrolls 处理苗条卷轴的功能
            handlePopovers(); //Function to handle popovers 函数来处理弹出(提示用)
            handleAlerts(); //Function to handle alerts
            handleCustomTabs(); //Function to handle min-height of custom tabs 处理自定义选项卡的最小高度
            handleGoToTop(); 	//Funtion to handle goto top buttons
            handleNavbarFixedTop();		//Function to check & handle if navbar is fixed top
            handleThemeSkins();		//Function to handle theme skins
        },

        //Set page
        setPage: function (name) {
            currentPage = name;
        },

        isPage: function (name) {
            return currentPage == name ? true : false;
        },


        //public function to add callback a function which will be called on window resize
        addResponsiveFunction: function (func) {
            responsiveFunctions.push(func);
        },
        // wrapper function to scroll(focus) to an element
        // 包装器功能滚动（焦点）到一个元素
        scrollTo: function (el, offeset) {
            pos = (el && el.size() > 0) ? el.offset().top : 0;
            jQuery('html,body').animate({
                scrollTop: pos + (offeset ? offeset : 0)
            }, 'slow');
        },

        // function to scroll to the top
        scrollTop: function () {
            App.scrollTo();
        },
        // initializes uniform elements
        initUniform: function (els) {
            if (els) {
                jQuery(els).each(function () {
                    if ($(this).parents(".checker").size() == 0) {
                        $(this).show();
                        $(this).uniform();
                    }
                });
            } else {
                handleAllUniform();
            }
        },
        // wrapper function to  block element(indicate loading)
        //封装函数阻塞元素（指示加载）
        blockUI: function (el, loaderOnTop) {
            lastBlockedUI = el;
            jQuery(el).block({
                message: '<img src="./img/loaders/12.gif" align="absmiddle">',
                css: {
                    border: 'none',
                    padding: '2px',
                    backgroundColor: 'none'
                },
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 0.05,
                    cursor: 'wait'
                }
            });
        },
        // wrapper function to  un-block element(finish loading)
        unblockUI: function (el) {
            jQuery(el).unblock({
                onUnblock: function () {
                    jQuery(el).removeAttr("style");
                }
            });
        },
    };
}();
(function () {
    this.Theme = (function () {
        function Theme() {
        }

        Theme.colors = {
            white: "#FFFFFF",
            primary: "#5E87B0",
            red: "#D9534F",
            green: "#A8BC7B",
            blue: "#70AFC4",
            orange: "#F0AD4E",
            yellow: "#FCD76A",
            gray: "#6B787F",
            lightBlue: "#D4E5DE",
            purple: "#A696CE",
            pink: "#DB5E8C",
            dark_orange: "#F38630"
        };
        return Theme;
    })();
})(window.jQuery);
//setting language
function language(lang) {
    var data = {'lang': lang};
    $.get("/admin/login/setLang", data, function () {
        location.reload();
    })
}
