<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
    //
    protected $table = 'goods';
    protected $primaryKey  = 'id';
    public $timestamps = false;
    public function scopeName($query, $name){
        $query->where('name','like','%'.$name.'%');
    }
    public function shop(){
        return $this->hasOne('App\Models\ShopModel','id','shop_id');
    }
    public function category(){
        return $this->hasOne('App\Models\GoodsCategoryModel','id','goods_category_id');
    }
    public static function upload_img($file,$filepath){
        $file_type = ['jpeg','jpg','gif','gpeg','png'];
        if(isset($file) && is_object($file)){
            $file_ext = $file->extension();  //获取图片后缀
            if(in_array(strtolower($file_ext),$file_type)){
                $new_name = 'img'.time().rand(10000,99999).'.'.$file->getClientOriginalExtension();//取个新名字
                if($file->move($filepath,$new_name)){
                    return $filepath.'/'.$new_name;
                }else{
                    return 3;//移动失败
                }
            }else{
                return 2;//格式不符
            }
        }else{
            return 1; //没有图片
        }
    }
}
