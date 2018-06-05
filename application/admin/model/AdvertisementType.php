<?php

namespace app\admin\model;

use think\Model;
use think\Db;
class AdvertisementType extends Model
{

    protected $autoWriteTimestamp = false;

    public function getTypeList()
    {
        $result = $this->where('is_delete',0)->select();
        return $result;
    }

    /**
     * delete type
     * @param $id
     * @return $this
     */
    public function changeDelete($id)
    {
        if ($id){
            $result = $this->where('id',$id)->update(['is_delete'=>1]);
            return $result;
        }
    }

    /**
     * 标记使用了的类型
     * @param $id
     * @return array|bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function tagList($id)
    {
        if ($id){
            $hasUseType = Db::table('cn_advertisement')->field('type_id')->where('id',$id)->find();
            $allType = Db::table('cn_advertisement_type')->field('id,type_name')->select();
            $result = [];
            foreach ($allType as $v){
                $select = false;
                if (in_array($v['id'],$hasUseType)){
                    $select = true;
                }
                $result[$v['id']]=[
                    'id' => $v['id'],
                    'type_name' => $v['type_name'],
                    'select' => $select,
                ];
            }
            return $result;
        }else{
            return false;
        }
    }

}
