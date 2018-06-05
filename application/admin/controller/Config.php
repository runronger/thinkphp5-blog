<?php

namespace app\admin\controller;

use think\Request;
use think\Validate;
use think\Session;
use app\admin\model\Config as ConfigModel;
use app\admin\model\Site;
class Config extends Base
{

    public function webSet(Request $request)
    {
        if ($request->isPost()){
//            dump($request->post());
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
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


    public function siteSet(Request $request)
    {
        if ($request->isPost()){
//            dump($request->post());
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
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


    public function save(Request $request)
    {
        //
    }


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
