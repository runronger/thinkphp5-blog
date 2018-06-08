<?php

namespace app\admin\model;

use think\Model;

class FrontendMenu extends Model
{
    //
    protected  $autoWriteTimestamp = false;

    public function getAllMenu()
    {
        //获取顶级类目
        $topMenu = $this->field('id,name')->where(['is_delete'=>0,'parent_id'=>0])->select();
//        $result = [];
        foreach ( $topMenu as $v) {
            $result[$v['id']] = $v ;
        }
        //获取子目录
        $subsetMenu = $this->field('id,name,parent_id')->where(['is_delete'=>0])
            ->where('parent_id','>','0')->select();
        dump($subsetMenu);
        dump($this->getLastSql());
        foreach ($subsetMenu as $vv){
            $result[$vv['parent_id']]['subset'][] = $vv;
        }
//        dump($result);
         return $result;
    }



}
