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
        $list = $topMenu = Db::table('cn_frontend_menu')->where(['is_delete'=>0,'parent_id'=>0])->select();
//        dump($list);
    }


}
