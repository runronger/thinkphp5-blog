<?php

namespace app\portal\controller;

use app\admin\model\Advertisement;
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
//        dump($articleList);
        $this->assign('articleList',$articleList);
        //banner
        $ad = new Advertisement();
        $banner = $ad->getTypeAd(2,4);
        $this->assign('bannerList',$banner);
        //small banner
        $smbanner = $ad->getTypeAd(1,2);
        $this->assign('smallBannerList',$smbanner);
        //special push
        $special = $ad->getTypeAd(4,3);
        $this->assign('special',$special);
        return $this->fetch();
    }


    public function search()
    {
        //
    }

    public function articleList()
    {

    }

    public function show()
    {

    }




}
