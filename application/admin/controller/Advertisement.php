<?php

namespace app\admin\controller;

use think\Session;
use think\Request;
use think\Validate;
use app\admin\model\AdvertisementType;
use app\admin\model\Advertisement as AdvertisementModel;

class Advertisement extends Base
{
    /**
     * 列表显示
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function advertisementList()
    {
        $isSearch = 0;
        $this->assign('isSearch',$isSearch);
        $ad = new AdvertisementModel();
        $allAd = $ad->getAllAd();
//        dump($allAd);
        $this->assign('allAd',$allAd);
        return $this->fetch();
    }

    /**
     * 广告修改/保存
     * @param Request $request
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function advertisementEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
            if ($pass){
                $id = $request->post('id');
                $adType = trim($request->post('adType'));
                $adUrl = trim($request->post('adUrl'));
                $adDescription = trim($request->post('adDescription'));
                $adImage = trim($request->post('adImage'));
                $adImageAlt = trim($request->post('adImageAlt'));
                $ad = new AdvertisementModel();
                if ($id){
                    $file = $request->file('file');
                    if($file){
                        $info = $file->validate(['size'=>'2048000000','ext'=>'jpg,png,gif'])
                            ->move(ROOT_PATH . DS . 'upload'.DS.'advertisement');
                        if($info){
                            $path =  DS . 'upload'.DS.'advertisement'.DS;
                            $picUrl=$path . $info->getSaveName(); //这个地址是图片的savepath和savename组成
                        }
                    }else{
                        $pic = $ad->where('id='.$id)->field('image')->find();
                        $picUrl = $pic->image;
                    }
                    $data=[
                        'type_id' => $adType,
                        'ad_url' => $adUrl,
                        'ad_description' => $adDescription,
                        'ad_image'=> $picUrl,
                        'ad_image_alt'=> $adImageAlt,
                        'author' => Session::get('ADMIN_PASS')->user_name,
                        'update_time' => date('Y-m-d H:i:s',time())
                    ];
                    $result = $ad->save($data,['id' => $id]);
                    if ($result){
                        $this->success(lang('ad_add_success'),url('/admin/advertisement/advertisementList'));
                    }else{
                        $this->error(lang('ad_add_fail'));
                    }
                }else{
                    $ad->type_id = $adType;
                    $ad->ad_url = $adUrl;
                    $ad->ad_description = $adDescription;
                    $ad->ad_image = $adImage;
                    $ad->ad_image_alt = $adImageAlt;
                    $ad->author = Session::get('ADMIN_PASS')->user_name;
                    $ad->is_delete = 0;
                    $ad->create_time = date('Y-m-d H:i:s',time());
                    $result = $ad->save();
                    if ($result){
                        $this->success(lang('ad_add_success'),url('/admin/advertisement/advertisementList'));
                    }else{
                        $this->error(lang('ad_add_fail'));
                    }
                }
            }else{
                $this->error(lang('error'));
            }
        }else{
            $id = $request->get('id');
            $type = new AdvertisementType();
            if ($id){
                $typeList = $type->tagList($id);
                $this->assign('typeList',$typeList);
                $ad = new AdvertisementModel();
                $adInfo = $ad->getOneAdInfo($id);
                if ($adInfo){
                    $this->assign('adInfo',$adInfo);
                }else{
                    $this->error(lang('is_empty'));
                }
                $tag['edit'] = 1;
                $tag['id'] = $id;
                $this->assign('tag',$tag);
                return $this->fetch();
            }else{
                $tag['edit'] = 0;
                $this->assign('tag',$tag);
                $typeList = $type->getTypeList();
                $this->assign('typeList',$typeList);
                return $this->fetch();
            }
        }

    }

    /**
     * 处理图片保存
     * @return \think\response\Json
     */
    public function upload()
    {
        $file = request()->file('file');
        $info = $file->validate(['size'=>'2048000000','ext'=>'jpg,png,gif'])
            ->move(ROOT_PATH . DS . 'upload'.DS.'advertisement');
        if($info){
            $path =  DS . 'upload'.DS.'advertisement'.DS;
            $return['picUrl']=$path . $info->getSaveName(); //这个地址是图片的savepath和savename组成
            $return['status']= 1 ;
            return json($return);
        }else {
            // 上传失败获取错误信息
            $return['msg'] = $file->getError();
            $return['status'] = 0;
            return json($return);
        }
    }







    /**
     * 显示广告类型列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function advertisementType()
    {
        $ad = new AdvertisementType();
        $adList = $ad->where('is_delete',0)->paginate(10);
        $this->assign('adList',$adList);
        return $this->fetch();
    }

    /**
     * 广告分类编辑/保存
     * @param Request $request
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function advertisementTypeEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
            if ($pass){
                $id = $request->post('id');
                $advertisementType = trim($request->post('advertisementType'));
                if (empty($advertisementType)){
                    $this->error(lang('is_empty'));
                }
                $type = new AdvertisementType();
                $isHave = $type->where('type_name',$advertisementType)->find();
                if ($isHave){
                    $this->error(lang('is_have'));
                    return false;
                }
                if ($id){
                    $data=[
                        'type_name' => $advertisementType,
                        'author' => Session::get('ADMIN_PASS')->user_name,
                        'update_time' => date('Y-m-d H:i:s',time())
                    ];
                    $result = $type->save($data,['id' => $id]);
                    if ($result){
                        $this->success(lang('ad_type_add_success'),url('/admin/advertisement/advertisementType'));
                    }else{
                        $this->error(lang('ad_type_add_fail'));
                    }
                }else{
                    $type->type_name = $advertisementType;
                    $type->author = Session::get('ADMIN_PASS')->user_name;
                    $type->is_delete = 0;
                    $type->create_time = date('Y-m-d H:i:s',time());
                    $result = $type->save();
                    if ($result){
                        $this->success(lang('ad_type_add_success'),url('/admin/advertisement/advertisementType'));
                    }else{
                        $this->error(lang('ad_type_add_fail'));
                    }
                }
            }else{
                $this->error(lang('error'));
            }
        }else{
            $id = $request->get('id');
            if ($id){
                $type = new AdvertisementType();
                $info = $type->where('id',$id)->find();
                $this->assign('typeInfo',$info);
                $tag['id']=$id;
                $tag['edit'] = 1;
                $this->assign('tag',$tag);
                return $this->fetch();
            }else{
                $tag['edit'] = 0;
                $this->assign('tag',$tag);
                return $this->fetch();
            }
        }
    }

    /**
     * 软删除广告类型
     * @param Request $request
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function advertisementTypeDelete(Request $request)
    {
        $id = $request->get('id');
        $article = new AdvertisementModel();
        $hasUse = $article->checkAdvertisementUse($id);
        if (!empty($hasUse)){
            $this->error("删除失败,该类型还在使用中");
        }else{
            $type = new AdvertisementType();
            $result = $type->changeDelete($id);
            if ($result){
                $this->success("删除成功",url('/admin/advertisement/advertisementType'));
            }else{
                $this->error("删除失败");
            }
        }
    }





}
