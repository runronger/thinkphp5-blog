<?php

namespace app\admin\model;

use think\Model;

class Gallery extends Model
{
    //
    protected $autoWriteTimestamp = false;

    /**
     * 检查相册是否被使用
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function checkGalleryUse($id)
    {
        if ($id){
            $result = $this->where(['type_id'=>$id,'is_delete'=>0 ])->select();
            return $result;
        }

    }


    /**
     * 软删除图片
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
     * 获类型下所有图片
     * @param $typeId
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getPictureList($typeId)
    {
        if ($typeId){
            $result = $this->where('type_id',$typeId)->select();
            return $result;
        }
    }


}
