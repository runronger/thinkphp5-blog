<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-5-11
 * Time: 上午10:26
 */
namespace app\admin\model;

use think\Model;
use think\Db;
use think\Session;

class Base extends Model
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $session = Session::get("ADMIN_PASS");
        if (!$session){
            Session::clear("ADMIN_PASS",null);
            return false;
        }
    }


    /**
     * 获取空模型
     */
    public function getEModel($tables){
        $rs =  Db::query('show columns FROM `'.config('database.prefix').$tables."`");
        $obj = [];
        if($rs){
            foreach($rs as $key => $v) {
                $obj[$v['Field']] = $v['Default'];
                if($v['Key'] == 'PRI')$obj[$v['Field']] = 0;
            }
        }
        return $obj;
    }

}