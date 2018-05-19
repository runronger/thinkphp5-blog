<?php

namespace app\admin\model;

use think\Model;

class Article extends Model
{
    protected $auto = ['create_time'];

    //返回原有数据  不自动进行时间转换
    public function getCreateTimeAttr($time)
    {
        return $time;
    }
    //
    public function articleList()
    {
        $result = $this->select();
        return $result;
    }

    public function getArticleInfo($id)
    {
        if ($id){
            $resule = $this->where('id='.$id)->find();
            return $resule;
        }else{
            return false;
        }
    }

    public function  addArticle($data=[],$id)
    {
        if ($id && !empty($data)){
            $result = $this->where('id='.$id)->allowField(
                [
                    'type_id',
                    'title',
                    'description',
                    'author',
                    'image',
                    'is_top',
                    'add_time',
                    'container',
                    'update_time'
                ]
            )->save($data);
            if ($result){
                return true;
            }else{
                return false;
            }
        }else{
            if (!empty($data)){
                $result = $this->allowField(
                    [
                        'type_id',
                        'title',
                        'description',
                        'author',
                        'image',
                        'is_top',
                        'add_time',
                        'container',
                        'create_time'
                    ]
                )->save($data);
                if ($result){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

    }















}
