<?php

namespace app\admin\controller;

use think\Request;
use app\admin\model\Article as ArticleModel;
class Article extends Base
{
    /**
     * 文章列表
     * @return mixed
     */
    public function articleList()
    {
        //
        $article = new ArticleModel();
        $allArticle = $article->paginate(10);
//        dump($allArticle);
        $this->assign('allArticle',$allArticle);
        return $this->fetch();
    }

    /**
     * 文章编辑添加修改
     * @param Request $request
     * @return mixed
     */
    public function articleEdit(Request $request)
    {
        if ($request->isPost()){
            $id = $request->post('id');
            $articleType = $request->post('articleType');
            $articleTitle = trim($request->post('articleTitle'));
            $articleDescription = trim($request->post('articleDescription'));
            $articleAuthor = $request->post('articleAuthor') ? trim($request->post('articleAuthor')) : "admin";
            $articleImage = $request->post('articleImage') ? $request->post('articleImage') : '';
            $isTop = $request->post('top') ? $request->post('top') : 0 ;
            $addTime = $request->post('addTime') ? $request->post('addTime') : date("Y-m-d H:i:s",time());
            $content = $request->post('container','','htmlspecialchars');
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
                    $picUrl = $article->where('id='.$id)->field('image')->find();
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
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
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
