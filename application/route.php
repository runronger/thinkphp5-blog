<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

////$表示完全匹配
//Route::rule('article/:lists$','Article/lists');
////使用模块/控制器/操作生成
//Route::rule('php/:id','portal/index/show');
//Route::rule('php-<year>-<month>', 'index/echos');
//idnex
Route::rule('index/','portal/index/index');
//后端
Route::rule('backend$','portal/index/backend');
    Route::rule('php$','portal/article/php');
    Route::rule('mysql$','portal/article/mysql');
    Route::rule('redis$','portal/article/redis');
    Route::rule('composer$','portal/article/composer');
    Route::rule('thinkphp$','portal/article/thinkphp');
    Route::rule('laravel$','portal/article/laravel');

//前端
Route::rule('frontend$','portal/index/frontend');
//服务器
Route::rule('server$','portal/index/server');
//优化
Route::rule('optimization$','portal/index/optimization');
//生活
Route::rule('life$','portal/index/life');
//message
Route::rule('message/','portal/index/message');
//about
Route::rule('about/','portal/index/about');
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    //	添加路由规则	路由到	index控制器的hello操作方法
//    'php/:id'	=>	'portal/index/show',
];
