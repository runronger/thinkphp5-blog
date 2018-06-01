<?php

namespace app\admin\model;

use think\Model;
class Article extends Model
{
    // 是否需要自动写入时间戳 如果设置为字符串 则表示时间字段的类型
    protected $autoWriteTimestamp = false;

    /**
     * 获取文章列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function articleList()
    {
        $result = $this->select();
        return $result;
    }

    /**
     * 获取一条文章信息
     * @param $id
     * @return array|bool|false|\PDOStatement|string|Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getArticleInfo($id)
    {
        if ($id){
            $resule = $this->where(['id'=>$id,'is_delete'=>0])->find();
            return $resule;
        }else{
            return false;
        }
    }

    /**
     * 更改置顶状态
     * @param $id
     * @return $this
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function changeTopStatus($id)
    {
        if ($id){
            $isTop = $this->field('is_top')->where('id',$id)->find();
            if($isTop->is_top == 0 ){
                $result = $this->where('id',$id)->update(['is_top'=>1]);
            }elseif ($isTop->is_top == 1){
                $result = $this->where('id',$id)->update(['is_top'=>0]);
            }
            return $result;
        }

    }


    /**
     * 软删除文章
     * @param $id
     * @return $this
     */
    public function changeDeleteStatus($id)
    {
        if ($id){
            $result = $this->where('id',$id)->update(['is_delete'=>1]);
            return $result;
        }

    }

    /**
     * 查询分类id的下文章，为删除分类做参考
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function checkTypeUse($id)
    {
        if ($id){
            $result = $this->where(['type_id'=>$id,'is_delete'=>0 ])->select();
            return $result;
        }
    }












}
