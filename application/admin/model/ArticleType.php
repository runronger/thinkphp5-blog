<?php

namespace app\admin\model;

use think\Model;

class ArticleType extends Model
{
    // 关闭自动写入时间戳
    protected $autoWriteTimestamp = false;
    // 关闭自动写入update_time字段
    protected $createTime = false;
    protected $updateTime = false;

    /**
     * 获取文章类型id名称列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getList()
    {
        $result = $this->field('id,type_name')->where('is_delete',0)->select();
        return $result;
    }

    /**
     * 软删除分类
     * @param $id
     * @return $this
     */
    public function changeDelete($id)
    {
        $result = $this->where('id',$id)->update(['is_delete'=>1]);
        return $result;
    }



}
