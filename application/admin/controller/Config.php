<?php

namespace app\admin\controller;

use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\Config as ConfigModel;
use app\admin\model\Site;
use app\admin\model\FrontendMenu;
class Config extends Base
{
    /**
     * 网站设置
     * @param Request $request
     * @return mixed
     */
    public function webSet(Request $request)
    {
        if ($request->isPost()){
            $validate = new Validate([
                '__token__'  =>  'token',
            ]);
            $pass = $validate->check($request->post());
            if ($pass){
                $configTitle = trim($request->post('configTitle'));
                $configKeywords = trim($request->post('configKeywords'));
                $configDescription = trim($request->post('configDescription'));
                $configICP = trim($request->post('configICP'));
                $config = new ConfigModel();
                $config->title = $configTitle;
                $config->keywords = $configKeywords;
                $config->description = $configDescription;
                $config->icp = $configICP;
                $config->author = Session::get('ADMIN_PASS')->user_name;
                $config->create_time = date("Y-m-d H:i:s",time());
                $result = $config->save();
                if ($result){
                    $this->success(lang('success'));
                }else{
                    $this->error(lang('error'));
                }
            }else{
                $this->error(lang('error'));
            }
        }else{
            return $this->fetch();
        }
    }

    /**
     * 站点设置
     * @param Request $request
     * @return mixed
     */
    public function siteSet(Request $request)
    {
        if ($request->isPost()){
            $validate = new Validate([
                '__token__'  =>  'token',
            ]);
            $pass = $validate->check($request->post());
            if ($pass){
                $siteURL = trim($request->post('siteURL'));
                $siteName = trim($request->post('siteName'));
                $siteDescription = trim($request->post('siteDescription'));
                $site = new Site();
                $site->url = $siteURL;
                $site->site_name = $siteName;
                $site->description = $siteDescription;
                $site->author = Session::get('ADMIN_PASS')->user_name;
                $site->create_time = date("Y-m-d H:i:s",time());
                $result = $site->save();
                if ($result){
                    $this->success(lang('success'));
                }else{
                    $this->error(lang('error'));
                }
            }
        }else{

            return $this->fetch();
        }
    }

    /**
     * 前端菜单
     * @param Request $request
     * @return mixed
     */
    public function frontendMenu(Request $request)
    {
        $frontMenu = new FrontendMenu();
        $list = $frontMenu->getFrontendMenuList();
        $this->assign('list',$list);
        return $this->fetch();
    }


    public function parentMenu()
    {
        $frontMenu = new FrontendMenu();
        $list = $frontMenu->getMenuList();
        return json_encode($list);
    }


    public function backendMenu()
    {
        //
        return $this->fetch();
    }

    /**
     * 编辑菜单
     * @param Request $request
     * @return bool|mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function frontendEdit(Request $request)
    {
        if ($request->isPost()){
            $validate = new Validate([
                '__token__'  =>  'token',
            ]);
            $pass = $validate->check($request->post());
            if (true == $pass){
                $menuId = $request->post('menuId');
                $menuUrl = trim($request->post('menuUrl'));
                $menuName = trim($request->post('menuName'));
                $menuSort = trim($request->post('menuSort'));
                $frontMuen = new FrontendMenu();
                $hasUse = $frontMuen->where('url',$menuUrl)->find();
                if ($hasUse){
                    $this->error(lang('is_have'));
                }
                $frontMuen -> sort = $menuSort;
                $frontMuen -> url = $menuUrl;
                $frontMuen -> name = $menuName;
                $frontMuen -> parent_id = $menuId;
                $frontMuen -> author = Session::get('ADMIN_PASS')->user_name;
                $frontMuen -> is_delete = 0;
                $frontMuen -> create_time = date("Y-m-d H:i:s",time());
                $result = $frontMuen->save();
                if (1 == $result){
                    $this->success(lang('success'),url('/admin/config/frontendMenu'));
                }else{
                    $this->error(lang('error'));
                }
            }else{
                return $pass;
            }
        }else{
//            $frontMuen = new FrontendMenu();
            $menuList = FrontendMenu::getAllMenu();
            $this->assign('menuList',$menuList);
            $tag['edit'] = 0;
            $this->assign('tag',$tag);
            return $this->fetch();
        }
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
