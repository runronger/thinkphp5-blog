<?php

namespace app\admin\model;

use think\Model;
use think\Db;
class ArticleType extends Model
{
    // 关闭自动写入时间戳
    protected $autoWriteTimestamp = false;
    // 关闭自动写入update_time字段
    protected $createTime = false;
    protected $updateTime = false;

    /**
     * 获取文章类型id名称列表
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getList()
    {
        $result = $this->field('id,type_name')->where('is_delete',0)->select();
        return $result;
    }

    /**
     * 软删除分类
     * @param $id
     * @return $this
     */
    public function changeDelete($id)
    {
        $result = $this->where('id',$id)->update(['is_delete'=>1]);
        return $result;
    }

    /**
     *
     * @param $id
     * @return array|bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function tagList($id)
    {
        if ($id){
            $hasUseType = Db::table('cn_article')->field('type_id')->where('id',$id)->find();
            $allType = Db::table('cn_article_type')->field('id,type_name')->select();
              $result = [];
              foreach ($allType as $v){
                  $select = false;
                  if (in_array($v['id'],$hasUseType)){
                      $select = true;
                  }
                  $result[$v['id']]=[
                      'id' => $v['id'],
                      'type_name' => $v['type_name'],
                      'select' => $select,
                  ];
              }
              return $result;
        }else{
            return false;
        }
    }

}
