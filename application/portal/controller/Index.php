<?php

namespace app\portal\controller;

use app\admin\model\Config;
use app\admin\model\Article;
use app\admin\model\Gallery;
use think\Controller;
use think\Request;

class Index extends Controller
{

    public function index()
    {
        //webset
        $config = new Config();
        $webInfo = $config->field('title,keywords,description,icp')->find();
        $this->assign('webInfo',$webInfo);
        //article
        $article = new Article();
        $articleList = $article->articleList();
        $this->assign('articleList',$articleList);
//        dump($articleList);
        //banner
        $image = new Gallery();
        $imageList = $image->getPictureList(5);
        $this->assign('imageList',$imageList);
        return $this->fetch();
    }


    public function search()
    {
        //
    }






}
