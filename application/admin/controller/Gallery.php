<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Gallery extends Base
{

    private $src;
    private $source;
    private $s_width;
    private $s_height;
    private $dest;
    private $d_height;
    private $d_width;
    private $name;

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }



    public function thumb($image_path,$rate = 0.5)
    {
        $this->src = $image_path;
        $this->source = imagecreatefromjpeg($image_path);
        $s_size = getimagesize($image_path);
        $this->s_height = $s_size[1];
        $this->s_width = $s_size[0];
        $this->d_height = 100;
        $this->d_width = 100;
        $this->dest = imagecreate($this->d_width, $this->d_height);
        $this->name = explode('.jpg', $image_path);
        $this->name = $this->name[0];
    }

    public function make()
    {
        imagecopyresized($this->dest, $this->source, 0, 0, 0, 0, $this->d_width, $this->d_height,
            $this->s_width, $this->s_height);
        $thumb = str_replace('image', 'thumb', $this->name.'-thumb.jpg');
        imagejpeg($this->dest,$thumb,100);
        $img = $thumb;
        echo "<a href=$this->src><img src=$img></a>";
    }


    public function gallery()
    {
        $dir = "/home/rong/WEBROOT/tp5";
        dump($this->getPwd($dir));
    }


    public function getPwd($dir)
    {
        $files = [];
        if (is_dir($dir)) {
            if (@$handle = opendir($dir)) {
                //readdir返回目录中下一个文件的文件名。文件名以在文件系统中的排序返回。
                //目录句柄的 resource，之前由 opendir() 打开
                while (false !== ($file = readdir($handle))) {
                    if ($file === "." || $file === ".."){
                        continue;
                    }
                    $tmp = realpath($dir."/".$file);
                    if (is_dir($tmp)){
                        $retArr = self::getPwd($tmp);
                        if (!empty($retArr)){
                            $files[] = $retArr;
                        }
                    }
                    echo $tmp ."<br>";
                }
                closedir($handle);
                return $files;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }


}
