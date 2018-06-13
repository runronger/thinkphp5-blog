<?php

namespace app\admin\model;

use think\Model;
use think\Db;
class FrontendMenu extends Model
{
    //
    protected  $autoWriteTimestamp = false;

    /**
     * 获取目录列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getAllMenu()
    {
        //获取顶级类目
        $topMenu = Db::table('cn_frontend_menu')->field('id,name')->where(['is_delete'=>0,'parent_id'=>0])->select();
        $result = [];
        foreach ( $topMenu as $v) {
            $result[$v['id']] = $v ;
        }
        //获取子目录
        $subsetMenu = Db::table('cn_frontend_menu')->field('id,name,parent_id')->where(['is_delete'=>0])
            ->where('parent_id','>','0')->select();
        foreach ($subsetMenu as $vv){
            $result[$vv['parent_id']]['subset'][]=$vv;
        }
        return $result;
    }

    public function getMenuList()
    {
        $topMenu = Db::table('cn_frontend_menu')->field('id,parent_id,name,number')->where(['is_delete'=>0,'parent_id'=>0])->select();
        foreach ($topMenu as $v){
            $result[$v['id']] = $v;
        }
        $subset = Db::table('cn_frontend_menu')->field('id,parent_id,name,number')->where('is_delete',0)
            ->where('parent_id','>',0)->select();
        foreach ($subset as $k){
            $result[$k['parent_id']]['sub'][] = $k;
        }
//        dump($result);
        return $result;
    }


}
