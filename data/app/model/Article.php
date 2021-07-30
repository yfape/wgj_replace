<?php
namespace app\model;

use think\Model;

class Article extends Model
{
    protected $name = 'article';
    protected $pk = 'article_id';
    protected $autoWriteTimestamp = true;
    protected $schema = [
        "article_id" => "int",
        "col_id" => "int",
        "url" => "string",
        "title" => "string",
        "img" => "string",
        "create_time" => "int"
    ];
    protected $type = [
        "article_id" => "integer",
        "col_id" => "integer",
        "create_time" => "timestamp"
    ];
}