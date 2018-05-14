<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;
use think\Lang;
use think\Cookie;
class Base extends Controller
{
    /**
     * 初始化
     */
    public function _initialize()
    {
        $session = Session::get("ADMIN_PASS");
        if (!$session){
            Session::clear("ADMIN_PASS",null);
            $this->error("登录超时",url('/admin/login/index'));
        }
    }

    /**
     * 设置语言
     * @param Request $request
     */
    public function setLang(Request $request)
    {
        switch ($request->input('lang')){
            case "zh-cn":
                Lang::range('zh-cn');
                Cookie::clear('think_var');
                Cookie::set('think_var','zh-cn');
                Lang::detect();
                break;
            case 'en-us':
                Lang::range('en-us');
                Cookie::clear('think_var');
                Cookie::set('think_var','en-us');
                Lang::detect();
                break;
            //其它语言
        }

    }
}
