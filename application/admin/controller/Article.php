<?php

namespace app\admin\controller;

use think\Request;
use think\Session;
use think\Validate;
use app\admin\model\Article as ArticleModel;
use app\admin\model\ArticleType;
class Article extends Base
{
    protected $rule = [
        'token'  =>  'token',
    ];

    /**
     * 文章列表
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function articleList()
    {
        $article = new ArticleModel();
        $allArticle = $article->where('is_delete',0)->paginate(10);
        $this->assign('isSearch',0);
        $this->assign('allArticle',$allArticle);
        return $this->fetch();
    }


    /**
     * 文章搜索
     * @param Request $request
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function search(Request $request)
    {
        $id = trim($request->post('id'));
        $title = trim($request->post('title'));
        $description = trim($request->post('description'));
        $author = trim($request->post('author'));
        $addTime = trim($request->post('addTime'));
        $editTime = trim($request->post('editTime'));
        $isTop = trim($request->post('isTop'));
        $where = array();
        if (!empty($id)){
            $where['id'] = ['like',"%$id%"];
        }
        if (!empty($title)){
            $where['title'] = ['like',"%$title%"];
        }
        if (!empty($description)){
            $where['description'] = ['like',"%$description%"];
        }
        if (!empty($author)){
            $where['author'] = ['like',"%$author%"];
        }
        if (!empty($addTime)){
            $times = explode('-',$addTime);
            $start=date_format(date_create($times[0]), 'Y-m-d H:i:s');
            $end=date_format(date_create($times[1]), 'Y-m-d H:i:s');
            $where['create_time'] = ['between time',["$start","$end"]];
        }
        if (!empty($editTime)){
            $time = explode('-',$editTime);
            $start = date_format(date_create($time[0]),'Y-m-d H:i:s');
            $end = date_format(date_create($time[1]),'Y-m-d H:i:s');
            $where['update_time'] = ['between time',["$start","$end"]];
        }
        if (!empty($isTop)){
            $where['is_top'] = ['like',"%$isTop%"];
        }
//            $result = Db::name('article')->where($where)->paginate(10);
        $result = ArticleModel::where($where)->paginate(20,false,['query'=>request()->param()]);
//            dump($result);
        $this->assign('isSearch',1);
        $this->assign('allArticle',$result);
        return $this->fetch('article_list');

    }






    /**
     * 文章编辑保存操作
     * @param Request $request
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function articleEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->post('__token__');
            $validate = new Validate($this->rule);
            $pass = $validate->check($token);
            if ($pass){
                $id = $request->post('id');
                $articleType = $request->post('articleType');
                $articleTitle = trim($request->post('articleTitle'));
                $articleDescription = trim($request->post('articleDescription'));
                $articleAuthor = $request->post('articleAuthor') ? trim($request->post('articleAuthor')) : "admin";
                $articleImage = $request->post('articleImage') ? $request->post('articleImage') : '';
                $isTop = $request->post('top') ? $request->post('top') : 0 ;
                $addTime = $request->post('addTime') ? $request->post('addTime') : date("Y-m-d H:i:s",time());
                $content = $request->post('container');
                //修改部分
                $article = new ArticleModel();
                if ($id){
                    $file = $request->file('file');
                    if($file){
                        $info = $file->validate(['size'=>'2048000000','ext'=>'jpg,png,gif'])->move(ROOT_PATH . DS . 'upload'.DS.'images');
                        if($info){
                            $path =  DS . 'upload'.DS.'images'.DS;
                            $picUrl=$path . $info->getSaveName(); //这个个地址是图片的savepath和savename组成，你懂得
                        }
                    }else{
                        $pic = $article->where('id='.$id)->field('image')->find();
                        $picUrl = $pic->image;
                    }
                    $data = [
                        'type_id' => $articleType,
                        'title' => $articleTitle,
                        'description' => $articleDescription,
                        'author' => $articleAuthor,
                        'image' => $picUrl,
                        'is_top' => $isTop,
                        'container' => $content,
                        'update_time' => date("Y-m-d H:i:s",time())
                    ];
                    $resule = $article->where('id', $id)->update($data);
                    if ($resule){
                        $this->success(lang('article_add_success'),url('/admin/article/articleList'));
                    }else{
                        $this->error(lang('article_add_fail'));
                    }
                }else{
                    //新增部分
                    $article->type_id = $articleType;
                    $article->title = $articleTitle;
                    $article->description = $articleDescription;
                    $article->author = $articleAuthor;
                    $article->image = $articleImage;
                    $article->is_top = $isTop;
                    $article->add_time = $addTime;
                    $article->container = $content;
                    $article->is_delete = 0;
                    $article->create_time = date("Y-m-d H:i:s",time());
                    $resule = $article->save();
                    if ($resule){
                        $this->success(lang('article_add_success'),url('/admin/article/articleList'));
                    }else{
                        $this->error(lang('article_add_fail'));
                    }
                }
            }else{
                $this->error(lang('article_add_fail'));
            }
        }else{
            $id = $request->get('id');
            $type = new ArticleType();
            $typeList = $type->getList();
            $this->assign('typeList',$typeList);
            if ($id){
                $article = new ArticleModel();
                $articleInfo = $article->getArticleInfo($id);
//                dump($articleInfo);
                $this->assign('articleInfo',$articleInfo);
                $tag['edit'] = 0;
                $tag['id'] = $id;
                $this->assign('tag',$tag);
                return $this->fetch("article_edit");
            }else{
                $tag['edit'] = 1;
                $this->assign('tag',$tag);
                return $this->fetch("article_edit");
            }
        }

    }


    /**
     * 图片上传处理
     * @return \think\response\Json
     */
    public function upload()
    {
        $file = request()->file('file');
        $info = $file->validate(['size'=>'2048000000','ext'=>'jpg,png,gif'])->move(ROOT_PATH . DS . 'upload'.DS.'images');
        if($info){
            $path =  DS . 'upload'.DS.'images'.DS;
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
     * 更改置顶状态
     * @param Request $request
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function changeTop(Request $request)
    {
        $id = $request->get('id');
        $article = new ArticleModel();
        $result = $article->changeTopStatus($id);
        if ($result){
            $this->success("状态改变成功",url('/admin/article/articleList'));
        }else{
            $this->error("状态改变失败");
        }
    }

    /**
     * 文章软删除
     * @param Request $request
     */
    public function changeDelete(Request $request)
    {
        $id = $request->get('id');
        $article = new ArticleModel();
        $result = $article->changeDeleteStatus($id);
        if ($result){
            $this->success("删除成功",url('/admin/article/articleList'));
        }else{
            $this->error("删除失败");
        }
    }




    /**
     * 文章类型列表
     * @param Request $request
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function typeList(Request $request)
    {
        $type = new ArticleType();
        $typeList = $type->where('is_delete',0)->paginate(10);
        $this->assign('typeList',$typeList);
        return $this->fetch();
    }


    /**
     * 文章分类编辑
     * @param Request $request
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function typeEdit(Request $request)
    {
        if ($request->isPost()){
            $token = $request->post('__token__');
            $validate = new Validate($this->rule);
            $pass = $validate->check($token);
            if ($pass){
                $id = $request->post('id');
                $articleType = trim($request->post('articleType'));
                if (empty($articleType)){
                    $this->error(lang('is_empty'));
                    return false;
                }
                $type = new ArticleType();
                $isHave = $type->where('type_name',$articleType)->find();
                if ($isHave){
                    $this->error(lang('is_have'));
                    return false;
                }
                if ($id){
                    $data = [
                        'type_name' => $articleType,
                        'create_user' => Session::get('ADMIN_PASS')->user_name,
                        'update_time' => date('Y-m-d H:i:s',time())
                    ];
//                    $result = $type->where('id' , $id)->update($data);
                    $result = $type->save($data,['id' => $id]);
                    if ($result){
                        $this->success(lang('article_type_add_success'),url('/admin/article/typeList'));
                    }else{
                        $this->error(lang('article_type_add_fail'));
                    }
                }else{
                    $type->type_name = $articleType;
                    $type->create_user = Session::get('ADMIN_PASS')->user_name;
                    $type->is_delete = 0;
                    $type->create_time = date('Y-m-d H:i:s',time());
                    $result = $type->save();
                    if ($result){
                        $this->success(lang('article_type_add_success'),url('/admin/article/typeList'));
                    }else{
                        $this->error(lang('article_type_add_fail'));
                    }
                }
            }
        }else{
            $id = $request->get('id');
            if ($id){
                $type = new ArticleType();
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
     * 删除分类
     * @param Request $request
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function typeDelete(Request $request)
    {
        $id = $request->get('id');
        $article = new ArticleModel();
        $hasUse = $article->checkTypeUse($id);
        if (!empty($hasUse)){
            $this->error("删除失败,该类型还在使用中");
        }else{
            $type = new ArticleType();
            $result = $type->changeDelete($id);
            if ($result){
                $this->success("删除成功",url('/admin/article/typeList'));
            }else{
                $this->error("删除失败");
            }
        }
    }











}
