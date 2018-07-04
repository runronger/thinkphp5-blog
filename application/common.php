<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
/**
 * 生成数据返回值
 */
function ajaxReturn($msg,$status = -1,$data = []){
    $result = ['status'=>$status,'msg'=>$msg];
    if(!empty($data)){
        $result['data'] = $data;
    }
    return $result;
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);