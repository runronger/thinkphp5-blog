<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-6-11
 * Time: 下午2:22
 */
namespace app\admin\validate;

use think\Request;
use think\Validate;
class Token extends Validate
{


    public function checkToken()
    {
        $result = parent::check(Request::instance()->input(),[
            '__token__'  =>  'token',
        ]);
        if (true !== $result){
            // 验证失败 输出错误信息
           return ajaxReturn($result);
        }else{
            return $result;
        }
    }









}