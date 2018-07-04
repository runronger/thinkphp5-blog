<?php

namespace app\portal\controller;

use app\admin\model\Advertisement;
use app\admin\model\Config;
use app\admin\model\Article;
use app\admin\model\Gallery;
use think\Request;
use think\Db;
class Index extends Base
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

    public function show(Request $request)
    {
        $id = $request->param();
        $result = Db::table('cn_article')->where(['id'=>$id['id']])->select();
        dump($result);
        $this->assign('info',$result);
        return $this->fetch();
    }

    public function echos(Request $request)
    {
        $id = $request->param();
        dump($id);
    }
    public function about(Request $request)
    {
//        $id = request()->input();
        $id = $request->param();
        dump($id);
    }
    public function message(Request $request)
    {
//        $id = request()->input();
        $id = $request->param();
        dump($id);
    }

    public function Backend(Request $request)
    {
//        $id = request()->input();
        $id = $request->param();
        dump($id);
    }

    public function test()
    {
        return $this->fetch();
    }
}
