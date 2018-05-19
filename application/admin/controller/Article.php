<?php

namespace app\admin\controller;

use think\Request;
use app\admin\model\Article as ArticleModel;
class Article extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function articleList()
    {
        //
        $article = new ArticleModel();
        $resule = $article->articleList();
//        dump($resule);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function articleEdit(Request $request)
    {
        if ($request->isPost()){
            $id = $request->post('id');
            $articleType = $request->post('articleType');
            $articleTitle = trim($request->post('articleTitle'));
            $articleDescription = trim($request->post('articleDescription'));
            $articleAuthor = $request->post('articleAuthor') ? trim($request->post('articleAuthor')) : "admin";
            $isTop = $request->post('top') ? $request->post('top') : 0 ;
            $addTime = $request->post('addTime') ? $request->post('addTime') : date("Y-m-d H:i:s",time());
            $content = $request->post('container','','htmlspecialchars');
            //修改部分
            if ($id){

            }
            

        }else{
            $isAdd = 1;
            $this->assign('isAdd',$isAdd);
            return $this->fetch("article_edit");
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
