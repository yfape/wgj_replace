<?php
/*
 * @Author: your name
 * @Date: 2021-07-30 09:25:33
 * @LastEditTime: 2021-07-30 16:11:20
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\data\app\middleware.php
 */
// 全局中间件定义文件
return [
    // 全局请求缓存
    // \think\middleware\CheckRequestCache::class,
    // 多语言加载
    // \think\middleware\LoadLangPack::class,
    // Session初始化
    // \think\middleware\SessionInit::class
    //全局跨域
    think\middleware\AllowCrossDomain::class,
    //全局缓存
    think\middleware\CheckRequestCache::class
];
