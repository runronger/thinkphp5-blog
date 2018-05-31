<?php

namespace app\admin\controller;

use think\Request;
use app\admin\model\GalleryType;
use think\Validate;
use think\Session;
use app\admin\model\Gallery as GalleryModel;
class Gallery extends Base
{

    private $src;
    private $source;
    private $s_width;
    private $s_height;
    private $dest;
    private $d_height;
    private $d_width;
    private $name;

    /**
     * 图片列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function photoList()
    {
        $gallery = new GalleryModel();
        $photoList = $gallery->field("id,type_id,image_url,alt")->where('is_delete',0)->select();
        $this->assign('photoList',$photoList);
        $type = new GalleryType();
        $typeList = $type->field("id,type_name")->where('is_delete',0)->select();
//        dump($typeList);
        $this->assign('typeList',$typeList);
        return $this->fetch();
    }


    /**
     * 编辑添加图片
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function photoEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
            if ($pass){
                $galleryType = $request->post('photoType');
                $fileUrl = $request->post('photoImage/a');
                $gallery = new GalleryModel();
                $data = [];
                foreach ($fileUrl as $v){
                    $data[] = [
                        'type_id' => $galleryType,
                        'image_url' => $v,
                        'is_delete' => 0,
                        'create_time' => date("Y-m-d H:i:s",time())
                    ];
                }
                $result = $gallery->saveAll($data);
                if ($result){
                    $this->success(lang('photo_add_success'),url('/admin/gallery/photoList'));
                }else{
                    $this->error(lang('photo_add_fail'));
                }
            }
        }else{
            $type = new GalleryType();
            $photoType = $type->getTypeList();
            $this->assign('photoType',$photoType);
            $tag['edit'] = 0;
            $this->assign('tag',$tag);
            return $this->fetch();
        }
    }

    /**
     * 保存图片的Alt信息
     * @param Request $request
     * @return array
     */
    public function setAlt(Request $request)
    {
        if ($request->isPost()){
            $id = $request->post('id');
            $alt = $request->post('alt');
            if ($id){
                $gallery = new GalleryModel();
                $result = $gallery->save(['alt'=>$alt],['id'=>$id]);
                if ($result){
                    return ajaxReturn($alt,1);
                }else{
                    return ajaxReturn('field',0);
                }
            }else{
                exit(lang('is_empty'));
            }
        }else{
            exit(lang('Method is error'));
        }
    }

    /**
     * 图片上传处理
     * @return \think\response\Json
     */
    public function upload()
    {
        $file = request()->file('file');
        $info = $file->validate(['size'=>'2048000000','ext'=>'jpg,png,gif'])->move(ROOT_PATH . DS . 'upload'.DS.'gallery');
        if($info){
            $path =  DS . 'upload'.DS.'gallery'.DS;
            $return['picUrl']=$path . $info->getSaveName(); //这个个地址是图片的savepath和savename组成，你懂得
            $return['status']= 1 ;
            return json($return);
        }else{
            // 上传失败获取错误信息
            $return['msg'] = $file->getError();
            $return['status']= 0 ;
            return json($return);
        }
    }

    /**
     * 相册列表
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function galleryList()
    {
        $type = new GalleryType();
        $list = $type->where('is_delete', 0)->paginate(10);
        $this->assign('typeList',$list);
        return $this->fetch();
    }

    /**
     * 相册编辑保存
     * @param Request $request
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function galleryEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->token('__token__');
            $validate = new Validate();
            $pass = $validate->check($token);
            if ($pass){
                $id = $request->post('id');
                $galleryType = $request->post('galleryType');
                if (empty($galleryType)){
                    $this->error(lang('is_empty'));
                    return false;
                }
                $type = new GalleryType();
                $isHave = $type->where('type_name',$galleryType)->find();
                if ($isHave){
                    $this->error(lang('is_have'));
                    return false;
                }
                if ($id){
                    $data=[
                        'type_name' => $galleryType,
                        'create_user' => Session::get('ADMIN_PASS')->user_name,
                        'update_time' => date('Y-m-d H:i:s',time())
                    ];
                    $result = $type->save($data,['id' => $id]);
                    if ($result){
                        $this->success(lang('gallery_add_success'),url('/admin/gallery/galleryList'));
                    }else{
                        $this->error(lang('gallery_add_fail'));
                    }
                }else{
                    $type->type_name = $galleryType;
                    $type->create_user = Session::get('ADMIN_PASS')->user_name;
                    $type->is_delete = 0;
                    $type->create_time = date('Y-m-d H:i:s',time());
                    $result = $type->save();
                    if ($result){
                        $this->success(lang('gallery_add_success'),url('/admin/gallery/galleryList'));
                    }else{
                        $this->error(lang('gallery_add_fail'));
                    }
                }
            }
        }else{
            $id = $request->get('id');
            if ($id){
                $type = new GalleryType();
                $info = $type->where('id',$id)->find();
//                dump($info);
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
     * 删除分类
     * @param Request $request
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function galleryDelete(Request $request)
    {
        $id = $request->get('id');
        $article = new GalleryModel();
        $hasUse = $article->checkGalleryUse($id);
        if (!empty($hasUse)){
            $this->error("删除失败,该类型还在使用中");
        }else{
            $type = new GalleryType();
            $result = $type->changeDelete($id);
            if ($result){
                $this->success("删除成功",url('/admin/article/typeList'));
            }else{
                $this->error("删除失败");
            }
        }
    }


    public function thumb($image_path,$rate = 0.5)
    {
        $this->src = $image_path;
        $this->source = imagecreatefromjpeg($image_path);
        $s_size = getimagesize($image_path);
        $this->s_height = $s_size[1];
        $this->s_width = $s_size[0];
        $this->d_height = 100;
        $this->d_width = 100;
        $this->dest = imagecreate($this->d_width, $this->d_height);
        $this->name = explode('.jpg', $image_path);
        $this->name = $this->name[0];
    }

    public function make()
    {
        imagecopyresized($this->dest, $this->source, 0, 0, 0, 0, $this->d_width, $this->d_height,
            $this->s_width, $this->s_height);
        $thumb = str_replace('image', 'thumb', $this->name.'-thumb.jpg');
        imagejpeg($this->dest,$thumb,100);
        $img = $thumb;
        echo "<a href=$this->src><img src=$img></a>";
    }


    public function getPwd($dir)
    {
        $files = [];
        if (is_dir($dir)) {
            if (@$handle = opendir($dir)) {
                //readdir返回目录中下一个文件的文件名。文件名以在文件系统中的排序返回。
                //目录句柄的 resource，之前由 opendir() 打开
                while (false !== ($file = readdir($handle))) {
                    if ($file === "." || $file === "..") {
                        continue;
                    }
                    $tmp = realpath($dir . "/" . $file);
                    if (is_dir($tmp)) {
                        $retArr = self::getPwd($tmp);
                        if (!empty($retArr)) {
                            $files[] = $retArr;
                        }
                    }
                    echo $tmp . "<br>";
                }
                closedir($handle);
                return $files;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }


}
