<?php

namespace app\admin\controller;

use think\Request;
use think\Validate;
use think\Db;
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
        $allArticle = $article->paginate(10);
        $this->assign('isSearch',0);
        $this->assign('allArticle',$allArticle);
        return $this->fetch();
    }

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
        $result = ArticleModel::where($where)->paginate(1,false);
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
     * 文章类型列表
     * @param Request $request
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function typeList(Request $request)
    {
        $type = new ArticleType();
        $typeList = $type-> paginate(10);
        $this->assign('typeList',$typeList);
        return $this->fetch();
    }



















}
