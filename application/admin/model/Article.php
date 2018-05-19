<?php

namespace app\admin\model;

use think\Model;

class Article extends Model
{
    //
    public function articleList()
    {
        $result = $this->select();
        return $result;
    }

    public function  addArticle()
    {

    }















}
