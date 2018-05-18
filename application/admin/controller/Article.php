<?php

namespace app\admin\controller;

use think\Request;

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
            dump($request->post(''));
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
            $picUrl = $path . $info->getSaveName();
            return json($picUrl);
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
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
