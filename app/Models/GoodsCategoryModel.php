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
}
