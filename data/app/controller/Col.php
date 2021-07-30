<?php
/*
 * @Author: your name
 * @Date: 2021-07-30 10:18:22
 * @LastEditTime: 2021-07-30 10:59:40
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\data\app\controller\Col.php
 */
namespace app\controller;

use think\Request;
use app\model\Col as ColModel;

class Col 
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get(){
        $site_id = $this->request->param('site_id');
        $col_id = $this->request->param('col_id');

        $col = ColModel::where([
            "parent_id" => $site_id,
            "col_id" => $col_id
        ])->findOrEmpty();

        if($col->isEmpty()){
            return json(["msg"=>"获取失败"], 520);
        }
        
        return json(["msg"=>"获取成功", "data"=>$col->name],200);
    }
}