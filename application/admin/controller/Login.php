<?php

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin;
use think\Cookie;
use think\Request;
use think\Session;
use think\Lang;
class Login extends Controller
{
    /**
     * 设置语言
     * @param Request $request
     */
    public function setLang(Request $request)
    {
        switch ($request->get('lang')){
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

    /**
     * 显示登录页面
     * @return mixed
     */
    public function index()
    {
        if (Session::get("ADMIN_PASS") != null){
            $this->success("您已登录",url('/admin/index/index'));
        }else{
            return $this->fetch('/login');
        }
    }

    /**
     * 模型验证登录
     * @param Request $request
     * @return array|bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function doLogin(Request $request)
    {
        if ($request ->isPost()){
            $admin = new Admin();
            return $admin->checkLogin();
        }else{
            exit(lang('Method is error'));
        }

    }

    /**
     * 退出登录
     */
    public function signOut()
    {
        Session::set("ADMIN_PASS",null);
        $this->success(lang('exit successfully'),url('admin/login/index'));
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
