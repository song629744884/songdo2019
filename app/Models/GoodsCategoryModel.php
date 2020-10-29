<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsCategoryModel extends Model
{
    //
    protected $table = 'goods_category';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function scopeName($query,$name){
        return $query->where('name','like','%'.$name.'%');
    }

    public static function getList($name)
    {
        return self::name($name)->paginate(15);
    }

    public function handleInsert($request)
    {
        $this->name = $request->input('name');
        $this->createTime = date('Y-m-d H:i:s');
        return $this->save();
    }

    public static function findById($id)
    {

        return  self::findOrFail($id);
    }

    public function handleUpdate($id,$request)
    {
        $model = self::findOrFail($id);
        $model->name = $request->input('name');
        $model->updateTime = date('Y-m-d H:i:s');
        return $model->save();

    }

    public static function deleteById($id)
    {
        $model = self::findOrFail($id);
        return $model->delete();
    }
}
