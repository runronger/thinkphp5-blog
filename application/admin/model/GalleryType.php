<?php

namespace app\admin\model;

use think\Model;

class GalleryType extends Model
{
    //
    protected $autoWriteTimestamp = false;

    /**
     * 相册软删除
     * @param $id
     * @return $this
     */
    public function changeDelete($id)
    {
        if ($id){
            $result = $this->where('id',$id)->update(['is_delete'=>1]);
            return $result;
        }
    }
}
