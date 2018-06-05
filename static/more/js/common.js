$(document).ready(function () {
    /*nav show or hide*/
    $('.nav>li').hover(function () {
        $(this).children('ul').stop(true, true).show(400);
    }, function () {
        $(this).children('ul').stop(true, true).hide(400);
    });
    /*search*/
    $('.search_ico').click(function () {
        $('.search_bar').toggleClass('search_open');
        if ($('#keyboard').val().length > 2) {
            $('#keyboard').val('');
            $('#searchform').submit();
        } else {
            return false;
        }
    });
    /*banner*/
    $('#ban').easyFader();

    /*topnav select*/
    var obj = null;
    var allMenu = document.getElementById('topnav').getElementsByTagName('a');
    // console.log(allMenu);
    obj = allMenu[0];
    for (i = 1; i < allMenu.length; i++) {
        if (window.location.href.indexOf(allMenu[i].href) >= 0) {
            obj = allMenu[i];
        }
    }
    obj.id = 'topnav_current';
    /*mnav dl open*/
    var oH2 = document.getElementsByTagName("h2")[0];
    var oUl = document.getElementsByTagName("dl")[0];
    oH2.onclick = function () {
        var style = oUl.style;
        style.display = style.display == "block" ? "none" : "block";
        oH2.className = style.display == "block" ? "open" : ""
    };

    $('.list_dt').on('click', function () {
        $('.list_dd').stop();
        $(this).siblings('dt').removeAttr('id');
        if ($(this).attr('id') == 'open') {
            $(this).removeAttr('id').siblings('dd').slideUp();
        } else {
            $(this).attr('id', 'open').next().slideDown().siblings('dd').slideUp();
        }
    });


    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        (function () {
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    }


    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    //www.sucaijiayuan.com
    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration
        );
    });
});

window.onload = function () {
    // 固定层
    function buffer(a,b,c){
        var d;
        return function(){
            if(d)
                return;
            d=setTimeout(function(){
                a.call(this),d=undefined
            },b)
        }
    }
    (function(){
        function e(){
            var d=document.body.scrollTop||document.documentElement.scrollTop;
            d>b?(a.className="guanzhu gd",c&&(a.style.top=d-b+"px")):a.className="guanzhu"
        }
        var a=document.getElementById("float");
        if(a==undefined)
            return!1;
        var b=0,c,d=a;
        while(d)b+=d.offsetTop,d=d.offsetParent;
        c=window.ActiveXObject&&!window.XMLHttpRequest;
        if(!c||!0)
            window.onscroll=buffer(e,150,this)
    })();
};