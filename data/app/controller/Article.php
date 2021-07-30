<?php
/*
 * @Author: your name
 * @Date: 2021-07-30 10:18:22
 * @LastEditTime: 2021-07-30 11:37:24
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\data\app\controller\Col.php
 */
namespace app\controller;

use think\Request;
use app\model\Article as ArticleModel;

class Article 
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function gets(){
        $col_id = $this->request->param('col_id');
        $page = $this->request->param('page');
        $row = 15;

        $articles = ArticleModel::withAttr('img', function($value, $data){
            $value = ltrim($value, ".");
            return env('app.file_url').$value;
        })->where('col_id', $col_id)->order('article_id', 'desc')->page($page, $row)->select();
        return json(['msg'=>'获取成功','data'=>$articles]);
    }
}