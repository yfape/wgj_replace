<?php
/*
 * @Author: your name
 * @Date: 2021-07-30 09:25:33
 * @LastEditTime: 2021-07-30 11:19:27
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\data\route\app.php
 */
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get("/col/:site_id/:col_id", "Col/get")->pattern([
    "site_id" => "\d+",
    "col_id"   => "\d+"
]);
Route::get("/articles/:col_id/:page", "Article/gets")->pattern([
    "col_id" => "\d+",
    "page"   => "\d+"
]);