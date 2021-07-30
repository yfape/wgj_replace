<?php
/*
 * @Author: your name
 * @Date: 2021-07-30 10:12:28
 * @LastEditTime: 2021-07-30 10:59:52
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \wgj_replace\data\app\model\Col.php
 */
namespace app\model;

use think\Model;

class Col extends Model
{
    protected $name = 'col';
    protected $pk = 'col_id';
    protected $schema = [
        "col_id" => "int",
        "parent_id" => "int",
        "name" => "string"
    ];
    protected $type = [
        "article_id" => "integer",
        "col_id" => "integer"
    ];
}