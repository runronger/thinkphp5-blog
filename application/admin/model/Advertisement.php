<?php

namespace app\admin\model;

use think\Model;

class Advertisement extends Model
{
    //
    protected $autoWriteTimestamp = false;

    /**
     * 获取所有的线上广告
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAllAd()
    {
        return $this->where('is_delete',0)->paginate(10);
    }

    /**
     * 获取一条广告信息
     * @param $id
     * @return array|bool|false|\PDOStatement|string|Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getOneAdInfo($id)
    {
        if ($id){
            $resule = $this->where(['id'=>$id,'is_delete'=>0])->find();
            return $resule;
        }else{
            return false;
        }
    }

    /**
     * 软删除一条广告
     * @param $id
     * @return $this
     */
    public function deleteOneAd($id)
    {
        if ($id){
            $result = $this->where('id',$id)->update(['is_delete'=>1]);
            return $result;
        }
    }

    /**
     * 检查typeid使用情况
     * @param $typeId
     * @return array|false|\PDOStatement|string|Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function checkAdvertisementUse($typeId)
    {
        if ($typeId){
            $result = $this->where('type_id',$typeId)->find();
            return $result;
        }
    }


    public function getTypeAd($typeId, $number)
    {
        if (!empty($typeId) && !empty($number)){
            $result = $this->where('type_id',$typeId)->limit(0,$number)->select();
            return $result;
        }else{
            return false;
        }
    }



}
