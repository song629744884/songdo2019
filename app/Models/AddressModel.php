<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AddressModel extends Model
{
    //
    protected $table = 'address';
    protected $primaryKey  = 'id';
    public $timestamps = false;


    public static function getList($userId)
    {
        return self::where('user_id',$userId)->get();

    }

    public static function findById($id)
    {
       return self::findOrfail($id);
    }

    public function handleInsert($request)
    {
        $this->user_id = Auth::id();
        $this->place = $request->input('place');
        $this->house_nuber = $request->input('house_nuber');
        $this->tag = $request->input('tag');
        $this->createTime = date('Y-m-d H:i:s');
        return $this->save();
    }

    public function handleUpdate($id,$request)
    {
        $model = self::findOrFail($id);
        $model->user_id = Auth::id();
        $model->place = $request->input('place');
        $model->house_nuber = $request->input('house_nuber');
        $model->tag = $request->input('tag');
        $model->updateTime = date('Y-m-d H:i:s');
        return $model->save();
    }

    public static function deleteById($id)
    {
        $model = self::findOrFail($id);
        return $model->delete();
    }

}
